@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}
        #back{border-radius: 2vh;background: grey;color: white;}
        #save{background: darkblue;color: white;border-radius: 2vh;}
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
            <button type="submit" class="btn btn" id="save">
                Save
            </button>
        </form>
        <a href="{{route('jobChanges.index')}}" class="btn btn mt-3" id="back">Back</a>
@endsection
