@extends('home/layouts/master')
@section('name',$name)
@section('my-css')
    <style>
   .cart-table-hd {
    height: 42px;
    line-height: 42px;
    border: 1px solid #efefef;
    background-color: #fcfcfc;
    }
        .th-item{margin-right: 430px; float: left;}
        .cart-table{border:1px solid #d6d6d6; background-color: #f2dede;}
        .cart-all{width:1170px;height:42px;background-color:#fcfcfc; }
        .cart-box{float: right;}
    </style>
    @endsection
@section('main')
    <br>
    <div class="cart-table-hd mb10 container">
        <div class="th-item"><span class="item-info">电子书信息</span></div>
        <div class="th-item"><span class="item-price">电子书价格（元）</span></div>
        <span class="th-ite item-op">操作</span>
    </div>
    <br>
    <br>
   <div class="cart-main container">
       <div class="cart-table">
           <div class="th-item"><span class="item-info"> <input type="checkbox"> tushu</span></div>
           <div class="th-item"><span class="item-price">电子书价格（元）</span></div>
           <span class="th-ite item-op"><a href="">删除</a></span>
       </div>
   </div>
    <br>
    <div class="cart-all container">
        <div class="cart-box">
            合计：<button class="btn">去支付</button>
        </div>
    </div>

@endsection