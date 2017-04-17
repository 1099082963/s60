<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function Login(){
        return view('admin.login');

    }
    public function LoginIn(Request $request){
        //验证信息
        $rules = array(
            'username'=>'required',
            'password'=>'required',

        );
        //自定义错误
        $mess = array(
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
        );
        $this->validate($request,$rules,$mess);
        //获取表单提交的数据
        $username = $request->input('username');
        $password = $request->input('password');
        $users = User::select("select * from admin where name=:name and pwd=:pwd",['name'=>$username,'pwd'=>$password]);
        if ($users){
            session(['name'=>$username]);
            return redirect('admin/index');
        }else{
            return back();
        }
    }
}
