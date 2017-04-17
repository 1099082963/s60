<?php

namespace App\Http\Controllers\Home\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class myBooksController extends Controller
{
    public function myAll()
    {
        return view('home.center.myBooks.my');
    }
    public function All()
    {
        return view('home.center.myBooks.all');
    }
}
