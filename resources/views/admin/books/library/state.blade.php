@extends('layoute.AdminMaster')
@section('title', '图书状态')
@section('model-title', '图书状态')
@section('content')
    当前状态:{{$data->up == 1 ? '上架':'下架'}} <a href="{{asset(url('admin/library/state/'.$data->id.'/'.$data->up))}}"><button>修改状态</button></a>
    当前状态:{{$data->hot == 1 ? '热榜':'下榜'}} <a href="{{asset(url('admin/library/state/hot/'.$data->id.'/'.$data->hot))}}"><button>修改状态</button></a>
@endsection