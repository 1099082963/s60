@extends('home/layouts/master')

@section('name',session('name'))

<style>
    .maxImg{
        width:100%;
    }
    .yueduRz{
        background-color: #F9F8F4;
    }
    .base{
        margin-left:150px;
        color:red;
        border-bottom:1px solid #ccc;
        margin-bottom:10px;
    }
</style>
@section('main')
    <img src="{{url('home/img/author/wait.jpg')}}"  class="maxImg" >
    <div class="container-fluid yueduRz">
        <div class="container">
            <div class="base">
                <h2>审核中，请耐心等待</h2>
            </div>
        </div>
    </div>
@endsection