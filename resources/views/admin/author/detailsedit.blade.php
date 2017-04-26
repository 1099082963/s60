@extends('layoute.AdminMaster')
@section('title', '详情修改')
@section('model-title', '详情修改')
@section('content')
    <div class="panel-body">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                {{csrf_field()}}

                <div class="form-group">
                    <label>用户名</label>
                    <input type="text" name="name" class="form-control" value="{{$data[0]->name}}" readonly>
                    <p>@if(count($errors))
                            {{ $errors->first('name')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>年龄</label>
                    <input type="text" name="age" class="form-control" value="{{$data[0]->age}}">
                    <p>@if(count($errors))
                            {{ $errors->first('age')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>邮箱</label>
                    <input type="email" name="email" class="form-control" value="{{$data[0]->email}}">
                    <p>@if(count($errors))
                            {{ $errors->first('email')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>手机号</label>
                    <input type="text" name="phone" class="form-control"  value="{{$data[0]->phone}}" readonly>
                    <p>@if(count($errors))
                            {{ $errors->first('phone')}}
                        @endif</p>
                </div>

            </div>
            <div class="col-md-6 " >

                <div class="form-group" style="align:center">
                    <label>性别</label><br>
                    <input type="radio" name="sex" value="0" {{$data[0]->sex==0?'checked':''}}>男

                    <input type="radio" name="sex" value="1" {{$data[0]->sex==1?'checked':''}}>女

                </div>
                <div class="form-group">
                    <label>生日</label>
                    <input type="date" name="birthday" value="{{$data[0]->birthday}}">
                </div>
                <div class="form-group">
                    <label>头像</label>
                    <img src="{{url($data[0]->icon)}}" width="50px" height="50px">
                    <input type="file" name="icon" value="{{$data[0]->icon}}">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">修改</button>
            </div>
        </form>
    </div>
    <a href="{{url('admin/author')}}"><button class="btn btn-primary">返回</button></a>
    </div>
@endsection