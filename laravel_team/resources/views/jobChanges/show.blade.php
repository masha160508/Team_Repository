@extends('layouts_.app')

@section('content')
    <style>
        #th{color: black;}
        #td{color: blue}
        #hh{color: darkblue;}
        #back{background: grey;color: white;border-radius: 2vh;}
    </style>
    <h1 id="hh"><b>Show JobChange</b></h1>
    <table class="table table-striped">
        <tr>
            <td id="th"><b>Start_time</b></td>
            <td id="td"><b>{{$jobChange->start_time}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>End_time</b></td>
            <td id="td"><b>{{$jobChange->end_time}}</b></td>
        </tr>
    </table>
    <a class="btn btn " href="{{route('jobChanges.index')}}" id="back">Back</a>
@endsection
