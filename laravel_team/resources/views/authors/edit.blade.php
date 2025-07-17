@extends('layouts_.app')

@section('content')


    <style>

        #hh{color: darkblue;}
        #lop{color: black   ;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
        #pole:hover{
            color: darkblue;
            border-color: darkgoldenrod;
            box-shadow: 0 0 20px darkgoldenrod;
        }
        #up{
            border-radius: 2vh;
            background-color: #d7a52b;
            font-size: 16px;
            color: white;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 10vh;
            height: 6vh;
        }

        #up:hover {
            background-color: white !important;
            color: darkgoldenrod;
            border-color: darkgoldenrod;
            box-shadow: 0 0 20px darkgoldenrod;
        }

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

    <h1 id="hh">Edit</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('authors.update',$author)}}" method="post">
        @csrf
        @method('PUT')
        <div class="from-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" id="pole" class="form-control" value="{{old('name',$author->name)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Date_Birthday</b></label>
            <input type="date" name="date_birthday" id="pole" class="form-control" value="{{old('date_birthday',$author->date_birthday)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_of_Birth</b></label>
            <input type="text" name="place_of_birth" id="pole" class="form-control" value="{{old('place_of_birth',$author->place_of_birth)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Date_Death</b></label>
            <input type="date" name="date_death" id="pole" class="form-control" value="{{old('date_death',$author->date_death)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_of_Death</b></label>
            <input type="text" name="place_of_death" id="pole" class="form-control" value="{{old('place_of_death',$author->place_of_death)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Job</b></label>
            <input type="text" name="job" id="pole" class="form-control" value="{{old('job',$author->job)}}">
        </div>
        <div class="from-group">
            <label id="lop"><b>Place_Studies</b></label>
            <input type="text" name="place_studies" id="pole" class="form-control" value="{{old('place_studies',$author->place_studies)}}">
        </div>

        <div class="from-group">
            <label id="lop"><b>Start_Study</b></label>
            <input type="date" name="start_study" id="pole" class="form-control" value="{{old('start_study',$author->start_study)}}">
        </div>

        <div class="from-group">
            <label id="lop"><b>Date_Graduated</b></label>
            <input type="date" name="graduated" id="pole" class="form-control" value="{{old('graduated',$author->graduated)}}">
        </div>

        <div class="form-group">
            <label id="lop">Additional_information</label>
            <textarea name="additional_information" id="pole">

</textarea>
        </div>

        <button type="submit" class="btn btn" id="up">
            Update
        </button>

        <a href="{{route('authors.index')}}" class="btn btn" id="back">
            Back
        </a>
    </form>

@endsection
