@extends('layoute.AdminMaster')
@section('title', '作者详情')
@section('model-title', '作者详情')
@section('content')
    <div class="container">
        <div class="col-md-3" id="info" align="center">
            <img class="img-circle" src="{{url($data[0]->icon)}}" width="100px" alt="">
            <br><br>
            <h3>用户：{{$data[0]->name}}</h3>
            <br>
        </div>
        <div  class="col-md-1"> </div>
        <div class="col-md-6">
            <table class="row table">
                <tr class="success"><th><h4>年龄：{{$data[0]->age}}</h4></th></tr>
                <tr class="info"><th><h4>性别：{{$data[0]->sex==0?'男':'女'}}</h4></th></tr>
                <tr class="danger"><th><h4>生日：{{$data[0]->birthday}}</h4></th></tr>
                <tr class="warning"><th><h4>QQ：{{$data[0]->QQ}}</h4></th></tr>
                <tr class="success"><th><h4>申请状况：{{$data[0]->status=='1'?'申请中':'申请通过'}}</h4></th></tr>
            </table>
        </div>
        <div  class="col-md-2"> </div>
    </div>
    <p><a class="btn btn-default" href="{{url('admin/author')}}" role="button">返回</a></p>
@endsection