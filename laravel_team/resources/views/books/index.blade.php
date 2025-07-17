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
        #edit{background: orange    ;
            color: white;
            border-radius: 2vh;
            width: 13vh;
            font-size: 16px;
            text-align: center}
        #edit:hover{
            background-color: white;
            color: orange;
            border-color: darkorange;}
        #delete{
            background: red;
            color: white;
            border-radius: 2vh;
            width: 13vh;
        }
        #delete:hover{
            background-color: white;
            color: red;
            border-color: red;
        }
    </style>
        <h1 id="hh"><b>Book List</b></h1>
    <a href="{{ route('books.create') }}" class="btn btn" id="add"><b>Add Book</b></a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success')}}</div>
    @endif
    <table class="table table-bordered">
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
                    <a href="{{route('books.show',$book)}}" class="btn btn mt-3" id="show"><b>Show</b></a>
                   <a href="{{ route('books.edit',$book) }}" class="btn btn mt-3" id="edit"><b>Edit</b></a>
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
