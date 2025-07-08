@extends('layouts_.app')
@section('content')

    <h1 id="hh"><b>Category List</b></h1>
    <a href="{{route('category.create')}}" class="btn btn" id="add"><b>Add Category</b> </a>
@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
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
        <a href="{{route('category.show',$category)}}" class="btn btn" id="show"><b>Show</b></a>
        <a href="{{route('category.edit',$category)}}" class="btn btn" id="edit"><b>Edit</b></a>
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
