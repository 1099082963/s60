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

                <img class="img-circle" src="{{url($data->icon)}}" alt="" width="100px">
            @endif
            <br><br>
            <h3>用户：{{$data->name}}</h3>
            <h3>年龄：{{$data->age==''?'无':$data->age}}</h3>
            <h3>性别：{{$data->sex==1?'男':'女'}}</h3>
            <h3>生日：{{$data->birthday==''?'无':$data->birthday}}</h3>
            <h3>婚姻状况：{{$data->marital==''?'无':($data->marital==0?'未婚':'已婚')}}</h3>
            <br>


        </div>
        <div  class="col-md-1"> </div>
        <div class="col-md-6">
            <label>邮箱</label>
            <input type="email" name="email" class="form-control" value="{{$data->email==''?'用户暂无绑定':$data->email}}" readonly>
            <label>手机号</label>
            <input type="text" name="phone" class="form-control"  value="{{$data->phone}}" readonly>

            <div class="form-group">
                <label>当前职业</label>
                <input type="text" name="professional" class="form-control" value="{{$data->professional==''?'无':$data->professional}}" readonly>
            </div>
            <div class="form-group">
                <label>个性签名</label>
                <textarea class="form-control" rows="3" name="personal" readonly>{{$data->personal==''?'无':$data->personal}}</textarea>
            </div>
            <div class="form-group">
                <label>性格</label>
                <textarea class="form-control" rows="3" name="character" readonly>{{$data->character==''?'无':$data->character}}</textarea>
            </div>

        </div>
        <div  class="col-md-2"> </div>
    </div>
    <p><a class="btn btn-default" href="{{url('admin/reader')}}" role="button">返回</a></p>

@endsection