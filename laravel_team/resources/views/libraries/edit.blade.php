@extends('layouts_.app')
@section('content')
    <style>

        #hh{color: darkblue;}
        #lop{color: black   ;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
        #select{
            width: 49vh;
            height: 6vh;
            border-radius: 2vh;
            color: darkblue;
        }
        #select:hover{
            color: darkblue;
            border-color:darkgoldenrod;
            box-shadow: 0 0 20px darkgoldenrod;
        }
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
