@extends('layouts_.app')

@section('content')
    <style>
        #th{color: black;}
        #td{color: blue}
        #hh{color: darkblue;}
        #back{background: grey;color: white;border-radius: 2vh;}

    </style>
    <h1 id="hh">Show Review</h1>
    <table class="table">
        <tr>
            <td id="th"><b>User</b></td>
            <td id="td"><b>{{$review->user->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Book</b></td>
            <td id="td"><b>{{$review->book->title}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Commentary</b></td>
            <td id="td"><b>{{$review->commentary}}</b></td>
        </tr>
    </table>
    <a href="{{route('reviews.index')}}" class="btn btn" id="back">Back</a>

@endsection
