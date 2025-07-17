@extends('layouts_.app')
@section('content')
    <style>
        #th{color:black ;}
        #td{color: #550655}
        #hh{color: #6f42c1;}
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 13vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px #6e6969 !important;
        }
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
