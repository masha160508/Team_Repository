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
    <h1 id="hh"><b>Show Author Information</b></h1>
<table class="table-striped">
    <tr>
        <td id="th">Name</td>
        <td id="td">{{$author->name}}</td>
    </tr>
    <tr>
        <td id="th">Date_Birthday</td>
        <td id="td">{{$author->date_birthday}}</td>
    </tr>
    <tr>
        <td id="th">Place_of_Birth</td>
        <td id="td">{{$author->place_of_birth}}</td>
    </tr>
    <tr>
        <td id="th">Date_Death</td>
        <td id="td">{{$author->date_death}}</td>
    </tr>
    <tr>
        <td id="th">place_of_death</td>
        <td id="td">{{$author->place_of_death}}</td>
    </tr>
    <tr>
        <td id="th">Job</td>
        <td id="td">{{$author->job}}</td>
    </tr>
    <tr>
        <td id="th">Place_Studies</td>
        <td id="td">{{$author->place_studies}}</td>
    </tr>
    <tr>
        <td id="th">Start_Study</td>
        <td id="td">{{$author->start_study}}</td>
    </tr>
    <tr>
        <td id="th">Graduated</td>
        <td id="td">{{$author->graduated}}</td>
    </tr>
    <tr>
        <td id="th">Additional_Information</td>
        <td id="td">{{$author->additional_information}}</td>
    </tr>

</table>

    <a href="{{route('authors.index')}}" class="btn btn" id="back">
        Back
    </a>


@endsection
