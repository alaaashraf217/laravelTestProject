<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
      return view ('books.index')->with('books', $books);
    }
 
    
    public function create()
    {
        return view('books.create');
    }
 
  
    public function store(Request $request)
    {
        $fileextension=$request->file('image')->getClientOriginalExtension();
        $path='images/books';

        $filename=$path.'/'.time().'.'.$fileextension;
        $request->image->move($path,$filename);

        Book::create([

        'image'=>$filename,
        'title'=>$request->title,
        'description'=>$request->description

        ]);
        return redirect('books');
}
 
    
    public function show($id)
    {
        $books = Book::find($id);
        return view('books.show',compact('books'));
    }
 
    
    public function edit($id)
    {
        $books = Book::find($id);
        return view('books.edit',compact('books'));
    }
 
  
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if ($request->hasFile('image')) {
         $fileextension=$request->file('image')->getClientOriginalExtension();
        $path='images/books';
        $filename=$path.'/'.time().'.'.$fileextension;
        $request->image->move($path,$filename);
        
        }
        $book->update([
        'image'=>$filename,
        'title'=>$request->title,
        'description'=>$request->description
        ]);
        return redirect('books'); 
    }
 
  
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('books');
    }
}

