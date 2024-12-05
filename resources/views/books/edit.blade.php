@extends('books.layout')


@section('page-content')

<legend> book list </legend>
<form method="post" action="{{route('books.update')}}">
 @csrf
 <input type="hidden" name="id" value="{{$books->id}}">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" placeholder="book title" value="{{old('title', $books->title)}}">
      @error('title')
    <div class="text-danger">{{$message}}</div>    
      @enderror
    </div>
      <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="author" placeholder="book author" value="{{old('author',$books->author)}}">
        @error('author')
        <div class="text-danger">{{$message}}</div>    
          @enderror
    </div>
      <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control"name="isbn" placeholder="book isbn" value="{{old('isbn',$books->isbn)}}">
        @error('isbn')
        <div class="text-danger">{{$message}}</div>    
          @enderror  
    </div>
      <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control"name="stock" placeholder="stock" value="{{old('stock',$books->stock)}}">
        @error('stock')
        <div class="text-danger">{{$message}}</div>    
          @enderror
    </div>
      <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control"name="price" placeholder="price" value="{{old('price',$books->price)}}">
        @error('price')
        <div class="text-danger">{{$message}}</div>    
          @enderror
    </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class ="btn btn-danger" >Back</a>
      </div>
  
</form>
@endsection