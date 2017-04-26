@extends('home/center/master')
@section('name',$name)
@section('icon')
    @if($icon=='')
        <img class="user-avatar" src="{{url("/home/img/icon.jpg")}}">
    @else
        <img class="user-avatar" src="{{url($icon)}}" alt="">
    @endif
@endsection
@section('username',$name)
@section('mmin')
    <div class="panel-body">
        &nbsp; &nbsp; &nbsp; &nbsp;<button id="btn" type="submit" class="btn btn-primary">解除绑定</button>

        <br> <form role="form" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6" id="email">
                <div class="form-group">
                    <label><h2>手机:</h2></label>
                    <input id="input" type="text" name="phone" class="form-control" value="{{session('phone')}}" readonly>

                    <p>@if(count($errors))
                            {{ $errors->first('phone')}}
                        @endif</p>
                </div>

                <div id="boxcode" style="display: none">
                      <div class="form-group">
                          <label for="exampleInputPassword1">验证码</label>
                          <input style="width:200px;display:inline-block;" type="text" class="form-control" name="verify">
                            <span id="send-code" class="btn btn-default">发送验证码</span>
                      </div>
                </div>
                <div id="box-button" ></div>
                {{--<button id="btn" type="submit" class="btn btn-primary">重新绑定</button>--}}
            </div>

        </form>
        <div class="col-md-6">
            <a href="{{url('home/user/infoupdate')}}" id="box-box">
                <button type="submit" class="btn btn-primary">返回</button>
            </a>
        </div>
    </div>

    <script>

        var $btn = document.getElementById('btn');
        var $button = document.getElementById('box-button');
        var $back = document.getElementById('box-box');
        var $input = document.getElementById('input');
        var $code = document.getElementById('boxcode');

        $btn.onclick=function(){
            if($btn.innerHTML=='解除绑定'){
                $btn.innerHTML='请在下面修改';

                $input.removeAttribute('readonly');
                $code.style.display='block';
                $button.innerHTML= '<button type="submit" class="btn btn-primary">绑定</button>';
                $back.innerHTML='';
            }

        }

    </script>

@section('my-js')
    <script>
            //增加判断表示
           var flag = true;
            $('#send-code').click(function () {
                if (flag == false) {
                    return;
                }
                //获取电话号码
                var phone = $("input[name=phone]").val();
//            alert(phone);
                //判断是否为空
                if (phone == '') {
                    alert('手机号不能为空');
                    return;
                }
                flag = false;
                var num = 5;
                var timer = setInterval(function () {
                    $("#send-code").html(num+'s后重新发送');
                    $("#send-code").css('color', 'red');
                    if (num == 0) {
                        flag = true;
                        clearInterval(timer);
                        $("#send-code").html('重新发送');
                        $("#send-code").css('color', 'green');
                    }
                    num --;
                }, 1000);

                $.ajax({
                    url:'{{url('home/user/sendSMS')}}',
                    dataType:'json',
                    data:{phone:phone},
                    success:function (data) {
//                    alert(data);
                        if (data == null) {
                            alert('服务器繁忙');
                            return;
                        }
                        if (data.status != 0) {
                            alert(data.message);
                            return;
                        }
                        alert('发送成功');
                    },
                    error:function (xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    }
                })
            });

    </script>

@endsection
@endsection