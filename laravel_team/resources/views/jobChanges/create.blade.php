@extends('layouts_.app')
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
            width: 9.7vh;
            height: 6vh;
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
            width: 10vh;
            height: 6vh;
        }

        #save:hover {
            background-color: white !important;
            color: darkblue;
            border-color: darkblue;
            box-shadow: 0 0 20px darkblue;
        }
    </style>
        <h1 id="hh"><b>Add New JobChange</b></h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('jobChanges.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label id="lop"><b>Start_time</b></label>
                <input type="time" name="start_time" class="form-control" value="{{old('start_time')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>End_time</b></label>
                <input type="time" name="end_time" class="form-control" value="{{old('end_time')}}" id="pole">
            </div>
            <button type="submit" id="save">
                Save
            </button>
            <a href="{{route('jobChanges.index')}}" class="btn btn " id="back">Back</a>

        </form>
@endsection
