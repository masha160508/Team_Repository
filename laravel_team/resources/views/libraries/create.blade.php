@extends('layouts_.app')
@section('content')
    <div class="container">
        <h1 id="clas">Add New Library</h1>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <style>
            #class {
                color: darkblue;
                width: 50vh;
                border-radius: 2vh;
            }

            #clas {
                color: darkblue;
            }

            .btn{
                width: 15vh;
                transition: background-color 0.3s ease, color 0.3s ease;
                border-radius: 2vh;
                border-color: darkblue;

            }

            .btn:hover {
                background-color:white !important;
                color: darkblue !important;
                border-radius: 2vh;
            }

            #type {
                width:50vh ;
                height: 7vh;
                border-radius: 2vh;
            }
            #clas1{
                color: blue;
            }
        </style>


        <form action="{{route('libraries.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label id="clas1">Name:</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="class">
            </div>
            <div class="form-group">
                <label id="clas1">Place:</label>
                <input type="text" name="place" class="form-control" value="{{old('place')}}" id="class">
            </div>
            <div class="form-group mb-3">
                <label for="" id="clas1">Type:</label><br>
                <select name="type" id="type" style="color: darkblue;">
                    <option value="national">National</option>
                    <option value="private">Private</option>
                </select>
            </div>
            <div class="form-group">
                <label id="clas1">Year_open:</label>
                <input type="date" name="year_open" class="form-control" value="{{old('year_open')}}" id="class">
            </div>
            <div class="form-group">
                <label id="clas1">Count_books:</label>
                <input type="number" name="count_books"  class="form-control" value="{{old('count_books')}}" id="class">
            </div>
            <button type="submit" class="btn btn"  style="background: darkblue;color:white; ">
                Save
            </button>
        </form>
        <a href="{{route('libraries.index')}}" class="btn btn mt-3" style="background: grey;border-color:darkgrey;color: white; ">Back</a>

@endsection
