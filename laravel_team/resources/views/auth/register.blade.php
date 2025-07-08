@extends('layouts_.app')
@section('content')


    <style>
        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}
        #back{border-radius: 2vh;background: grey;color: white;}
        #save{border-radius:2vh;background: darkblue;color: white;}
    </style>
    <div class="container">
        <div class="card login-form" style="height: 100vh">
            <div class="row justify-content-center h-100">

    <form action="{{route('register')}}" method="post" style="margin-top: 10vh;">
        <h1 id="hh">Registration User</h1>
        @csrf
        <div class="form-group">
            <label id="lop"><b>Name</b></label>
            <input type="text" name="name" id="pole" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Email</b></label>
            <input type="email" name="email" id="pole" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Password</b></label>
            <input type="password" name="password" id="pole" class="form-control" value="{{ old('password') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Password_Confirmation</b></label>
            <input type="password" name="password_confirmation" id="pole" class="form-control" value="{{ old('password_confirmation') }}">
        </div>
        <button type="submit" class="btn btn mt-3" id="save">
            <b>    Save   </b>
        </button>
        <a href="{{''}}" class="btn btn mt-3" id="back">
            <b>Back</b>
        </a>

    </form>

    </div>
    </div>
    </div>


@endsection
