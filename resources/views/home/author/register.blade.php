@extends('home/layouts/master')
@section('my-css')
<link rel="stylesheet" href="/css/authorRegister.css">
@endsection

@section('main')
    <img src="{{url('home/img/authorHeader.jpg')}}"  class="maxImg" >
    <div class="container-fluid yueduRz">
        <div class="container">
            <div class="base">
                <h4>基本信息填写</h4>
                <form action="register" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1"><span style="color:red;">*</span>真实姓名：</label><br>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="请务必写身份证中的真实姓名，填写后不可修改">
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("name")}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><span style="color:red;">*</span>联系手机：</label><br>
                        <input type="text"  name="phone" class="form-control" id="exampleInputEmail1" placeholder="">
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("phone")}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><span style="color:red;">*</span>常用邮箱：</label><br>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("email")}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">QQ：</label><br>
                        <input type="text" name="qq" class="form-control" id="exampleInputEmail1" >
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("qq")}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">头像：</label><br>
                        <input type="file" name="icon" id="exampleInputFile">
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("icon")}}
                        @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">协议：</label>
                        <textarea name="" id=""  cols="45" rols="6" readonly="readonly" style="resize: none;">申请作者协议说明：1、作者的手机号码需真实有效2、作者上传的小说立意需积极向上3、作者等等等</textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="accept"> 我已经阅读并接受以上协议
                        </label>
                        <span class="error">
                        @if(count($errors))
                            {{$errors->first("accept")}}
                        @endif
                        </span>
                    </div>
                    <button type="submit" class="btn btn-default">申请</button>
                </form>

            </div>
        </div>
    </div>
@endsection