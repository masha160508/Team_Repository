@extends('layouts_.app')

@section('content')

    <style>

        #th{color: black;}
        #td{color: blue}
        #hh{color: darkblue;}
        #back{background: grey;color: white;border-radius: 2vh;}

    </style>

    <h1 id="hh">Show User</h1>
    <table class="table">
        <tr>
            <td id="th"><b>Name</b></td>
            <td id="td"><b>{{$user->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Email</b></td>
            <td id="td"><b>{{$user->email}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Password</b></td>
            <td id="td"><b>{{$user->password}}</b></td>
        </tr>

    </table>
    <a href="{{route('users.index')}}" class="btn btn" id="back">Back</a>
@endsection
