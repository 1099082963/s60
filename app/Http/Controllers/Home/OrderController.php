<?php

namespace App\Http\Controllers\Home;


use App\Model\Books;
use App\Model\cart;
use App\Model\core;
use App\Model\homeUser;
use App\Model\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //

    public function index()
    {
        return view('home.center.myOrder.index');
    }

    public function order(Request $request){
        if(!session('phone')){
            return '请登录后购买';
        }else{
            $user=homeUser::where('phone',session('phone'))->get();
            $uid = $user[0]->id;
            $book_id=$request->book_id;
            $c = Books::where('id',$book_id)->get();
            $price= $c[0]->price;
            $ordertime = date('Y-m-d H:i:s',time());
            $numid = time().uniqid();
            $result= order::insert(['price'=>$price,'numid'=>$numid,'uid'=>$uid,'book_id'=>$book_id,'ordertime'=>$ordertime]);
            if($result){
                return '去支付吧';
            }

        }
    }
    public function all(){
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $name = $user[0]->name;
        $phone = $user[0]->phone;
        $data = Books::join('order','books.id','order.book_id')->orderby('order.id','desc')
            ->where('uid',$uid)
            ->get();
        $core =DB::select("select sum(`core`) as 'all' from core where uid=".$uid);
        $discore =DB::select("select sum(`discore`) as 'all' from core where uid=".$uid);
        $core = $core[0]->all;
        $discore = $discore[0]->all;

//        dd(count($data));
        return view('home/center/myOrder/orderall')->with('data',$data)->with('name',$name)->with('phone',$phone)->with('core',$core)->with('discore',$discore);
    }

    public function pay(Request $request){
        $id  = $request->id;
//        return $id;
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $book = order::find($id);
        $book_id=$book->book_id;
        $list =order::where('book_id',$book_id)->where('uid',$uid)->where('ispay',1)->get() ;
//dd(count($list));
        if(count($list)==0) {

            $result = order::find($id);
//            dd($result->ispay) ;
            if ($result->ispay == 0 && $result->cancel == 0) {
                $user = homeUser::where('phone', session('phone'))->get();
                $uid = $user[0]->id;
                $list = DB::select("select sum(`money`) as 'all' from core where uid=" . $uid);
                $dismoney = DB::select("select sum(`dismoney`) as 'all' from core where uid=" . $uid);
                if (($list[0]->all - $dismoney[0]->all) >= ($result->price)) {
                    $result->ispay = 1;
                    $result->save();
                    $e = Books::where('id',$result->book_id)->get();
//                    dd($e);
                    $dismoney = ($e[0]->price);
                    $discore = ($e[0]->price-$e[0]->price/10);
//                    dump($dismoney);
//                    dd($discore);
                    $user = homeUser::where('phone', session('phone'))->get();
                    $uid = $user[0]->id;
                    $core = core::insert(['uid' => $uid, 'dismoney' => $dismoney, 'discore' => $discore]);
                    return '已支付';
                } else {
                    return '您的钱包余额不足';
                }
            } else if ($result->ispay == 1) {
                return '已支付不能再进行操作';
            } else {
                return '此订单已取消不可支付';
            }
        }else{
            return '买过啦不要再购买啦';
        }

    }


    public function cancel(Request $request)
    {
//        dd($request->id);
        $id = $request->id;
        $result = order::find($id);
        if($result->ispay==0&&$result->cancel==0){
            $result->cancel=1;
            $result->save();
        }else if($result->ispay==0&&$result->cancel==1){
            $result->cancel=1;
            $result->save();
        }else{
            return '不可取消订单';
        }
    }


    public function gobuy(){
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $name = $user[0]->name;
        $phone = $user[0]->phone;
        $data = Books::join('order','books.id','order.book_id')->orderby('order.id','desc')
            ->where('uid',$uid)->where('ispay',1)
            ->get();
//        dd($data);
        return view('home/center/myOrder/gobuy') ->with('data',$data)->with('name',$name)->with('phone',$phone);
    }
    public function dobuy(){
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $name = $user[0]->name;
        $phone = $user[0]->phone;
        $data = Books::join('order','books.id','order.book_id')->orderby('order.id','desc')
            ->where('uid',$uid)->where('ispay',0)
            ->get();
        return view('home/center/myOrder/dobuy')->with('data',$data)->with('name',$name)->with('phone',$phone);
    }

    public function ispay(){
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $book = Books::join('order','books.id','order.book_id')
            ->where('uid',$uid)->where('ispay',1)
            ->get();
//        dd($book);

        return view('home.center.myBooks.ispaybook')->with('books',$book);

    }
}
