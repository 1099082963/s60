<?php

namespace App\Http\Controllers\Home;

use App\Model\homeUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function buy(){
        if(session('phone')){

            $user=homeUser::where('phone',session('phone'))->get();

//            dd($user);
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
        }else{
            $name='文库新人';
        }


        return view('home/classify/cart')->with('name',$name);
    }
    public function order(){
        return view('home/center/myOrder/orderall');
    }
    public function gobuy(){
        return view('home/center/myOrder/gobuy');
    }
    public function dobuy(){
        return view('home/center/myOrder/dobuy');
    }
}
