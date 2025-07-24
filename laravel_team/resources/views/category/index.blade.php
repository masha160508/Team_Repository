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
    <h1 id="hh"><b>Category List</b></h1>
    <a href="{{route('category.create')}}" class="btn btn" id="add"><b>Add Category</b> </a>
@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
<table class="table table-hover">
<thead>
<tr>
    <th id="th"><b>#</b></th>
    <th><b id="th"><b>Name</b></th>
    <th><b id="th"><b>Description</b></th>
</tr>
</thead>
    <tbody>
    @foreach($categories as $category)
<tr>
    <td id="td"><b>{{$loop->iteration}}</b></td>
    <td id="td"><b>{{$category->name}}</b></td>
    <td id="td"><b>{{$category->description}}</b></td>
    <td>
        <a href="{{route('category.show',$category)}}" class="btn btn" id="show"><b>Show</b></a></td><td>
        <a href="{{route('category.edit',$category)}}" class="btn btn" id="edit"><b>Edit</b></a></td><td>
        <form action="{{route('category.destroy',$category)}}" style="display: inline-block;" method="post">
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
