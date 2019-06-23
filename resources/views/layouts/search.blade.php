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
<div class="container">
    
<div class="jumbotron">
      <form action="{{URL::to('/search')}}" method= "" role= "search" >
            {{ csrf_field() }}
            <h2 align="center">Search Fee Records</h2>
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Search by Student ID"> <span class = "input-group-btn">
                    <button type="submit" class="btn btn-primary">Search</button>
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        @yield('content')
    </div>
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