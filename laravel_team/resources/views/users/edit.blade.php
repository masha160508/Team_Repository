@extends('layouts_.app')

@section('content')

    <style>
        #hh{color: darkblue;}
        #lop{color: blue;}
        #pole{border-radius: 2vh;width:50vh;color: darkblue;}
        #up{background: #fac737;color: black;border-radius: 2vh;}
        #back{background: grey;color: white;border-radius: 2vh;}

    </style>

    <h1 id="hh"><b>Edit User</b></h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('users.update',$user)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label id="lop">Name</label>
            <input type="text" name="name" id="pole" class="form-control" value="{{old('name',$user->name)}}">
        </div>
        <div class="form-group">
            <label id="lop">Email</label>
            <input type="email" name="email" class="form-control" id="pole" value="{{old('email',$user->email)}}">
        </div>
        <div class="form-group">
            <label id="lop">Password</label>
            <input type="password" name="password" id="pole" class="form-control" value="{{old('password',$user->password)}}">
        </div>

        <button type="submit" class="btn btn mt-3" id="up">
            Update
        </button>
    </form>

    <a href="{{route('users.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>

@endsection
