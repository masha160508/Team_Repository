@extends('layouts_.app')
@section('content')

    <h1 id="hh"><b>Language List</b></h1>
    <a href="{{route('languages.create')}}" class="btn btn" id="add"><b>Add Language</b></a>
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
