@extends('layouts_.app')

@section('content')

    <style>
        #hh{color:darkblue;}
        #th{color: black;}
        #td{color:blue;}
        #back{color: white;background: grey;border-radius: 2vh;}
    </style>
    <h1 id="hh">Show Registration</h1>
    <table class="table table-striped">
        <tr>
            <td id="th"><b>Name</b></td>
            <td id="td"><b>{{$library->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Place</b></td>
            <td id="td"><b>{{$library->place}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Type</b></td>
            <td id="td"><b>{{$library->type}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Year_open</b></td>
            <td id="td"><b>{{$library->year_open}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Count_books</b></td>
            <td id="td"><b>{{$library->count_books}}</b></td>
        </tr>
    </table>
    <a class="btn btn" href="{{route('libraries.index')}}" id="back">Back</a>
@endsection
