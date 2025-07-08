@extends('layouts_.app')
@section('content')

    <style>

        #hh{color: darkblue;}
        #lop{color: blue;}
        #pole{border-radius: 2vh;width:50vh;color: darkblue;}
        #up{background: #fac737;color: black;border-radius: 2vh;}
        #back{background: grey;color: white;border-radius: 2vh;}

    </style>

    <h1 id="hh"><b>Edit Book</b></h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('books.update',$book)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label id="lop"><b>Title</b></label>
            <input type="text" name="title" class="form-control" id="pole" value="{{old('title',$book->title)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Language_id</b></label>
            <input type="number" name="language_id" class="form-control" id="pole" value="{{old('language_id',$book->language_id)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Author</b></label>
            <input type="text" name="author" class="form-control" id="pole" value="{{old('author',$book->author)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Category_id</b></label>
            <input type="number" name="category_id" class="form-control" id="pole" value="{{old('category_id',$book->category_id)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Publication_Date</b></label>
            <input type="date" name="publication_date" class="form-control" id="pole" value="{{old('publication_date',$book->publication_date)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Description</b></label>
            <input type="text" name="description" class="form-control" id="pole" value="{{old('description',$book->description)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Image</b></label>
            <input type="text" name="image" class="form-control" id="pole" value="{{old('image',$book->image)}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="up">
            <b>      Update   </b>
        </button>
    </form>

    <a href="{{route('books.index')}}" class="btn btn mt-3" id="back">
        <b> Back  </b>
     </a>
@endsection
