<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CensusController extends Controller
{
    //
    public function census(){
        return view('Admin/census/census');
    }
}
