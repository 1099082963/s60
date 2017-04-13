<?php

namespace App\Http\Controllers\Home\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function register()
    {
        return view('home/author/register');
    }
}
