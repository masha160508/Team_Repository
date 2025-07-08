@extends('layouts_.app')

@section('content')
    <style>
        #th{color: black;}
        #td{color: blue}
        #hh{color: darkblue;}
        #back{background: grey;color: white;border-radius: 2vh;}
    </style>
    <h1 id="hh"><b>Show Category</b></h1>
    <table class="table table-striped">
        <tr>
            <td id="th"><b>Name</b></td>
            <td id="td"><b>{{$category->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Description</b></td>
            <td id="td"><b>{{$category->description}}</b></td>
        </tr>
    </table>
    <a href="{{route('category.index')}}" class="btn btn" id="back">Back</a>

@endsection
