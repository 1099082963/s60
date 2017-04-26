<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerssionController extends Controller
{
    //显示权限
    public function Perssion()
    {
        $data = Permission::paginate(5);
        return view('Admin.perssion.index',compact('data'));
    }
    //增加权限
    public function perssionAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            //添加权限操作
            $data = Permission::create($request->all());
            return redirect('admin/Perssion');
        }
        return view('Admin.perssion.perssionAdd');
    }
    //修改权限
    public function perssionEdit(Request $request,$permission_id)
    {
        //修改用户信息
        if ($request->isMethod('post')) {
            $permission = Permission::findOrFail($permission_id);
            $permission->update($request->all());
            return redirect('admin/Perssion');
        }
        //查询出当前的权限信息
        $data = Permission::findOrFail($permission_id);
        return view('Admin.perssion.perssionEdit', compact('data'));
    }

    //删除权限
    public function perssionDelete($permission_id)
    {
        //删除信息
        Permission::destroy([$permission_id]);
        return redirect('admin/Perssion');
    }

}
