<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
//use Illuminate\Pagination\Paginator;

class bookController extends Controller
{
    public function index (){
        $books = books:: paginate(20);
        return view('books.index')->with('books',$books);
    }
    public function show($id){
          $book = books::find($id); 
          return view('books.show')->with('books',$book);
    }
    public function create(){
        return view ('books.create');
    }
    public function store(Request $request){
        //dd(($request)->all());
        $rules=[
            'title'=>'required',
            'isbn'=>'required|digits:13',
            'author'=>'required',
            'price'=>'required|numeric|min:0',
            'stock'=>'required|integer|min:0'
        ];
        $request->validate( $rules);
        $books= new books();
        $books->title =$request->title; 
        $books->author =$request->author; 
        $books->isbn =$request->isbn; 
        $books->stock =$request->stock; 
        $books->price =$request->price; 
        $books-> save();

        //return redirect()->route('books.index');
        return redirect()->route('books.show',$books->id);
    }
    public function edit($id){
        $books = books::findOrFail($id);
        return view('books.edit')->with('books',$books);
    }
    public function update(Request $request){
        $rules=[
            'title'=>'required',
            'isbn'=>'required|digits:13',
            'author'=>'required',
            'price'=>'required|numeric|min:0',
            'stock'=>'required|integer|min:0'
        ];
        $request->validate( $rules);
        $books = books::findOrFail($request->id);
        $books->title =$request->title; 
        $books->author =$request->author; 
        $books->isbn =$request->isbn; 
        $books->stock =$request->stock; 
        $books->price =$request->price; 
        $books-> save();
        return redirect()->route('books.show',$books->id);

    }
}
