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
            width: 15vh;
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
            width: 15vh;
            height: 6vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            border-color: #575454;
        }
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

        <button type="submit"  id="up">
            Update
        </button>
        <a href="{{route('users.index')}}" class="btn btn" id="back">Back</a>
    </form>
@endsection
