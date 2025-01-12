<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return[
            new Middleware('auth', only: ['dashboard'])
        ];
    }
    
    public function home(){
        $books = Book::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('books'));
    }
    
    public function dashboard(){
        $books = Book::where('user_id', Auth::user()->id)->get();        
        return view ('auth.dashboard', compact('books'));
    }
}
