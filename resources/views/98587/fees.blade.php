@extends('layouts.form')
@section('content')

  <title>{{ config('app.name') }} : Fees Form</title>


<div class="container">
		<div class="jumbotron">
  <h2 align="center">Fees Form</h2>              
{!! Form::open(['action' => 'FeesController@store' , 'method' => 'POST']) !!}

  <div class="form-group">
  	{{Form::label('student_id', 'Student ID')}}
    {{Form::text('student_id', '', ['class' => 'form-control', 'placeholder' => 'Student ID'])}}
</div>

<div class="form-group">
	{{Form::label('amount', 'Amount (in KES)')}}
 {{Form::text('amount', '', ['class' => 'form-control'])}}
</div>

<div class="form-group">
   {{Form::label('dop', 'Date of Payment')}}
  {{Form::date('dop', '', ['class' => 'form-control', 'placeholder' => 'Date of Payment'])}}
</div>
{{Form::submit('Pay Fees', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}
@endsection

          