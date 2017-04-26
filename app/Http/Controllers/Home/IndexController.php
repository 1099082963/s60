<?php

namespace App\Http\Controllers\Home;

use App\Model\advertisement;
use App\Model\Books;
use App\Model\carousel;
use App\Model\homeUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function Index(Request $request)

    {

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

        //获取路由
        $url = $request->path();
        $carousel = carousel::where('carouselName', $url)->get();
        $advert =advertisement::where(['advertName'=>$url,'display'=>1])->get();
        return view('home.index')->with('name',$name)->with('carousel',$carousel)->with('advert',$advert);
    }

    public function seach(Request $request)
    {
        $request->name;
        $data = Books::where('booksName','like','%'.$request->name.'%')->get();
        $count = Books::where('booksName','like','%'.$request->name.'%')->get()->count();
        return view('home.seach.seach')->with('data',$data)->with('count',$count);
    }
}
