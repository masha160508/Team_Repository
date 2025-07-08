@extends('layouts_.app')
@section('content')
    <h1 id="hh"><b>Book List</b></h1>
    <a href="{{ route('books.create') }}" class="btn btn" id="add"><b>Add Book</b></a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success')}}</div>
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
                    <a href="{{route('books.show',$book)}}" class="btn btn" id="show"><b>Show</b></a>
                    <a href="{{ route('books.edit',$book) }}" class="btn btn" id="edit"><b>Edit</b></a>
                    <form action="{{route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn" id="delete"><b>Delete</b></button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
