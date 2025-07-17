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
            width: 25vh; height: 6vh;}
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
        #edit{background: orange;
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
            width: 13vh;
            border-radius: 2vh;}
        #delete:hover{
            background-color: white;
            color: red;
            border-color: red;
        }
    </style>
    <h1 id="hh"><b>Language List</b></h1>
    <a href="{{route('languages.create')}}" class="btn btn" id="add"><b>Add Language</b></a>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th id="th">#</th>
            <th id="th">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($languages as $language)
            <tr>
                <td id="td"><b>{{$loop->iteration}}</b></td>
                <td id="td"><b>{{$language->name}}</b></td>
                <td>
                    <a href="{{route('languages.show',$language)}}" class="btn btn" id="show"><b>Show</b></a>
                    <a href="{{route('languages.edit',$language)}}" class="btn btn" id="edit"><b>Edit</b></a>
                    <form action="{{route('languages.destroy',$language)}}" style="display: inline-block;" method="post">
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
