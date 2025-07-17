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


    <h1 id="hh">Author List</h1>
<a href="{{route('authors.create')}}" class="btn btn" id="add" >
    <b>   Add Author   </b>
</a>
        @if(session('success'))
            <div class="alert alert-danger">
                {{session('success')}}
            </div>
        @endif
    <table class="table">
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
            <a href="{{route('authors.show',$author)}}" class="btn btn" id="show">Show</a>
            <a href="{{route('authors.edit',$author)}}" class="btn btn" id="edit">Edit</a>
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
