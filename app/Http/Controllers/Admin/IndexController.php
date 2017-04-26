<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index()
    {

        return view('admin.Index');
    }


    //后台注销
    public function LogOut(Request $request)
    {
       $request->session('name')->flush();
        return redirect('admin/login');
    }
}
