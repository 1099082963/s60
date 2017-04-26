<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userList()
    {
        $data = User::paginate(1);
        foreach ($data as $user) {
            $roles = array();
            foreach ($user->roles as $role) {
                $roles[] = $role->display_name;
            }
            $user->roles= implode(',', $roles);
        }
        return view('admin.perssion.user', compact('data'));
    }
    //添加管理员
    public function userAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            User::create($request->all());
            return redirect('admin/User');
        }
        return view('admin.perssion.userAdd');
    }


    //分配角色
    public function attachRole(Request $request,$user_id)
    {
        if ($request->isMethod('post')) {
            //获取当前用户的角色
            $user = User::find($user_id);
            DB::table('role_user')->where('user_id', $user_id)->delete();
            foreach ($request->input('role_id') as $role_id){
                $user->attachRole(Role::find($role_id));
            }
            return redirect('admin/User');
        }
        //查询所有的权限
        $roles = Role::all();
        return view('admin.perssion.userAttach', compact('roles'));
    }
}
