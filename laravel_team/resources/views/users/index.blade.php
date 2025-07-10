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
    <h1 id="hh"><b>User List</b></h1>
    <a href="{{route('users.create')}}" class="btn btn" id="add"><b>Add User</b></a>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th id="th">#</th>
            <th id="th">Name</th>
            <th id="th">Email</th>
            <th id="th">Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td id="td"><b>{{$loop->iteration}}</b></td>
                <td id="td"><b>{{$user->name}}</b></td>
                <td id="td"><b>{{$user->email}}</b></td>
                <td id="td"><b>{{$user->password}}</b></td>
                <td>
                    <a href="{{route('users.show',$user)}}" class="btn btn" id="show"><b>Show</b></a>
                    <a href="{{route('users.edit',$user)}}" class="btn btn" id="edit"><b>Edit</b></a>
<form action="{{route('users.destroy',$user)}}" style="display: inline-block;" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn" id="delete">
        <b> Delete </b>
    </button>
</form>
    </td>
       </tr>
        @endforeach
        </tbody>
    </table>
@endsection
