@extends('layout')

@section('content')



    <form action="{{url('productcreate')}}" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" id="" placeholder="Name">
        <br><br>
        <label for="">Stock: </label>
        <input type="number" name="stock" id="" placeholder="Name">
        <br><br>
        <label for="">Price: </label>
        <input type="number" name="price" id="" placeholder="Name">
        <br><br>

        <button type="submit">Submit</button>
    </form>

    @if(session('success'))
        <span>{{session('success')}}</span>
    @endif
@endsection
