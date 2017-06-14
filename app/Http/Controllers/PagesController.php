<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PagesController extends Controller
{
    public function indexPage()
    {
        $books = Book::all();

        return view('welcome')->with('books', $books);
    }

    public function deliveryPage()
    {
        return view('delivery');
    }

    public function aboutUsPage()
    {
        return view('about_us');
    }

    public function signInPage()
    {
        return view('sign_in_page');
    }

    public function signUpPage()
    {
        return view('sign_up_page');
    }

    public function admin()
    {
        return view('admin.admin_auth');
    }

    public function adminPanel()
    {
        return view('admin.admin_panel');
    }

    public function showBook($id)
    {
        $book = Book::find($id);
        return view('book_page', compact ('book'));
    }

}
