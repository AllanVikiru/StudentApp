@extends('layouts.app')

@section('content')
<title>{{ config('app.name') }} : Homepage </title>

        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    98587 Portal
                </div>

                <div class="links">
                    <a href="/student/create">Register Student</a>
                    <a href="/fees/create">Pay Fees</a>
                </div>
            </div>
        </div>

@endsection
