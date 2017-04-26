<!doctype html>
<html lang="en">
<head>
    <script src='/js/jquery-1.8.3.min.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <link rel="shortcut icon" type="image/x-icon" href="/home/img/favicon.ico">
    <title>@yield('title','注册')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
{{--导航栏开始--}}
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href=""><img src="/home/img/timg.jpg" width="40" height="40" style="margin-top: 3px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('home/user/login')}}">登录</a></li>
                <li><a href="{{url('home/user/register')}}">注册</a></li>

            </ul>
        </div>
    </div>
</nav>
@section('form')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>注册百度阅读账号</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        {{--取出所有的错误--}}
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>
            @endif

            <form action="/home/user/store"  method="post" id="reg-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">手机号</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">验证码</label>
                    <input style="width:200px;display:inline-block;" type="text" class="form-control" name="verify">
                    <span id="send-code" class="btn btn-default">发送验证码</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" value="点击注册" class="login_btn btn btn-default btn-block btn-success" />
            </form>
        </div>
    </div>
</div>
@show
@section('my-js')
    <script>
        //增加判断表示
        var flag = true;
        $("#send-code").click(function () {
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
                url:'{{url('/sendSMS')}}',
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
        //注册用户
        $("#reg-form").submit(function () {
            //数据验证
            //获取数据
            var data= $(this).serialize();
            console.log(data);
            {{--$.ajax({--}}
                {{--type:'post',--}}
                {{--dataType:'json',--}}
                {{--data:data,--}}
                {{--url:'{{url('home/user/store')}}',--}}
                {{--success:function (data) {--}}
                    {{--if (data.status != 0) {--}}
                        {{--alert(data.message);--}}
                        {{--return;--}}
                    {{--}--}}
                    {{--location.href = "{{url('home/user/login')}}";--}}
                {{--}--}}
            {{--});--}}
//            return false;
        });
    </script>
@show
</body>
</html>

