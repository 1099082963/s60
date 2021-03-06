@extends('layoute.AdminMaster')
@section('title', '分配权限')
@section('model-title', '分配权限')
@section('content')
    <link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">权限管理</a> &raquo; 添加权限
    </div>
    <!--面包屑导航 结束-->
    <div class="result_wrap">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>分配权限：</th>
                    <td>
                        @foreach($data as $perssion)
                            <label><input type="checkbox" name="permission_id[]" value="{{$perssion->id}}">{{$perssion->display_name}}</label>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input style="height:40px;" type="submit" value="提交">
                        <input style="height:40px;" type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection