<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\Fees;
use DB;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $fees = Fees::all();
    $sum = DB::table('fees')->sum('amount');
       
    return view('98587.all_fees', [
        'fees' => $fees, 
        'sum' => $sum,
        ]);

    return view('98587.all_fees')->compact('fees', 'sum');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('98587.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'amount' => 'required',
            'dop' =>'required'
        ]);

        //Create Post
        $fees = new Fees;
        $fees->student_id = $request->input('student_id');
        $fees->amount = $request->input('amount');
        $fees->dop = $request->input('dop');
        try{
            $fees->save();
        }catch(QueryException $ex){ 
             return redirect('/fees/create')->with('error', 'Payment Failed. Please enter a valid Student ID');//
        }
        return redirect('/fees/create')->with('success', 'Payment Made'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
