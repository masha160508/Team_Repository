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
        #select{
            height: 7vh;
            width: 50vh;
            border-radius: 2vh;
            color: black;
            border-color: white;

        }
        #select:hover{
            color: orange;
            box-shadow: 0 0 20px #fac737 !important;
        }

    </style>
    <div class="container">
        <h1 id="hh">Edit</h1>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <form action="{{route('libraries.update',$library)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label id="lop"><b>Name</b></label>
                <input type="text" name="name" id="pole" class="form-control" value="{{old('name',$library->name)}}">
            </div>
            <div class="form-group">
                <label id="lop"><b>Place</b></label>
                <input type="text" name="place" id="pole" class="form-control" value="{{old('place',$library->place)}}">
            </div>
            <div class="form-group mb-3">
                <label id="lop"><b>Type</b></label><br>
                <select name="type" id="select">
                    <option value="national" id="select">National</option>
                    <option value="private" id="select">Private</option>
                </select>
            </div>
            <div class="form-group">
                <label id="lop"><b>Year_open</b></label>
                <input type="date" name="year_open" id="pole" class="form-control" value="{{old('year_open',$library->year_open)}}">
            </div>
            <div class="form-group">
                <label id="lop"><b>Count_books</b></label>
                <input type="number" name="count_books" id="pole" class="form-control" value="{{old('count_books',$library->count_books)}}">
            </div>
            <button type="submit" id="up" >
                <b>   Update  </b>
            </button>
            <a href="{{route('libraries.index')}}" class="btn btn" id="back">Back</a>
        </form>


@endsection
