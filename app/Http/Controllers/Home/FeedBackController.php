<?php

namespace App\Http\Controllers\Home;

use App\Model\feedback;
use App\Model\Reader;
use App\Model\Userinformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedBackController extends Controller
{
   public function index()
   {
//       $id = Reader::where('phone',session('phone'))->get()[0]->id;
//       $data = feedback::where('uid',$id)->paginate(1);
       $data = feedback::paginate(1);
//       dd($data);
       if (!empty($data)){
           return view( 'home.feedback.feedback')->with('data',$data);
       }else{
           return view('home.feedback.feedback');
       }

   }
   public function insert(Request $request)
   {
       $user = Reader::where('phone',session('phone'))->get();
       $id = $user[0]->id;
       $name = $user[0]->name;
       $info = Userinformation::where('uid',$id)->get();
       $icon = $info[0]->icon;
       $data = array([
           'uid' => $id,
           'desc' => $request->desc,
           'creat' => date('Y年m月d日'),
           'user_name' => $name,
           'user_icon'=> $icon,
       ]);
       feedback::insert($data[0]);
       return redirect('home/feedback');
   }
}
