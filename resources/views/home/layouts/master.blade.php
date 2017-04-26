<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <link rel="shortcut icon" type="image/x-icon" href="/home/img/favicon.ico">
    <title>@yield('title','百度阅读')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

@yield('js')

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="/js/jquery-1.8.3.js"></script>

@show

    <link rel="stylesheet" href="{{url('/fonts/iconfont/iconfont.css')}}">


    <style>
        @font-face{font-family: 'ziti';src:{{url('/fonts/iconfont/iconfont.ttf')}};}
        .iconfont{
            font-family: ziti;
        }
        span{
            display:inline-block;
        }
        a{
            color:black;
            text-decoration: none;
        }
        li{
            list-style: none;
            float:left;
        }
        .menu-group{
            border-bottom:1px solid green;
        }
        .btn-group{
            height:44px;
            width:1150px;
         }
        .menu{
            font-size:18px;
            color:black;
            width:130px;
        }
        .mmen{
            font-size:18px;
            color:black;
            width:80px;
        }
        .menu:hover{
            color:green;
        }
        .bookshelf{
            font-size:20px;
            color:#999;
            float:right;
        }

        .footer-top{
            height: 170px;
            border-bottom:1px solid #ccc;
            text-align: center;
        }
        .footer-top1{
            width: 100px;
            height: 100px;
            margin-right:150px;
        }
        .footer-top1:hover{
            color:green;
        }
        .footer-top2{
            width: 80px;
            display:block;
            height: 80px;
            font-size:60px;
            color:green;
        }
        .footer-bottom{
            text-align: center;
        }
        .footer-bottom3{
            margin-top:30px;
        }
        .footer-bottom4{
            width: 265px;
            float:left;
        }
        .footer-bottom5{
            display:block;
            color:#666;
        }
        .footer-bottom5:hover{
            color:#ccc;
            text-decoration: none;
        }
        .selected{
            border-bottom: 5px solid green;
        }
        .booklist_nav .list-title {
            background: #34495e;
            color: #fff;
            width: 240px;
            display: block;
            height: 41px;
            line-height: 41px;
            text-align: center;
            font-size: 14px;
            position: relative;
        }
        /*.tab-cate-hd{background-color: rgb(245, 244, 242); border-color: rgb(237, 237, 237);}*/



        .tab-cate-hd {
            position: relative;
            padding-left: 20px;
            width: 240px;
            height: 35px;
            line-height: 35px;
            border: 1px solid #ededed;
            border-top: 0;
            _height: 25px;
        }

        element.style {
            z-index: 101;
            position: relative;
            display: block;
        }
        .footer-bottom6{
            text-align: center;
            font-size:10px;
        }
        .Bidu,.xieyi,.qiye,.guanggao,.shangye{
            color:#2D64B3;
        }
        .footer-contact-feedback{
            text-decoration: underline;

        }
        .container-fluid{
            margin-left:-60px;
        }

    </style>
    <style>
        @font-face{
            font-family: 'ziti';
            src:{{url('/fonts/iconfont/iconfont.ttf')}};
        }
    </style>
    <link rel="stylesheet" href="/css/homeMaster.css">
    @section('my-css')
    @show
</head>
<body>
    {{--导航栏开始--}}
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="{{asset(url('home/index'))}}"><img src="/home/img/timg.jpg" width="40" height="40" style="margin-top: 3px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" action="{{asset(url('home/seach'))}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="搜索你想要的书籍">
                    </div>
                    <button type="submit" class="btn btn-default">搜索图书</button>
                </form>

                {{--@if (Route::has('login'))--}}

                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        {{--登录后变成下拉组--}}
                        <li class="dropdown">

                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@yield('name','文库新人')<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                             <li><a href="">我的订单</a></li>
                             <li><a href="">我的兑换码</a></li>
                             <li><a href="">我的代金券</a></li>
                             <li><a href="">账号设置</a></li>
                             <li><a href="{{url('home/user/logout')}}">退出</a></li>
                        </ul>
                        </li>
                    @else
                        <li><a href="{{url('home/user/login')}}">登录</a></li>
                        <li><a href="{{url('home/user/register')}}">注册</a></li>
                    @endif
                    <li><a href="{{asset(url('home/feedback'))}}">意见反馈</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{--导航栏结束--}}
    {{--分类菜单开始--}}
    <div class="container menu-group">

        <div class="btn-group navlist" role="group" aria-label="...">
            <ul class="read-nav clearfix">
                <li class="navlist_li"><a class="btn mmen" href="{{asset(url('home/index'))}}">首页</a></li>
                <li class="navlist_li"><a class="btn mmen" href="{{asset(url('home/category'))}}">分类</a></li>
                <li class="navlist_li"><a class="btn menu" href="{{asset(url('home/author'))}}">独家作品</a></li>
                <li class="navlist_li"><a class="btn menu" href="{{asset(url('home/institutions'))}}">机构专区</a></li>
                <li class="navlist_li"><a class="btn menu" href="{{asset(url('home/author/register'))}}">个人作者专区</a></li>

                {{--<span class="nav-right-mybook-icon"></span>--}}
               <span class="iconfont bookshelf">&#xe618;<a href="{{asset(url('home/user/center'))}}" class="btn">我的书架</a></span>
            </ul>
        </div>
        <script>
            $('.navlist ul li').mouseover( function () {
                    $(this).addClass('selected');
                }
            );
            $('.navlist ul li').mouseout(  function () {
                $(this).removeClass("selected");
            });



        </script>
    </div>

    {{--分类菜单结束--}}

    @section('main')

    @show

    {{--尾部开始--}}
    <div class="footer container">
        <div class="container footer-top">
            <a href="" class="btn footer-top1" target="_blank"><span class="iconfont footer-top2">&#xe615;</span>正版电子书</a>
            <a href="" class="btn footer-top1" target="_blank"><span class="iconfont footer-top2">&#xe616;</span>多平台畅读</a>
            <a href="" class="btn footer-top1" target="_blank"><span class="iconfont footer-top2">&#xe600;</span>海量图书资源</a>
            <a href="" class="btn footer-top1" target="_blank"><span class="iconfont footer-top2">&#xe619;</span>优质阅读体验</a>
        </div>

        <div class="container container-fluid footer-bottom">
            <ul class="footer-bottom3">
                <li class="footer-bottom4">
                    <h4>帮助</h4>
                    <a href="" class="footer-bottom5" target="_blank">如何购买图书</a>
                    <a href="" class="footer-bottom5" target="_blank">常见问题</a>
                    <a href="" class="footer-bottom5" target="_blank">支付方式</a>
                </li>
                <li class="footer-bottom4">
                    <h4>平台入驻</h4>

                    <a href="{{asset(url('home/institutions'))}}"  class="footer-bottom5" target="_blank">机构专区</a>

                    <a href="{{asset(url('home/author/register'))}}"  class="footer-bottom5" target="_blank">个人作者专区</a>
                </li>
                <li class="footer-bottom4">
                    <h4>投诉与建议</h4>
                    <a class="footer-bottom5"  href="" target="_blank">问题反馈</a>
                </li>
                <li class="footer-bottom4">
                    <h4>扫描下载客户端</h4>
                    <span></span>
                </li>
            </ul>
        </div>

        <div class="container footer-bottom6">
            <p class="contact" style="font-size:14px;">
                如有问题欢迎联系
                <a class="footer-contact-feedback" href="https://tieba.baidu.com/p/4471901647?share=9105&amp;fr=share" target="_blank">投诉反馈</a>
            </p>
            <p>
                <span class="cr">©2017&nbsp;Baidu</span>&nbsp;<a href="https://www.baidu.com/duty/" class="Bidu" target="_blank">使用百度前必读</a>
                &nbsp;&nbsp;<span class="line">|</span>&nbsp;&nbsp;<a class="xieyi" target="_blank" href="https://yuedu.baidu.com/customer/yueduhelp?nav=4">平台协议</a>&nbsp;&nbsp;<span class="line">|</span>&nbsp;&nbsp;<a class="qiye" target="_blank" href="https://jiaoyu.baidu.com/topic/bsplatform/institutional_database">企业文库</a>&nbsp;&nbsp;<span class="line">|</span>&nbsp;&nbsp;<a class="guanggao" target="_blank" href="https://jiaoyu.baidu.com/topic/bsplatform/brand_promotion">广告服务</a>&nbsp;&nbsp;<span class="line">|</span>&nbsp;&nbsp;<a class="shangye" target="_blank" href="https://jiaoyu.baidu.com/topic/bsplatform/overview">百度教育商业服务平台</a>
            </p>
        </div>
    </div>
    {{--尾部结束--}}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>