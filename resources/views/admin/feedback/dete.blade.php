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
            @if($data->user_icon=='')
                <img class="img-circle" src="{{url('/home/img/icon.jpg')}}" alt="icon" >
            @else
                <img class="img-circle" src="{{url($data->user_icon)}}" alt="" width="100px">
            @endif
                <br>
                <h3>用户头像</h3>
        </div>
        <div  class="col-md-1"> </div>
        <div class="col-md-6">
            <label>用户</label>
            <input type="email" name="email" class="form-control" value="{{$data->user_name}}" readonly>
            <label>反馈意见</label>
            <input type="text" name="phone" class="form-control"  value="{{$data->desc}}" readonly>
        </div>
        <div  class="col-md-2"> </div>
    </div>
    <p><a class="btn btn-default" href="{{url('admin/feedback')}}" role="button">返回</a></p>

@endsection