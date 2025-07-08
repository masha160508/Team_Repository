@extends('layouts_.app')

@section('content')
    <style>
        #hh{color: darkblue;}
        #add{background: blue;color: white;border-radius: 2vh;}
        #th{color: blue;}
        #td{color:black;}
        #show{border-radius: 2vh;background: grey;color: white;}
        #edit{border-radius: 2vh;background: #fac737;color: black;}
        #delete{border-radius: 2vh;background: red;color: white;}
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
