@extends('layouts_.app')
@section('content')

        <h1 id="hh"><b>Edit</b></h1>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
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

        <form action="{{route('jobChanges.update',$jobChange)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label id="lop"><b>Start_time</b></label>
                <input type="time" name="start_time" class="form-control"
                       value="{{ old('start_time', $jobChange->start_time) }}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop"><b>End_time</b></label>
                <input type="time" name="end_time" class="form-control"
                       value="{{ old('end_time', $jobChange->end_time) }}" id="pole">
            </div>

            <button type="submit" class="btn btn" id="up">
                <b> Update </b>
            </button>
        </form>
        <a href="{{route('jobChanges.index')}}" class="btn btn mt-3" id="back">Back</a>

@endsection
