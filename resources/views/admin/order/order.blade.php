@extends('layoute.AdminMaster')
@section('title', '订单管理')
@section('model-title', '订单管理')
@section('content')
<table class="table table-striped" id="historytable" width="500px">
        <tr>
            <th>订单id</th>
            <th>支付用户</th>
            <th>订单编号</th>
            <th>联系电话</th>
            <th>支付金额</th>
            <th>下单时间</th>
            <th>支付状态</th>
            <th>操作</th>
        </tr>
    @if(count($data)==0)
        <tr><td colspan="8" align="center">暂无订单</td></tr>
    @else
        @foreach($data as $ite)
            <tr>
                <td>{{$ite->id}}</td>
                <td>{{$ite->name}}</td>
                <td>{{$ite->numid}}</td>
                <td>{{$ite->phone}}</td>
                <td>{{$ite->price-$ite->price/10}}元</td>
                <td>{{$ite->ordertime}}</td>
                <td>{{$ite->ispay==0?'支付':'已支付'}}</td>
                <td><a href="{{url('admin/cancel'.'/'.$ite->id)}}">{{$ite->cancel==0?'取消订单':'未取消订单'}}</a></td>
            </tr>
        @endforeach
    @endif
</table>
    @endsection
