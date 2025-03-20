@extends('layout')

@section('content')

    <h1>Show All Data</h1>
    @foreach ($products as $pro )
        <ul>
            <li>{{$pro->name}},{{$pro->stock}},{{$pro->price}}$</li>
        </ul>
    @endforeach

@endsection
