@extends('layoute.AdminMaster')
@section('title', '机构详情')
@section('model-title', '机构详情')
@section('content')
    <div class="container">

        <div class="col-md-6">
            <label>邮箱</label>
            <input type="email" name="email" class="form-control" value="{{$data->email}}" readonly>
            <label>手机号</label>
            <input type="text" name="phone" class="form-control"  value="{{$data->phone}}" readonly>

            <div class="form-group">
                <label>公司名称</label>
                <input type="text" name="professional" class="form-control" value="{{$data->institutions_name}}" readonly>
            </div>
            <div class="form-group">
                <label>公司域名</label>
                <textarea class="form-control" rows="3" name="personal" readonly>{{$data->domain}}</textarea>
            </div>
        </div>
    </div>
    <p><a class="btn btn-default" href="{{url('admin/institutions')}}" role="button">返回</a></p>

@endsection