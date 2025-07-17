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
        #lop{color: black;}
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
        #save {
            border-radius: 2vh;
            background-color: darkblue;
            font-size: 16px;
            color: white;
            border: 2px solid darkblue transparent;
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
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label id="lop"><b>Title:</b></label>
            <input type="text" name="title" id="pole" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Language_id:</b></label>
            <select name="language_id" class="form-control" id="pole">
                @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label id="lop"><b>Author:</b></label>
            <input type="text" name="author" id="pole" class="form-control" value="{{ old('author') }}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Category_id:</b></label>
            <select name="category_id" class="form-control" id="pole">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
        <div class="form-group">
            <label id="lop"><b>Publication_Date:</b></label>
            <input type="date" name="publication_date" id="pole" class="form-control" value="{{old('publication_date')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Description:</b></label>
            <input type="text" name="description" id="pole" class="form-control" value="{{old('description')}}">
        </div>
        <div class="form-group">
            <label id="lop"><b>Image:</b></label>
            <input type="text" name="image" id="pole" class="form-control" value="{{old('image')}}">
        </div>
        <button type="submit"  id="save">
            <b>    Save   </b>
        </button>
    </form>

    <a href="{{route('books.index')}}" class="btn btn mt-3" id="back">
      <b>  Back  </b>
    </a>
@endsection
