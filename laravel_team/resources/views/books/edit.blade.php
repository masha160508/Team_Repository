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
            <select name="language_id" class="form-control" id="pole">
                @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}}</option>
                @endforeach
            </select> </div>
        <div class="form-group">
            <label id="lop"><b>Author</b></label>
            <input type="text" name="author" class="form-control" id="pole" value="{{old('author',$book->author)}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Category_id</b></label>
            <select name="category_id" class="form-control" id="pole">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
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
        <button type="submit"  id="up">
            <b>      Update   </b>
        </button>
        <a href="{{route('books.index')}}" class="btn btn" id="back">
            <b> Back  </b>
        </a>
    </form>

@endsection
