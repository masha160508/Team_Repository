@extends('layouts_.app')
@section('content')

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

    <style>
        #hh{color: darkblue;}
        #lop{color: blue;}
        #pole{border-radius: 2vh;width:50vh;color: darkblue;}
        #up{background: #fac737;color: black;border-radius: 2vh;}
        #back{background: grey;color: white;border-radius: 2vh;}
    </style>



    <form action="{{route('languages.update',$language)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" class="form-control" id="pole" value="{{old('name',$language->name)}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="up">
            Update
        </button>
    </form>

    <a href="{{route('languages.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>



@endsection
