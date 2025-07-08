@extends('layouts_.app')

@section('content')

    <table>
        <thead>
        <tr>
            <th>title</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$books->title}}</td>
        </tr>
        </tbody>
    </table>


@endsection
