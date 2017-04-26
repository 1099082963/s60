<?php

namespace App\Http\Controllers\Admin;

use App\Model\Books;
use App\Model\homeUser;
use App\Model\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order(){
        $data = homeUser::join('order','order.uid','user.id')
            ->get();
//        dd($price);
        return view('Admin/order/order')->with('data',$data);
    }
    public function cancel($id)
    {
//        dd($id);
//        $id = $request->id;
        $result = order::find($id);
        if($result->ispay==0&&$result->cancel==0){
            $result->cancel=1;
            $result->save();
            $data = homeUser::join('order','order.uid','user.id')
                ->get();
            return redirect('admin/order')->with('data',$data);
        }else if($result->ispay==0&&$result->cancel==1){
            $result->cancel=1;
            $result->save();
            $data = homeUser::join('order','order.uid','user.id')
                ->get();
            return redirect('admin/order')->with('data',$data);

        }else{
            return back();
        }

    }
}
