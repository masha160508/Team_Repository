@extends('layouts_.app')
@section('content')

    <h1 id="hh"><b>Add New Language</b></h1>
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
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}
        #back{border-radius: 2vh;background: grey;color: white;}
        #save{border-radius:2vh;background: darkblue;color: white;}
    </style>

    <form action="{{route('languages.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" class="form-control" id="pole" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="save">
            <b>  Save </b>
        </button>
    </form>
    <a href="{{route('languages.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>
@endsection
