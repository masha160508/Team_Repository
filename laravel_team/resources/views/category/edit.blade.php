@extends('layouts_.app')
@section('content')

    <h1 id="hh"><b>Edit Category</b></h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <style>
        #hh{color: darkblue;}
        #lop{color: blue;}
        #pole{border-radius: 2vh;width:50vh;color: darkblue;}
        #up{background: #fac737;color: black;border-radius: 2vh;}
        #back{background: grey;color: white;border-radius: 2vh;}
    </style>

    <form action="{{route('category.update',$category)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label><b id="lop">Name</b></label>
            <input type="text" name="name" class="form-control" id="pole" value="{{old('name',$category->name)}}">
        </div>
        <div class="form-group">
            <label><b id="lop">Description</b></label>
            <input type="text" name="description" class="form-control" id="pole" value="{{old('description',$category->description)}}">
        </div>
        <button type="submit" class="btn btn mt-3" id="up">
        <b>    Update  </b>
        </button>
    </form>
<a href="{{route('category.index')}}" class="btn btn mt-3" id="back">
  <b>  Back  </b>
 </a>


@endsection
