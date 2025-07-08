@extends('layouts_.app')

@section('content')

    <h1 id="hh"><b>User List</b></h1>
    <a href="{{route('users.create')}}" class="btn btn" id="add"><b>Add User</b></a>
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
