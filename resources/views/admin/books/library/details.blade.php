@extends('layoute.AdminMaster')
@section('title', '图书详情')
@section('model-title', '图书详情')
@section('my-css')
    <style>
        #info{width:250px;height:340px;background: #e5e5e5;}
        .img-circle{width:150px;height:130px;}
        #info img{margin-top: 50px ;}
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-3" id="info" align="center">
            {{--@if($data->icon=='')--}}
                {{--<img class="img-circle" src="/home/img/icon.jpg" alt="icon" >--}}
            {{--@else--}}
                {{--<img class="img-circle" src="{{url($data->icon)}}" alt="">--}}
            {{--@endif--}}
            <br><br>
            <h3>书名：{{$data->booksName}}</h3>
            <br>
            <p><h4>简介：{{$data->desc}}</h4></p>
        </div>
        <div  class="col-md-1"> </div>
        <div class="col-md-6">
            <table class="row table">
                <tr class="success"><th><h4>作者：{{$data->author_name}}</h4></th></tr>
                <tr class="info"><th><h4>版本：{{$data->copyright}}</h4></th></tr>
                <tr class="warning"><th><h4>标签：{{$data->label}}</h4></th></tr>
                <tr class="danger"><th><h4>点击量：{{$data->click}}</h4></th></tr>
                <tr class="success"><th><h4>价格：￥{{$data->price}}</h4></th></tr>
            </table>
        </div>
        <div  class="col-md-2"> </div>
    </div>
        <a class="btn btn-default" href="{{url('admin/library')}}" role="button">返回</a></p>
@endsection