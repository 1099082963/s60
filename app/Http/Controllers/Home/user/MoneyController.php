<?php

namespace App\Http\Controllers\Home\user;

use App\Model\core;
use App\Model\homeUser;
use App\Model\money;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MoneyController extends Controller
{
    //
    public function show(){
        return view('home.center.Money.menu');
    }

    public function money(){
        return view('home.center.Money.money');
    }

    public function getmoney(Request $request){
//        dd($request);
        $user=homeUser::where('phone',session('phone'))->get();
        $id = $user[0]->id;
        $core = $request->money;
        $money=$request->money;
        $time = date('Y-m-d H:i:s',time()+28800);
//        dd($request->money);

        $result1=money::insert(['uid'=>$id,'core'=>$core,'money'=>$money,'createtime'=>$time]);
        $result2=core::insert(['uid'=>$id,'core'=>$core,'money'=>$money]);
//        dd($result2);
        if($result1&&$result2){
            return view('home.center.Money.money')->with('data','充值成功');
        }

    }

    public function history(){
        $user=homeUser::where('phone',session('phone'))->get();
        $id = $user[0]->id;
        $list = homeUser::join('money','user.id','money.uid')->get();
//        dd($list);
        $pay =DB::select("select sum(`money`) as 'all' from money where uid=".$id);
        $core =DB::select("select sum(`core`) as 'all' from money where uid=".$id);
        $getcore = $core[0]->all;
        $money = $pay[0]->all;
        return view('home.center.Money.history')->with('list',$list)->with('money',$money)->with('getcore',$getcore);
    }
    public function dodelete($id){
//        dd($id);
        $result=money::find($id)->delete();
        if($result){
            $user=homeUser::where('phone',session('phone'))->get();
            $id = $user[0]->id;
            $list = homeUser::join('money','user.id','money.uid')->get();
//        dd($list);
            $pay =DB::select("select sum(`money`) as 'all' from money where uid=".$id);
            $core =DB::select("select sum(`core`) as 'all' from money where uid=".$id);
            $getcore = $core[0]->all;
            $money = $pay[0]->all;
            return view('home.center.Money.history')->with('list',$list)->with('money',$money)->with('getcore',$getcore);
        }else{
            return '删除失败';
        }
    }

    public function core(){
        $user=homeUser::where('phone',session('phone'))->get();
        $id = $user[0]->id;
        $list =DB::select("select sum(`money`) as 'all' from money where uid=".$id);
        $money = $list[0]->all;
        $core =DB::select("select sum(`core`) as 'all' from money where uid=".$id);
        $getcore = $core[0]->all;
        return view('home.center.Money.core')->with('money',$money)->with('getcore',$getcore);
    }



}
