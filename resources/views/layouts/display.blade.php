<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name' , 'LT')}} </title>
        <style type="text/css">
            table {
             border-collapse: collapse;
             width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
        </style>
    </head>
    <body>
    	<div class="container">
       @yield('content')
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