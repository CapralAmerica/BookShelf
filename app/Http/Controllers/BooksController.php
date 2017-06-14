<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function addNewBook(Request $request)
    {
       $this->validate($request, [
           'name'=>'required|max:255',
           'author'=>'required|max:255',
           'preview'=>'required|max:255',
           'description'=>'required',
           'image'=>'required|max:255',
           'is_available'=>'required',
           'price'=>'required'
       ]);

       $book = new Book;
       $book->name = $request['name'];
       $book->author = $request['author'];
       $book->preview = $request['preview'];
       $book->description = $request['description'];
       $book->image = $request['image'];
       $book->is_available = $request['is_available'];
       $book->price = $request['price'];

       $book->save();

       Session::flash('message','Book successfuly added!');

       return redirect()->back();
    }


    public function addToCart(Request $request, $id)
    {
        $purchased_book = Book::find($id);
        Session::put('purchased_book', $purchased_book);

        return redirect()->back();
    } 


}
