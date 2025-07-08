@extends('layouts_.app')

@section('content')

    <h1 id="hh">Review List</h1>
    <a href="{{route('reviews.create')}}" class="btn btn" id="add"><b>Add Review</b></a>
    @if(session('success'))
        <div class="alert alert-success">
           {{session('success')}}
        </div>
    @endif

    <style>
        #hh{color: darkblue;}
        #add{color: white;background: blue;border-radius: 2vh;}
        #th{color: darkblue}
        #td{color: black;}
        #show{background: grey;color: white;border-radius: 2vh;}
        #edit{background: #fac737;color: black;border-radius: 2vh;width: 13vh;}
        #delete{background: red;color: white;border-radius: 2vh;}
    </style>

    <table class="table">
        <thead>
        <tr>
            <th id="th">#</th>
            <th id="th">User</th>
            <th id="th">Book</th>
            <th id="th">Commentary</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td id="td"><b>{{$loop->iteration}}</b></td>
                <td id="td"><b>{{$review->user->name}}</b></td>
                <td id="td"><b>{{$review->book->title}}</b></td>
                <td id="td"><b>{{$review->commentary}}</b></td>
                <td>
                    <a href="{{route('reviews.show',$review)}}" class="btn btn" id="show"><b>Show</b></a>
                    <a href="{{route('reviews.edit',$review)}}" class="btn btn" id="edit"><b>Edit</b></a>
                    <form action="{{route('reviews.destroy',$review)}}" style="display: inline-block;" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn" id="delete"><b> Delete</b></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
