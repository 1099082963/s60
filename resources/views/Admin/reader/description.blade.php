@extends('layoute.AdminMaster')
@section('title', '用户详情')
@section('my-css')
<style>
    #info{width:250px;height:340px;background: #e5e5e5;}
    .img-circle{width:150px;height:130px;}
    #info img{margin-top: 50px ;}
</style>
@endsection
@section('model-title', '用户详情')
@section('content')
    <div class="container">

        <div class="col-md-3" id="info" align="center">
            @if($data->icon=='')
                <img class="img-circle" src="/home/img/icon.jpg" alt="icon" >
            @else
                <img class="img-circle" src="{{url($data->icon)}}" alt="">
             @endif
            <br><br>
            <h3>用户：{{$data->name}}</h3>
                <br>
            <p><h4>个签：{{$data->personal}}</h4></p>
        </div>
        <div  class="col-md-1"> </div>
        <div class="col-md-6">
            <table class="row table">
                <tr class="success"><th><h4>年龄：{{$data->age}}</h4></th></tr>
                <tr class="info"><th><h4>性别：{{$data->sex==1?'男':'女'}}</h4></th></tr>
                <tr class="warning"><th><h4>性格：{{$data->character==''?'无':$data->character}}</h4></th></tr>
                <tr class="danger"><th><h4>生日：{{$data->birthday}}</h4></th></tr>
                <tr class="success"><th><h4>婚姻状况：{{$data->marital==''?'无':($data->marital==0?'未婚':'已婚')}}</h4></th></tr>
                <tr class="info"><th><h4>当前职业：{{$data->professional==''?'无':$data->professional}}</h4></th></tr>
            </table>
        </div>
        <div  class="col-md-2"> </div>
    </div>
    <p><a class="btn btn-default" href="{{url('admin/dodescription'.'/'.$data->id)}}" role="button">修改</a>
        <a class="btn btn-default" href="{{url('admin/reader')}}" role="button">返回</a></p>
@endsection