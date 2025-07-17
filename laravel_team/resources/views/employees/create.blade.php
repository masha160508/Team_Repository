@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
        #pole:hover{
            background-color: white !important;
            color: darkblue;
            border-color: darkblue;
            box-shadow: 0 0 20px rgba(0, 14, 139, 0.86);
        }
        #lop{color: black;}
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 9.7vh;
            height: 6vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            border-color: #575454;
        }
        #save {
            border-radius: 2vh;
            background-color: darkblue;
            font-size: 16px;
            color: white;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 10vh;
            height: 6vh;
        }

        #save:hover {
            background-color: white !important;
            color: darkblue;
            border-color: darkblue;
            box-shadow: 0 0 20px darkblue;
        }
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
                <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_title</b></label>
                <input type="text" name="job_title" class="form-control" value="{{old('job_title')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>Job_change_id</b></label>
               <select name="jobChange_id" class="form-control" id="pole">
                   @foreach($jobChanges as $jobChange)
                       <option value="{{$jobChange->id}}">от  {{$jobChange->start_time}}   до   {{$jobChange->end_time}}</option>
                   @endforeach
               </select>
                </div>
            <button type="submit" id="save">
                Save
            </button>
            <a href="{{route('employees.index')}}" class="btn btn " id="back">Back</a>
        </form>


@endsection
