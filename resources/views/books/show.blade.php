@extends('books.layout')

@section('page-content')
    <p>
        <a href="{{route('books.index')}}"> back </a>
    <h1> books </h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>{{$books->id}}</th>
        </tr>
        <tr>
            <th>Title</th>
            <th>{{$books->title}}</th>
        </tr>
        <tr>
            <th>Author</th>
            <th>{{$books->author}}</th>
        </tr>
        <tr>
            <th>ISBN</th>
            <th>{{$books->isbn}}</th>
        </tr>
        <tr>
            <th>Price</th>
            <th>{{$books->price}}</th>
        </tr>
        <tr>
            <th>Stock</th>
            <th>{{$books->stock}}</th>
        </tr>
@endsection