@extends('layouts_.app')
@section('content')
    <style>
        #add{background: blue;color: white;border-radius: 2vh;}
        #radius{border-radius: 2vh;}
        #let{color:black;}
        #color {color: darkblue;}
    </style>
    <div class="container">
        <h1 style="color:darkblue">Library List</h1>

        <a href="{{ route('libraries.create') }}" class="btn btn" id="add">Add New Library</a><br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th id="color">#</th>
                <th id="color">Name</th>
                <th id="color">Place</th>
                <th id="color">Type</th>
                <th id="color">Year_open</th>
                <th id="color">Count_books</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($libraries as $library)
                <tr>
                    <td id="let"><b>{{$loop->iteration}}</b></td>
                    <td id="let"><b>{{ $library->name }}</b></td>
                    <td id="let"><b>{{ $library->place }}</b></td>
                    <td id="let"><b>{{ $library->type }}</b></td>
                    <td id="let"><b>{{ $library->year_open}}</b></td>
                    <td id="let"><b>{{ $library->count_books }}</b></td>

                    <td>
                        <a href="{{ route('libraries.show',$library) }}" id="radius" class="btn btn" style="background: grey;color: white;"><b>Show</b></a>
                        <a href="{{ route('libraries.edit',$library) }}" id="radius" class="btn btn" style="background: #fac737;color: black;"><b>Edit</b></a>
                        <form action="{{route('libraries.destroy', $library) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="radius" class="btn btn" style="background: red;color: white;"><b>Delete</b></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
