@extends('layouts_.app')
@section('content')
    <style>

        #hh{
            color: #6f42c1;}
        #add{
            color: white;
            background-color: blue;
            border-radius: 1.5vh;
            font-size: 16px;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 20vh; height: 6.5vh;}
        #add:hover{
            background-color: white !important; color: darkblue;
            box-shadow:0 0 15px blue!important; }
        #th{
            color: darkslateblue;}
        #td{
            color: black;}
        #show{background: #5d5757;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #show:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px darkslategrey !important;}
        #edit{background:orange;
            color: white;
            border-radius: 2vh;
            width: 13vh;
            font-size: 16px;
            text-align: center}
        #edit:hover{
            background-color: white;
            color: orange;
            box-shadow: 0 0 17px orange !important;}
        #delete{
            background: red;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #delete:hover{
            background-color: white;
            color: red;
            box-shadow: 0 0 15px red !important;
        }

    </style>
        <h1 id="hh">Employees List</h1>
        <a href="{{route('employees.create')}}" id="add" class="btn btn">Add Employees</a><br><br>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>

        @endif

        <table class="table table-hover">
            <thead>
            <tr>
                <th id="th"><b>#</b></th>
                <th id="th"><b>Name</b></th>
                <th id="th"><b>Date_of_birth</b></th>
                <th id="th"><b>Email</b></th>
                <th id="th"><b>Address</b></th>
                <th id="th"><b>Phone</b></th>
                <th id="th"><b>Job_title</b></th>
                <th id="th"><b>Job_change_start</b></th>
                <th id="th"><b>Job_change_end</b></th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td id="td"><b>{{$loop->iteration}}</b></td>
                    <td id="td"><b>{{$employee->name}}</b></td>
                    <td id="td"><b>{{$employee->date_of_birth}}</b></td>
                    <td id="td"><b>{{$employee->email}}</b></td>
                    <td id="td"><b>{{$employee->address}}</b></td>
                    <td id="td"><b>{{$employee->phone}}</b></td>
                    <td id="td"><b>{{$employee->job_title}}</b></td>
                    <td id="td"><b>{{$employee->job_change->start_time}}</b></td>
                    <td id="td"><b>{{$employee->job_change->end_time}}</b></td>
                    <td>
                        <a href="{{route('employees.show',$employee)}}" id="show" class="btn btn"><b>Show</b></a></td>
                    <td>
                        <a href="{{route('employees.edit',$employee)}}" class="btn btn" id="edit"><b>Edit</b></a></td><td>
                        <form action="{{route('employees.destroy',$employee)}}" method="post"
                              style="display: inline-block; ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete" class="btn btn-danger mt-1"><b>Delete</b></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
