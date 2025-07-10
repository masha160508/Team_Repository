@extends('layouts_.app')
@section('content')
    <style>
        #th{color: black;}
        #td{color: #550655}
        #hh{color: darkblue;}
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 9.7vh;
            height: 5.9vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            border-color: #575454;
        }
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
