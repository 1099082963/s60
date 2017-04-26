<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <link rel="shortcut icon" type="image/x-icon" href="/home/img/favicon.ico">
    <title>百度阅读</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/fonts/iconfont/iconfont.css')}}">
    <script type="text/javascript" src="/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/js/google-maps.js"></script>
    <script>$(document).ready(function(){$(".vertical-nav").verticalnav({speed: 400,align: "left"});});</script>

    <link rel="stylesheet" href="/css/homeMaster.css">

</head>
<body>
{{--导航栏开始--}}
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <a href="{{asset(url('home/index'))}}"><img src="/home/img/timg.jpg" width="40" height="40" style="margin-top: 3px;"></a>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索你想要的书籍">
                </div>
                <button type="submit" class="btn btn-default">搜索图书</button>
            </form>

            {{--@if (Route::has('login'))--}}

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    {{--登录后变成下拉组--}}
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文库新人 <span class="caret"></span></a>
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
                <li><a href="">购物车</a></li>
                <li><a href="">意见反馈</a></li>
                <li><a href="">消息</a></li>
            </ul>

        </div>
    </div>
</nav>
{{--导航栏结束--}}
{{--分类菜单开始--}}
<div class="container menu-group">

    <div class="btn-group navlist" role="group" aria-label="...">
        <ul class="read-nav clearfix">
            <li class="navlist_li"><a class="btn mmen">首页</a></li>
            <li class="navlist_li"><a class="btn mmen" href="{{asset(url('home/category'))}}">分类</a></li>
            <li class="navlist_li"><a class="btn mmen">榜单</a></li>
            <li class="navlist_li"><a class="btn menu" href="{{asset(url('home/author'))}}">独家作品</a></li>
            <li class="navlist_li"><a class="btn menu">机构专区</a></li>
            <li class="navlist_li"><a class="btn menu">客户端</a></li>
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


<link rel="stylesheet" href="/home/css/classify.css">



<div class="kePublic">
    <!--效果html开始-->
    <div class="content">
        <ul class="vertical-nav dark red">
            @foreach($data as $v)
                <li class="active"><a href="{{asset(url('home/category',$v->id))}}">{{$v->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <!--效果html结束-->
    <div class="clear">
        <div class="clear-top">
            <a href="">百度阅读</a>>>>
            <a href="">全部图书</a>
        </div>
        <div class="clear-button">
            <span>热度</span>
            <span>最新</span>
            <span>销量</span>
            <span>价格</span>
        </div>
        <div class="db">
            @foreach($result as $value)
                <div class="books">
                    <a href="{{asset(url('home/readBooks',$value->id))}}"><img src="{{url($value->icon)}}" width="134px" height="178px" alt=""></a>

                    <p><a href="" style="margin-left: -100px;">{{$value->booksName}}</a></p>
                    <br>
                    <p><span style="float: left;">{{$value->author_name}}</span> <span style="float: right;">￥{{$value->price}}</span></p>

                </div>
            @endforeach
        </div>
    </div>
</div>









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
                <a href=""  class="footer-bottom5" target="_blank">机构专区</a>
                <a href="{{url('home/author/register')}}"  class="footer-bottom5" target="_blank">个人作者专区</a>
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
</body>
</html>