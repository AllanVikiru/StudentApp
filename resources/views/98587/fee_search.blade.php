@extends('layouts.search')

<head>
    <title>{{config('app.name' , 'LT')}} : Search Records</title>
</head>

@section('content')

@if(isset($details))
        <p>The search results for student ID <b> {{ $query }} </b> are: </p>
        <table>
        <thead>
            <tr>
                <th>Amount</th>
                <th>Date of Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $student)
            <tr>
                <td> {{ $student->amount }} </td>
                <td> {{ $student->dop }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
        <p> {{ $message }}</p>
        @endif

@endsection