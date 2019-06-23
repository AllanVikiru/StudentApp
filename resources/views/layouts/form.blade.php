<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    <body>
    <div class="container">
        @include('layouts.messages')
        @yield('content') 
        <hr>
        <hr>
        <a href="/">Home Page</a>
       <hr>
        <a href="/student/create">Register Student</a>
       <hr>
       <a href="/fees/create">Make Fee Payment</a>
       <hr>
       <a href="/fees">View All Fee Payments</a>
       <hr>
       <a href="/search">Search Fee Records</a>
   </div>
    </body>
</html>