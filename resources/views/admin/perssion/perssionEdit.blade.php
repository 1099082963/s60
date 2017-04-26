@extends('layoute.AdminMaster')
@section('title', '权限修改')
@section('model-title', '权限修改')
@section('content')
    <link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{asset(url('admin/index'))}}">首页</a> &raquo; <a href="{{asset(url('admin/Perssion'))}}">权限管理</a> &raquo; 修改权限
    </div>
    <!--面包屑导航 结束-->
    <div class="result_wrap">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th><i class="require">*</i>权限路由：</th>
                    <td>
                        <input type="text" class="mg" name="name" value="{{$data->name}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>权限描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name" value="{{$data->display_name}}">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description">{{$data->description}}</textarea>
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