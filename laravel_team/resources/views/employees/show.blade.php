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
    <h1 id="hh"><b>Show Employee</b></h1>
    <table class="table table-striped">
        <tr>
            <td id="th"><b>Name</b></td>
            <td id="td"><b>{{$employee->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Date_og_birth</b></td>
            <td id="td"><b>{{$employee->date_of_birth}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Email</b></td>
            <td id="td"><b>{{$employee->email}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Address</b></td>
            <td id="td"><b>{{$employee->address}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Phone</b></td>
            <td id="td"><b>{{$employee->phone}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Phone</b></td>
            <td id="td"><b>{{$employee->job_title}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Job_change_start</b></td>
            <td id="td"><b>{{ $employee->job_change->start_time}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Job_change_end</b></td>
            <td id="td"><b>{{ $employee->job_change->end_time}}</b></td>
        </tr>

    </table>
    <a class="btn btn" href="{{route('employees.index')}}" id="back">Back</a>
@endsection
