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
        #edit{background: darkgoldenrod;
            color: white;
            border-radius: 2vh;
            width: 13vh;
            font-size: 16px;
            text-align: center}
        #edit:hover{
            background-color: white;
            color: darkgoldenrod;
            border-color: darkgoldenrod;}
        #delete{
            background: #970a0a;
            color: white;
            width: 13vh;
            border-radius: 2vh;}
        #delete:hover{
            background-color: white;
            color: darkred;
            border-color: darkred;
        }
    </style>
        <h1 id="hh"><b>JobChange List</b></h1>
        <a href="{{route('jobChanges.create')}}" class="btn btn" id="add"><b>Add JobChange</b></a><br><br>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>

        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th id="th"><b>#</b></th>
                <th id="th"><b>Start_time</b></th>
                <th id="th"><b>End_time</b></th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobChanges as $jobChange)
                <tr>
                    <td id="td"><b>{{$loop->iteration}}</b></td>
                    <td id="td"><b>{{$jobChange->start_time}}</b></td>
                    <td id="td"><b>{{$jobChange->end_time}}</b></td>
                    <td>
                        <a href="{{route('jobChanges.show',$jobChange)}}" id="show" class="btn btn">Show</a>
                        <a href="{{route('jobChanges.edit',$jobChange)}}" id="edit" class="btn btn">Edit</a>
                        <form action="{{route('jobChanges.destroy',$jobChange)}}"  method="post"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete" class="btn btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
