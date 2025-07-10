@extends('layouts1.app')
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
            width: 17vh;
            height: 7vh;
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
            width: 17vh;
            height: 7vh;
        }

        #save:hover {
            background-color: white !important;
            color: darkblue;
            border-color: darkblue;
            box-shadow: 0 0 20px darkblue;
        }
    </style>
    <div class="container justify-content-center">
        <div class="card login-form" style="height: 100vh;width: 130vh;">
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
        <button type="submit" id="save">
            <b>    Save   </b>
        </button>
        <a href="{{''}}" class="btn btn " id="back">
            <b>Back</b>
        </a>

    </form>

    </div>
    </div>
    </div>


@endsection
