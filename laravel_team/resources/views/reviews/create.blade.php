@extends('layouts_.app')
@section('content')
    <style>
        #hh{color: #6f42c1;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
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

    </style>
    <h1 id="hh">Add New Review</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('reviews.store')}}" method="post">
        @csrf
        <div class="for-group">
            <label id="lop">User_id</label>
        <select name="user_id" class="form-control" id="pole">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="for-group">
            <label id="lop">Book_id</label>
        <select name="book_id" class="form-control" id="pole">
            @foreach($books as $book)
                <option value="{{$book->id}}">{{$book->title}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label id="lop">Commentary</label>
            <input type="text" name="commentary" id="pole" class="form-control" value="{{old('commentary')}}">
        </div>
        <button type="submit"  id="save">
            Save
        </button>
        <a href="{{route('reviews.index')}}" class="btn btn " id="back">Back</a>
    </form>
@endsection
