@extends('layouts_.app')

@section('content')

    <style>
        #hh{color: #6f42c1;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
        #pole:hover{
            background-color: white !important;
            color: blueviolet;
            box-shadow: 0 0 20px blueviolet;
        }
        #lop{color: darkslateblue;}
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 13vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px #6e6969 !important;
        }
        #save {
            border-radius: 1.5vh;
            background-color: #6f42c1;
            font-size: 16px;
            color: white;
            border: 2px solid transparent;
            width: 13vh;
            height: 6.5vh;
        }

        #save:hover {
            background-color: white !important;
            color: #6f42c1;
            box-shadow: 0 0 20px #4d239a;
        }

    </style>



    <h1 id="hh">Add New Author</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('authors.store')}}" method="post">
        @csrf
        <div class="from-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" id="pole" class="form-control" value="{{old('name')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Date_Birthday</b></label>
            <input type="date" name="date_birthday" id="pole" class="form-control" value="{{old('date_birthday')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_of_Birth</b></label>
            <input type="text" name="place_of_birth" id="pole" class="form-control" value="{{old('place_of_birth')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Date_Death</b></label>
            <input type="date" name="date_death" id="pole" class="form-control" value="{{old('date_death')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_of_Death</b></label>
            <input type="text" name="place_of_death" id="pole" class="form-control" value="{{old('place_of_death')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Job</b></label>
            <input type="text" name="job" id="pole" class="form-control" value="{{old('job')}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_Studies</b></label>
            <input type="text" name="place_studies" id="pole" class="form-control" value="{{old('place_studies')}}">
        </div>

        <div class="from-group">
            <label id="lop"><b>Start_Study</b></label>
            <input type="date" name="start_study" id="pole" class="form-control" value="{{old('start_study')}}">
        </div>

        <div class="from-group">
            <label id="lop"><b>Date_Graduated</b></label>
            <input type="date" name="graduated" id="pole" class="form-control" value="{{old('graduated')}}">
        </div>

        <div class="form-group">
            <label id="lop"><b>Additional_information</b></label><br>
<textarea name="additional_information" id="pole">

</textarea>
        </div>

        <button id="save" type="submit" class="btn btn">
            Save
        </button>
        <a href="{{route('authors.index')}}" class="btn btn" id="back">
            Back
        </a>
    </form>

@endsection
