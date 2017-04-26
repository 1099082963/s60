<?php

namespace App\Http\Controllers\Admin;

use App\Model\Reader;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function Login(){
        return view('admin.Login');

    }
    public function LoginIn(Request $request){

        //验证信息
        $rules = array(
            'phone'=>'required',
            'password'=>'required',

        );
        //自定义错误
        $mess = array(
            'phone.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
        );
        $this->validate($request,$rules,$mess);
        //获取表单提交的数据

        $flag=Auth::attempt(['phone' => $request->input('phone'), 'password' =>$request->input('password') ]);
        if ($flag){
            session(['name'=>$request->input('phone')]);

            return redirect('admin/index');
        }else{
            return back();
        }
    }
}
