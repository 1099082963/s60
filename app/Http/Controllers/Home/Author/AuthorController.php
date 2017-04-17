<?php

namespace App\Http\Controllers\Home\Author;

use App\Http\Requests\AuthorRegisterRequest;
use App\Model\author;
use App\Model\homeUser;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function register(Request $request)
    {
//        dd(session('phone'));
        $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
        $id=$user[0]['id'];
        $author = author::where('phone',session('phone'))->get();
        $uid=$author[0]['uid'];
        $status=$author[0]->status;
//        dd($status);
        if($id==$uid){
            if($status==0){
                return view('home/author/register');
            }else if($status==1){
                return view('home/author/wait');
            }else if($status==2){
                return view('home/author/info')->with('author',$author[0]);
            }
        }else{
            return view('home/author/register');
        }
    }
    public function doRegister(AuthorRegisterRequest $request)
    {
//        dump(session('phone'));
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
//        dd($id);
//        dd($request->all());
        //得到作者模型
        $author = new author();
        $author->uid = $id;
        $author->name = $request->name;
        $author->phone = $request->phone;
        $author->email = $request->email;
        $author->QQ = $request->qq;
        //状态：申请中
        $author->status=1;
        $author->icon = $request->file('icon')->move('image/author',md5(time().uniqid()).'.jpg');
        if($author->save()){
            return redirect('home/author/register');
        }
    }
}
