@extends('layouts_.app')


@section('content')

    <style>

        #hh{color: darkblue;}
        #lop{color: blue;}
        #pole{border-radius: 2vh;width:50vh;color: darkblue;}
        #up{background: #fac737;color: black;border-radius: 2vh;}
        #back{background: grey;color: white;border-radius: 2vh;}


    </style>

    <h1 id="hh">Edit Review</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('reviews.update',$review)}}" method="post">
        @csrf
        @method('PUT')
        <div class="for-group">
            <label id="lop">User_id</label>
            <input type="number" name="user_id" id="pole" class="form-control" value="{{old('user_id',$review->user_id)}}">
        </div>
        <div class="for-group">
            <label id="lop">Book_id</label>
            <input type="number" name="book_id" id="pole" class="form-control" value="{{old('book_id',$review->book_id)}}">
        </div>
        <div class="form-group">
            <label id="lop">Commentary</label>
            <input type="text" name="commentary" id="pole" class="form-control" value="{{old('commentary',$review->commentary)}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="up">
            Update
        </button>
    </form>

    <a href="{{route('reviews.index')}}" class="btn btn mt-3" id="back">
        Back
    </a>
@endsection
