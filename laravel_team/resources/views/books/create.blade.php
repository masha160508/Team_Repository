@extends('layouts_.app')
@section('content')
    <h1 id="hh"><b>Add New Book</b></h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <style>
        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}
        #back{border-radius: 2vh;background: grey;color: white;}
        #save{border-radius:2vh;background: darkblue;color: white;}
    </style>



    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label id="lop"><b>Title</b></label>
            <input type="text" name="title" id="pole" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Language_id</b></label>
            <input type="number" name="language_id" id="pole" class="form-control" value="{{ old('language_id') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Author</b></label>
            <input type="text" name="author" id="pole" class="form-control" value="{{ old('author') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Category_id</b></label>
            <input type="number" name="category_id" id="pole" class="form-control" value="{{old('category_id')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Publication_Date</b></label>
            <input type="date" name="publication_date" id="pole" class="form-control" value="{{old('publication_date')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Description</b></label>
            <input type="text" name="description" id="pole" class="form-control" value="{{old('description')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Image</b></label>
            <input type="text" name="image" id="pole" class="form-control" value="{{old('image')}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="save">
            <b>    Save   </b>
        </button>
    </form>

    <a href="{{route('books.index')}}" class="btn btn mt-3" id="back">
      <b>  Back  </b>
    </a>
@endsection
