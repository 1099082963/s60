@extends('layoute.AdminMaster')
@section('title', '用户修改')
@section('model-title', '用户修改')
@section('content')
    <div class="panel-body">
        <div class="col-md-6">
        <form role="form" action="" method="post">

                {{csrf_field()}}

                <div class="form-group">
                    <label>用户名</label>
                    <input type="text" name="name" class="form-control"  value="{{$user->name}}">
                    <p>@if(count($errors))
                            {{ $errors->first('name')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="password" class="form-control" value="{{$user->password}}">
                    <p>@if(count($errors))
                            {{ $errors->first('password')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>手机号</label>
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                    <p>@if(count($errors))
                            {{ $errors->first('phone')}}
                            {{ $errors->first('email')}}

                        @endif</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">修改</button>
                </div>

        </form>
        <a href="{{url('admin/reader')}}"><button class="btn btn-primary">返回</button></a>
    </div>
    </div>
    </div>
    @endsection