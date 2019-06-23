<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Fees;

class PagesController extends Controller
{
    public function home()
    {
    	return view('98587.home');
    }

    public function student()
    {
    	return view('98587.student');
    }

    public function fees()
    {
    	return view('98587.fees');
    }

     public function all_fees()
    {
        return view('98587.all_fees');
    }

     public function search()
    {
        $q = Input::get('q');
        if ($q != ""){
        $student = Fees::where('student_id', 'LIKE', '%'. $q . '%')->get();
    
        if(count($student) > 0)
            return view('98587.fee_search')->withDetails($student)->withQuery($q);
        }
        return view('98587.fee_search')->withMessage("No Records Found in the Database");

    }


}
