@extends('home/center/master')
@section('name',$name)
@section('icon')
    @if($icon=='')
        <img class="user-avatar" src="{{url("/home/img/icon.jpg")}}">
    @else
        <img class="user-avatar" src="{{url($icon)}}" alt="">
    @endif
@endsection
@section('my-css')
    <style>
        .bs-example h2{ font-size:25px;}
        .bs-example h3{ font-size:20px;}
        table{margin-left: 100px;}
    </style>

    @endsection


@section('username',$name)
@section('mmin')
    <div class="col-md-1"></div>
    <div class="bs-example col-md-8" data-example-id="hoverable-table">
        &nbsp;&nbsp;&nbsp;&nbsp;<h2>个人资料</h2><br>

        <table class="table table-hover">
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>账号名称：{{$name==''?'文库新人':$name}}</h3><br>
            </tr>
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>年龄：{{$data->age==''?'无':$data->age}}</h3>
                <br></tr>
            &nbsp;&nbsp;&nbsp;&nbsp; <tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>性别：{{$data->sex==''?'无':$data->sex==0?'女':'男'}}</h3>
                <br></tr>
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>性格：{{$data->character==''?'无':$data->character}}</h3>
                <br></tr>
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>婚姻状态：{{$data->marital==''?'无':$data->marital==1?'已婚':'未婚'}}</h3>
                <br></tr>
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>生日日期：{{$data->birthday==''?'无':$data->birthday}}</h3>
                <br></tr>

            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>邮箱：@if($data->is_confirmed==0)
                        <a href="http://mail.163.com">去验证</a>
                    @else
                        {{$data->email==''?'无':$data->email}}
                    @endif</h3>

                <br></tr>
            &nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;<h3>个性签名：{{$data->personal==''?'无':$data->personal}}</h3>
                <br></tr>
        </table>
        <p><a class="btn btn-default" href="{{url('home/user/infoupdate')}}" role="button">修改信息</a>
            <a class="btn btn-default" href="{{url('home/user/center')}}" role="button">返回</a>

        <a href="{{url('home/user/userpass')}}"><button class="btn btn-primary">修改密码</button></a></p><br>


    </div>



@endsection