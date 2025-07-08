@extends('layouts_.app')


@section('content')
    <style>

        #hh{color: darkblue;}
        #pole{width: 50vh;border-radius: 2vh;color: blue;}
        #lop{color: black;}
        #back{border-radius: 2vh;background: grey;color: white;}
        #save{border-radius:2vh;background: darkblue;color: white;}

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
            <input type="number" name="user_id" id="pole" class="form-control" value="{{old('user_id')}}">
        </div>
        <div class="for-group">
            <label id="lop">Book_id</label>
            <input type="number" name="book_id" id="pole" class="form-control" value="{{old('book_id')}}">
        </div>
        <div class="form-group">
            <label id="lop">Commentary</label>
            <input type="text" name="commentary" id="pole" class="form-control" value="{{old('commentary')}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="save">
            Save
        </button>
    </form>
    <a href="{{route('reviews.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>
@endsection
