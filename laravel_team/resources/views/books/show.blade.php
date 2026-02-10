@extends('layouts_.app')

@section('content')
    <style>
        #th{color:black ;}
        #td{color: #550655}
        #hh{color: #6f42c1;}
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
    </style>
    <h1 id="hh"><b>Show Book</b></h1>
    <table class="table table-striped">
        <tr>
            <td id="th"><b>Title</b></td>
            <td id="td"><b>{{$book->title}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Language</b></td>
            <td id="td"><b>{{$book->language->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Author</b></td>
            <td id="td"><b>{{$book->author}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Category</b></td>
            <td id="td"><b>{{$book->category->name}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Publication_Date</b></td>
            <td id="td"><b>{{$book->publication_date}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Description</b></td>
            <td id="td"><b>{{$book->description}}</b></td>
        </tr>
        <tr>
            <td id="th"><b>Image</b></td>
            <td id="td"><b>{{$book->image}}</b></td>
        </tr>
          </table>
    <a href="{{route('books.index')}}" class="btn btn mt-3" id="back">Back</a>
@endsection
