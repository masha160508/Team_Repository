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
        <div class="card login-form" style="height: 70vh;width: 125vh;">
            <div class="row justify-content-center h-100">

<form action="{{route('login')}}" method="post" style="margin-top: 7vh;">
    <h1 id="hh">Login</h1>
    @csrf
    <label id="lop">Email-address:</label>
    <input type="email" name="email" id="pole" class="form-control" value="{{old('email')}}">
    <label id="lop">Password:</label>
    <input type="password" name="password" id="pole" class="form-control" value="{{old('password')}}"><br>
    <button type="submit"  id="save">
        log in
    </button>
    <a href="{{route('welcome')}}" class="btn btn" id="back">
        Back
    </a>

</form>


            </div>
        </div>
    </div>
@endsection
