@extends('layoute.AdminMaster')
@section('title', '广告管理')
@section('model-title', '广告管理')
<link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
<link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require"></i>广告url：</th>
                <td>
                    <input type="text" class="mg" name="name" value="{{$advert['advertName']}}">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>广告图片：</th>
                <td>
                    <img src="{{url($advert['image'])}}" width="500px" height="200px">
                    <input type="file" class="mg" name="image">
                </td>
            </tr>

            <tr>
                <th></th>
                <td>
                    <input style="height:40px;" type="submit" value="修改">
                    <input style="height:40px;" type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>

@endsection