@extends('layouts_.app')

@section('content')
    <style>
     #hh{color: darkblue;}
     #pole{width: 50vh;border-radius: 2vh;color: blue;}
    #lop{color: black;}
    #back{border-radius: 2vh;background: grey;color: white;}
    </style>
    <div class="container">
        <h1 id="hh">Add New Employee</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('employees.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label id="lop"><b>Name</b></label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Date_of_birth</b></label>
                <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Email</b></label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}" id="pole">
            </div>

            <div class="form-group">
                <label id="lop"><b>Address</b></label>
                <input type="text" name="address" class="form-control" value="{{old('address')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Phone</b></label>
                <input type="number" name="phone" class="form-control" value="{{old('phone')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_title</b></label>
                <input type="text" name="job_title" class="form-control" value="{{old('job_title')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_change_id</b></label>
                <input type="number" name="job_change_id" class="form-control" value="{{old('job_change_id')}}" id="pole">
            </div>
            <button type="submit" class="btn btn" style="background: blue;color: white;border-radius: 2vh;">
                Save
            </button>

        </form>
        <a href="{{route('employees.index')}}" class="btn btn mt-3" id="back">Back</a>

@endsection
