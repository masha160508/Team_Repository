@extends('layouts_.app')
@section('content')
    <style>

        #hh{
            color: #6f42c1;}
        #add{
            color: white;
            background-color: blue;
            border-radius: 1.5vh;
            font-size: 16px;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 20vh; height: 6.5vh;}
        #add:hover{
            background-color: white !important; color: darkblue;
            box-shadow:0 0 15px blue!important; }
        #th{
            color: darkslateblue;}
        #td{
            color: black;}
        #show{background: #5d5757;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #show:hover{
            background-color: white;
            color: grey;
            box-shadow: 0 0 20px darkslategrey !important;}
        #edit{background:orange;
            color: white;
            border-radius: 2vh;
            width: 13vh;
            font-size: 16px;
            text-align: center}
        #edit:hover{
            background-color: white;
            color: orange;
            box-shadow: 0 0 17px orange !important;}
        #delete{
            background: red;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #delete:hover{
            background-color: white;
            color: red;
            box-shadow: 0 0 15px red !important;
        }
    </style>
        <h1 id="hh"><b>Book List</b></h1>
    <a href="{{ route('books.create') }}" class="btn btn" id="add"><b>Add Book</b></a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success')}}</div>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th id="th">#</th>
            <th id="th">Title</th>
            <th id="th">Language</th>
            <th id="th">Author</th>
            <th id="th">Category</th>
            <th id="th">Publication_Date</th>
            <th id="th">Description</th>
            <th id="th">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td id="td"><b>{{$loop->iteration}}</b></td>
                <td id="td"><b>{{$book->title}}</b></td>
                <td id="td"><b>{{$book->language->name}}</b></td>
                <td id="td"><b>{{$book->author}}</b></td>
                <td id="td"><b>{{$book->category->name}}</b></td>
                <td id="td"><b>{{$book->publication_date}}</b></td>
                <td id="td"><b>{{$book->description}}</b></td>
                <td id="td"><b>{{$book->image}}</b></td>
                <td>
                    <a href="{{route('books.show',$book)}}" class="btn btn mt-3" id="show"><b>Show</b></a></td><td>
                    <a href="{{ route('books.edit',$book) }}" class="btn btn mt-3" id="edit"><b>Edit</b></a></td><td>
                    <form action="{{route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn mt-3" id="delete"><b>Delete</b></button>
                    </form>
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
@endsection
