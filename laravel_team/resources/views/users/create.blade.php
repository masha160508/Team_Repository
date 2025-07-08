@extends('layouts_.app')

@section('content')

    <h1 id="hh"><b>Add New User</b></h1>
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

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" id="pole" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Email</b></label>
            <input type="email" name="email" id="pole" class="form-control" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Password</b></label>
            <input type="password" name="password" id="pole" class="form-control" value="{{old('password')}}">
        </div>

        <button type="submit" class="btn btn mt-3" id="save">
            Save
        </button>
    </form>
    <a href="{{route('users.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>


@endsection
