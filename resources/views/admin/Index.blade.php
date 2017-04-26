@extends('layoute.AdminMaster')
@section('title', '后台首页')
@section('model-title', '后台首页')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>欢迎{{session('name')}}到来!!!</p>
            <p>百度阅读后台管理页面</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>
@endsection