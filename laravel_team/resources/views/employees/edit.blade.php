@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: #fac737;}
        #lop{color: #fac737;}
        #pole{width: 50vh;border-radius: 2vh;color: black;}
        #pole:hover{
            color: orange;
            box-shadow: 0 0 20px #fac737;
        }
        #up{
            border-radius: 2vh;
            background: #fac737;
            color: white;
            width: 15vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center;
            border:  #fac737;
        }
        #up:hover{
            background-color: white;
            color: #fac737;
            box-shadow: 0 0 20px orange !important

        }
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 15vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px #6e6969 !important;
        }
        #select{
            height: 7vh;
            width: 50vh;
            border-radius: 2vh;
            color: black;
            border-color: white;

        }
        #select:hover{
            color: orange;
            box-shadow: 0 0 20px #fac737 !important;
        }

    </style>
    <div class="container">
        <h1 id="hh">Edit</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('employees.update',$employee)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label id="lop"><b>Name</b></label>
                <input type="text" name="name" class="form-control" value="{{old('name',$employee->name)}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Date_of_birth</b></label>
                <input type="date" name="date_of_birth" class="form-control"
                       value="{{old('date_of_birth',$employee->date_of_birth)}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Email</b></label>
            <input type="email" name="email" class="form-control" value="{{old('email',$employee->email)}}" id="pole">
            </div>

            <div class="form-group">
                <label id="lop"><b>Address</b></label>
            <input type="text" name="address" class="form-control" value="{{old('address',$employee->address)}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Phone</b></label>
            <input type="text" name="phone" class="form-control" value="{{old('phone',$employee->phone)}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_title</b></label>
                <input type="text" name="job_title" class="form-control"
                       value="{{old('job_title',$employee->job_title)}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_change_id</b></label>
                <select name="jobChange_id" class="form-control" id="pole">
                    @foreach($jobChanges as $jobChange)
                        <option value="{{$jobChange->id}}">от  {{$jobChange->start_time}}   до   {{$jobChange->end_time}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"  id="up">
                <b>  Update  </b>
             </button>
            <a href="{{route('employees.index')}}" class="btn btn " id="back">Back</a>

        </form>
@endsection
