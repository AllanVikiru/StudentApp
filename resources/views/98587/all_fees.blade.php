
@extends('layouts.display')

<head>
	<title>{{config('app.name' , 'LT')}} : Fee Payments</title>
</head>

@section('content')
<h1>Fee Payments</h1>
@if(count($fees) > 0)
<table>
				<tr>
					<th>Student ID </th>
					<th>Amount (in KES) </th>
					<th>Date of Payment </th>
				</tr>
	@foreach ($fees as $fee) 
				 <tr>
					<td>{{$fee->student_id}} </td>
					<td>{{$fee->amount}} </td>
					<td>{{$fee->dop}} </td>
				</tr>
    @endforeach
    </table>
@else
	<p>No Fees Paid</p>
@endif
<hr>
<hr>
@if($sum) 
<h4>Total Amount of Fees Paid:</h4> KES {{$sum}}
@endif
<hr>
<hr>

@endsection