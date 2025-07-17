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

    <div class="container">
        <h1 id="hh">Library List</h1>

        <a href="{{ route('libraries.create') }}" class="btn btn" id="add"><b>Add Library</b></a><br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th id="th">#</th>
                <th id="th">Name</th>
                <th id="th">Place</th>
                <th id="th">Type</th>
                <th id="th">Year_open</th>
                <th id="th">Count_books</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($libraries as $library)
                <tr>
                    <td id="td"><b>{{$loop->iteration}}</b></td>
                    <td id="td"><b>{{ $library->name }}</b></td>
                    <td id="td"><b>{{ $library->place }}</b></td>
                    <td id="td"><b>{{ $library->type }}</b></td>
                    <td id="td"><b>{{ $library->year_open}}</b></td>
                    <td id="td"><b>{{ $library->count_books }}</b></td>

                    <td>
                        <a href="{{ route('libraries.show',$library) }}" id="show" class="btn btn" ><b>Show</b></a>
                        <a href="{{ route('libraries.edit',$library) }}" id="edit" class="btn btn" ><b>Edit</b></a>
                        <form action="{{route('libraries.destroy', $library) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete" class="btn btn" ><b>Delete</b></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
