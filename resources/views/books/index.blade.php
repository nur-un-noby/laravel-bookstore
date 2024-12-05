@extends('books.layout')

@section('page-content')

<div class="row mt-2">
    <div class="col-lg-10">
        Search functionality
    </div>
    <div class="col-lg-2">
        <p class="text-end">
           <a href="{{route('books.create')}}" class="btn btn-primary"> New Book </a> 
        </p>
    </div>
</div>


    <h1>Books List</h1>
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}" > view </a>
                    <a href="{{route('books.edit',$book->id)}}" > edit </a>
            </tr>
            @endforeach
    </table>

    
    {{ $books->links() }}


@endsection
