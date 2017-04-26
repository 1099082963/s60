<?php

namespace App\Http\Controllers\Home\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function index()
    {
        return view('home.center.myOrder.index');
    }
}
