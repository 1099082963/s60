<?php

namespace App\Http\Controllers\Home\user;

use App\Model\Books;
use App\Model\collectBooks;
use App\Model\homeUser;
use App\Model\order;
use App\Model\Reader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class myBooksController extends Controller
{
    public function myAll()
    {
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $cou = order::where('uid',$uid)->where('ispay',1)->get();
        $collect=collectBooks::where(['status'=>1,'uid'=>$uid])->get()->toArray();
        $count=count($collect);
        return view('home.center.myBooks.my')->with('cou',$cou)->with('books',$count);
    }
    public function All()
    {
        return view('home.center.myBooks.all');
    }

//查询出收藏的书
    public function collect()
    {
        $user=Reader::where('phone',session('phone'))->get()->toArray();
        $uid=$user[0]['id'];
        $collect=collectBooks::where(['status'=>1,'uid'=>$uid])->get()->toArray();
//        dump($collect);
        foreach($collect as $b){
            $books[]=Books::where('id',$b['bid'])->get()->toArray();
//            dump($books);
        }
//        dd(1);
        return view('home.center.myBooks.collect')->with('books',$books)->with('user',$uid);
    }
    //取消收藏
    public function cancelCollect(Request $request)
    {
        //书籍id
        $id=$request->bid;

        $user=Reader::where('phone',session('phone'))->get()->toArray();
        $uid=$user[0]['id'];

        $collect=collectBooks::where(['bid'=>$id,'uid'=>$uid])->get();
        $collect[0]->status=0;

        $result=$collect[0]->save();
        if ($result){
            return 1;
        }else{
            return 2;
        }

    }

}
