@extends('layouts_.app')
@section('content')
    <style>

        #hh{color: #fac737;}
        #lop{color: #fac737;}
        #pole{width: 50vh;border-radius: 2vh;color: black;}
        #pole:hover{
            color: orange;
            box-shadow: 0 0 20px #fac737;
        }
        #up{
            border-radius: 2vh;
            background: #fac737;
            color: white;
            width: 15vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center;
            border:  #fac737;
        }
        #up:hover{
            background-color: white;
            color: #fac737;
            box-shadow: 0 0 20px orange !important

        }

        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 15vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px #6e6969 !important;
        }
    </style>
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

            <button type="submit"  id="up">
                <b> Update </b>
            </button>
            <a href="{{route('jobChanges.index')}}" class="btn btn " id="back">Back</a>

        </form>

@endsection
