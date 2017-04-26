<?php

namespace App\Http\Controllers\Home;

use App\Model\advertisement;
use App\Model\author;
use App\Model\Books;
use App\Model\carousel;
use App\Model\focus;
use App\Model\Reader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

   public function Author(Request $request)
    {
        $url = $request->path();
        $carousel = carousel::where('carouselName', $url)->get();
        $advert =advertisement::where(['advertName'=>$url,'display'=>1])->get();
        if (session('phone') ==null){
            $data = author::all();
            return view('home.Author')->with('data',$data);
        }
        $id = Reader::where('phone',session('phone'))->get();
        $uid = $id[0]->id;
        $data = focus::LeftJoin('authorinformation','authorinformation.id','focus.authors_id')->where('focus.uid',$uid)->get();
        if (empty($data[0])){
            $data = author::all();
        }
        $count = author::count();

        return view('home.Author')->with('data',$data)->with('count',$count)->with('carousel',$carousel)->with('advert',$advert);

    }
    public function doFocus($ssid)
    {

        $id = Reader::where('phone',session('phone'))->get();
        $uid = $id[0]->id;
        $result = focus::where('uid',$uid)->where('authors_id',$ssid)->get();
        if (!empty($result[0])){
            $stat = $result[0]->stat == 1 ? 2 : 1;
            $result[0]->stat = $stat;
            $result[0]->save();
            return redirect('home/author');

        }else{

            if (session('phone') ==null){
                return view('home.index');
            }
            $data = focus::insert(['uid'=>$uid,'authors_id'=>$ssid]);
            $result = author::all();
            foreach ($result as $v){
                if ($v->id == $ssid){
                    continue;
                }
            $hhh = focus::insert(['uid'=>$uid,'authors_id'=>$v->id,'stat'=>1]);
            }
            return redirect('home/author');
        }

    }
    public function focus()
    {
        $id = Reader::where('phone',session('phone'))->get();
        $uid = $id[0]->id;
        $data = focus::LeftJoin('authorinformation','authorinformation.id','focus.authors_id')->where('focus.uid',$uid)->where('focus.stat',2)->get();
        return view('home.center.myfocus.myfocus')->with('data',$data);
    }
}


//$data = author::LeftJoin('books','authorinformation.id','books.author_id','focus.author_id')->get();
//dd($data);