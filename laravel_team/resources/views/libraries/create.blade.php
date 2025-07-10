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
        #select{
            width: 49vh;
            height: 6vh;
            border-radius: 2vh;
            color: darkblue;
        }
        #select:hover{
            color: darkblue;
            border-color:darkblue;
            box-shadow: 0 0 20px darkblue;
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
