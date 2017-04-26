<?php

namespace App\Http\Controllers\Home;



use App\Model\Books;
use App\Model\collectBooks;
use App\Model\homeUser;
use App\Model\order;
use App\Model\Userinformation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    public function index()
    {
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        //查询已购买
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $count = order::where('uid',$uid)->where('ispay',1)->get();
        //查询已收藏
        $collect=collectBooks::where(['status'=>1,'uid'=>$id])->get()->toArray();
//        dd(count($collect));
        if (count($collect)>0){
                foreach($collect as $b){
                    $books[]=Books::where('id',$b['bid'])->get()->toArray();
        //            dump($books);
                }
                 return view('home.center.center')->with('name',$name)->with('icon',$icon)->with('books',$books)->with('count',$count);
         }else{
             return view('home.center.center')->with('name',$name)->with('icon',$icon)->with('count',$count);

        }

    }
}
