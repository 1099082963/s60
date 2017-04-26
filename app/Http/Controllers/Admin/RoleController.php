<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function Role()
    {
        $roles = Role::paginate(1);
        foreach ($roles as $role) {
            $perms = array();
            foreach ($role->perms as $perm) {
                $perms[] = $perm->display_name;
            }
//            dump($perms);
            $role->perms= implode(',', $perms);
        }
        return view('Admin.perssion.roleList',compact('roles'));
    }

    //增加角色
    public function Add(Request $request)
    {
        if ($request->isMethod('post')) {
            Role::create($request->all());
            return redirect('admin/Role');
        }else{
            return view('admin.perssion.roleAdd');
        }
    }

    //修改角色
    public function Edit(Request $request,$role_id)
    {
        if($request->isMethod('post')){
            $role = Role::findOrFail($role_id);
            $role->update($request->all());
            return redirect('admin/Role');
        }
        $role = Role::findOrFail($role_id);
        return view('admin.perssion.roleEdit', compact('role'));
    }

    //分配权限
    public function attach(Request $request,$role_id)
    {
        if ($request->isMethod('post')) {
            //获取当前用户的角色
            $role = Role::find($role_id);
            //先将所以的权限删除
            DB::table('permission_role')->where('role_id', $role_id)->delete();
            //重新分配权限
            foreach ($request->input('permission_id') as $permission_id){
                $role->attachPermission(Permission::find($permission_id));
            }
            return redirect('admin/Role');
        }
        //查询所有的权限
        $data = Permission::all();
        return view('admin.perssion.roleAttach', compact('data'));
    }
}
