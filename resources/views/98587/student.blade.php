@extends('layouts.form')
@section('content')
<title>{{ config('app.name') }} : Students Form</title>

	<div class="container">
		<div class="jumbotron">
  <h2 align="center">Students Form</h2>              
{!! Form::open(['action' => 'StudentController@store' , 'method' => 'POST']) !!}

  <div class="form-group">
  	{{Form::label('name', 'Full Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
</div>

<div class="form-group">
	{{Form::label('dob', 'Date of Birth')}}
 {{Form::date('dob', '', ['class' => 'form-control'])}}
</div>

<div class="form-group">
   {{Form::label('email', 'Email Address')}}
  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email Address'])}}
</div>
{{Form::submit('Register Student', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}


@endsection
