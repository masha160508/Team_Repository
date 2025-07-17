@extends('layouts_.app')
@section('content')
    <style>

        #hh{color: darkblue;}
        #lop{color: black   ;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
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
            width: 10vh;
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
            width: 9.7vh;
            height: 5.9vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            border-color: #575454;
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
    </form>

    <a href="{{route('books.index')}}" class="btn btn mt-3" id="back">
        <b> Back  </b>
     </a>
@endsection
