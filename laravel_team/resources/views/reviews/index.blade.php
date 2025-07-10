@extends('layouts_.app')
@section('content')
    <style>

        #hh{
            color: darkblue;}
        #add{
            color: white;
            background-color: #2424b1;
            border-radius: 2vh;
            font-size: 16px;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 20vh; height: 6vh;}
        #add:hover{
            background-color: white !important; color: darkblue;
            border-color: darkblue;}
        #th{
            color: darkblue}
        #td{
            color: black;}
        #show{background: #5d5757;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #show:hover{
            background-color: white;
            color: grey; border-color: #575454;}
        #edit{background: darkgoldenrod;
            color: white;
            border-radius: 2vh;
            width: 13vh;
            font-size: 16px;
            text-align: center}
        #edit:hover{
            background-color: white;
            color: darkgoldenrod;
            border-color: darkgoldenrod;}
        #delete{
            background: #970a0a;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #delete:hover{
            background-color: white;
            color: darkred;
            border-color: darkred;
        }
    </style>
    <h1 id="hh">Review List</h1>
    <a href="{{route('reviews.create')}}" class="btn btn" id="add"><b>Add Review</b></a>
    @if(session('success'))
        <div class="alert alert-success">
           {{session('success')}}
        </div>
    @endif
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
