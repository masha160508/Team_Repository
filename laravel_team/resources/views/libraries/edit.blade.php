@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #select{width: 50vh;height: 7vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}


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
                    <option value="national">National</option>
                    <option value="private">Private</option>
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
            <button type="submit" class="btn btn" style="background: #fac737;color: black;border-radius: 2vh;" >
                <b>   Update  </b>
            </button>
        </form>
        <a href="{{route('libraries.index')}}" class="btn btn mt-3" style="background: grey;color: white;border-radius: 2vh;">Back</a>

@endsection
