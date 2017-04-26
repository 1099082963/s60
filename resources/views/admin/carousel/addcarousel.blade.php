@extends('layoute.AdminMaster')
@section('title', '轮播图管理')
@section('model-title', '轮播图管理')
<link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
<link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require"></i>轮播url：</th>
                <td>
                    <input type="text" class="mg" name="name">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>轮播图：</th>
                <td>
                    <input type="file" class="mg" name="image">
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

@endsection