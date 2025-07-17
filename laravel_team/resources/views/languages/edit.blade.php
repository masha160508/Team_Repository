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
    </style>
    <h1 id="hh"><b>Edit Language</b></h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <form action="{{route('languages.update',$language)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" class="form-control" id="pole" value="{{old('name',$language->name)}}">
        </div>
        <button type="submit"  id="up">
            Update
        </button>
         <a href="{{route('languages.index')}}" class="btn btn " id="back">Back</a>
     </form>
    @endsection
