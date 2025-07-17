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


    <h1 id="hh">Author List</h1>
<a href="{{route('authors.create')}}" class="btn btn" id="add" >
    <b>   Add Author   </b>
</a>
        @if(session('success'))
            <div class="alert alert-danger">
                {{session('success')}}
            </div>
        @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Date_Birth</th>
            <th>Place_of_Birth</th>
            <th>Date_Death</th>
            <th>Place_of_Death</th>
            <th>Job</th>
            <th>Place_Studies</th>
            <th>Graduated</th>
            <th>Additional_information</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <td>{{$author->name}}</td>
            <td>{{$author->date_birth}}</td>
            <td>{{$author->place_of_birth}}</td>
            <td>{{$author->date_death}}</td>
            <td>{{$author->place_of_death}}</td>
            <td>{{$author->job}}</td>
            <td>{{$author->place_studies}}</td>
            <td>{{$author->graduated}}</td>
            <td>{{$author->additional_infromation}}</td>
            <td>
                <a href="{{route('authors.show',$author)}}" class="btn btn" id="show">Show</a></td><td>
                <a href="{{route('authors.edit',$author)}}" class="btn btn" id="edit">Edit</a></td><td>
            <form action="{{route('authors.destroy',$author)}}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn" id="delete">Delete</button>
            </form>
            </td>
        @endforeach
        </tbody>
    </table>



@endsection
