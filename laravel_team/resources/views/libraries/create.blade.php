@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: #6f42c1;}
        #pole{width: 50vh;border-radius: 2vh;color: blueviolet;}
        #pole:hover{
            background-color: white !important;
            color: blueviolet;
            box-shadow: 0 0 20px blueviolet;
        }
        #lop{color: darkslateblue;}
        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 13vh;
            height: 6.5vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px #6e6969 !important;
        }
        #save {
            border-radius: 1.5vh;
            background-color: #6f42c1;
            font-size: 16px;
            color: white;
            border: 2px solid transparent;
            width: 13vh;
            height: 6.5vh;
        }

        #save:hover {
            background-color: white !important;
            color: #6f42c1;
            box-shadow: 0 0 20px #4d239a;
        }
        #select{
            border: 1px solid white;
            height: 7vh;
            width: 50vh;
            border-radius: 2vh;
            color: darkblue;
        }
        #select:hover{
            color: #6f42c1;
            box-shadow: 0 0 20px blueviolet !important;
            border: 1px solid white;
        }

    </style>
    <div class="container">
        <h1 id="hh">Add New Library</h1>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('libraries.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label id="lop">Name:</label>
                <input type="text" name="name" class="form-control"  value="{{old('name')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop">Place:</label>
                <input type="text" name="place" class="form-control" value="{{old('place')}}" id="pole">
            </div>
            <div class="form-group mb-3">
                <label for="" id="lop">Type:</label><br>
                <select name="type"  id="select">
                    <option value="national" id="select">National</option>
                    <option value="private" id="select">Private</option>
                </select>
            </div>
            <div class="form-group">
                <label id="lop">Year_open:</label>
                <input type="date" name="year_open" class="form-control" value="{{old('year_open')}}" id="pole">
            </div>
            <div class="form-group">
                <label id="lop">Count_books:</label>
                <input type="number" name="count_books"  class="form-control" value="{{old('count_books')}}" id="pole">
            </div>
            <button type="submit"  id="save">
                Save
            </button>
            <a href="{{route('libraries.index')}}" id="back" class="btn btn ">Back</a>
        </form>



@endsection
