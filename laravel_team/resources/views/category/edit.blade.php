@extends('layouts_.app')
@section('content')
    <style>

        #hh{color: darkblue;}
        #lop{color: black   ;}
        #pole{width: 50vh;border-radius: 2vh;color: darkblue;}
        #pole:hover{
            color: darkblue;
            border-color: darkgoldenrod;
            box-shadow: 0 0 20px darkgoldenrod;
        }
        #up{
            border-radius: 2vh;
            background-color: #d7a52b;
            font-size: 16px;
            color: white;
            border: 2px solid transparent;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            width: 15vh;
            height: 6vh;
        }

        #up:hover {
            background-color: white !important;
            color: darkgoldenrod;
            border-color: darkgoldenrod;
            box-shadow: 0 0 20px darkgoldenrod;
        }

        #back{border-radius: 2vh;
            background: grey;
            color: white;
            width: 15vh;
            height: 6vh;
            font-size: 16px;
            text-align: center
        }
        #back:hover{
            background-color: white;
            color: grey;
            border-color: #575454;
        }
    </style>
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
        <button type="submit"  id="up">
        <b>    Update  </b>
        </button>
        <a href="{{route('category.index')}}" class="btn btn" id="back"><b>Back</b></a>
    </form>

@endsection
