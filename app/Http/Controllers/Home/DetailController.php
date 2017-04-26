<?php

namespace App\Http\Controllers\Home;

use App\Model\homeUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    //
    public function details(){
        return view('home.details');
    }
    public function comment(Request $request){
        $user=homeUser::where('phone',session('phone'))->get();
        $id = $user[0]->id;
        $name = $user[0]->name;
//        dd($name);
        dd($request->comment);
    }
}
