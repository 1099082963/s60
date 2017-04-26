@extends('home/layouts/master')
@section('main')
    <link rel="stylesheet" href="/home/css/author.css">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators" style="margin-left: -3%;">
            @for($i=0;$i<count($carousel);$i++)
                @if($i==0)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                @else
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" ></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($carousel as $c)
                @if($c->id==$carousel[0]->id)
                    <div class="item active" style="width: 100%;">
                        <center>
                            <img src="{{url($c->image)}}">
                        </center>
                    </div>
                @else
                    <div class="item" style="width: 100%";>
                        <center>
                            <img src="{{url($c->image)}}">
                        </center>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


        <div class="mod apply-wrap" id="apply-wrap">

            <div class="title-wrap">
                <h2 class="apply-title" style="font-size: 24px;color: #9b5b32;">成为百度阅读作者</h2>
                <div class="apply-slogan">分享你的专业知识和方法论</div>
            </div>
            <div class="num-wrap" style="padding-top: 20px;">
                <div class="personal-num">
                    <span>已有</span>
                    <span style="font-size: 30px;color: orange;">&nbsp;{{$count}}&nbsp;</span>
                    <span>人加入</span>
                </div>
                <div class="org-num">
                    <span>已有</span>
                    <span style="font-size: 30px;color: orange;">&nbsp;不明&nbsp;</span>
                    <span>机构入驻</span>
                </div>
            </div>
            <div class="btn-wrap" style="margin-top:20px;">
                <a href="{{url('home/author/register')}}" target="_blank" class="ui-bz-btn" style="text-decoration: none;">
                    <b class="ui-bz-btn-p-40 ui-bz-btc">申请成为作者</b>
                </a>
            </div>
        </div>
    </div>
    <div class="center" >
        <div class="hd">
            <div class="mod-title">
                <h2 class="hh2">作者推荐</h2>
            </div>
            <div class="block">
                @foreach($data as $v)
                    <div class="author-item" style="float: left;margin-right: 10px;">

                        <div class="top">
                            <div class="top-left">
                                <img src="{{url($v->icon)}}" width="60px" alt="">
                            </div>
                            <div class="top-right">
                                <a href="" class="xiaoao">{{$v->name}}</a>
                                <a href="{{asset(url('home/center/focus',$v->id))}}"><span class="lal">
                                    {{$v->stat == null?'关注':$v->stat ==1?'关注':'取消关注'}}
                                </span></a>
                                <p class="duzhe">{{$v->click}}读者</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <p class="zhiye">职业投资人，擅长营销策划和美食。</p>
                            <p>代表作品：<a href="">《{{$v->booksName}}》</a></p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="center-right">
            <div class="new">
                <h4 class="newdo">最新动态</h4>
            </div>
            <div id="pin">
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/2.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/3.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="center" >
        <div class="hd">
            <div class="mod-title">
                <h2 class="hh2">互联网</h2>
            </div>
            <div class="block">
                <div class="author-item">
                    <div class="top">
                        <div class="top-left">
                            <img src="/home/img/author/6.jpg" width="60px" alt="">
                        </div>
                        <div class="top-right">
                            <a href="" class="xiaoao">笑傲茶湖段</a>
                            <a href=""><span class="lal">关注</span></a>
                            <p class="duzhe">5420202读者</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <p class="zhiye">职业投资人，擅长营销策划和美食。</p>
                        <p>代表作品：<a href="">《K均交易法：股票期货只...》</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-right">
            <div class="new">
                <h4 class="newdo">互联网周热门榜</h4>
            </div>
            <div id="pin">
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/2.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/3.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
                <div id="lun">
                    <div class="xiat">
                        <a href=""><img src="/home/img/author/6.jpg" width="40px" alt=""></a>
                    </div>
                    <div class="wen">
                        <p><span>缘心居士</span> <i>   </i> <span>1小时前</span></p>
                        <p><span>成功认证为百度作者</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--广告开始--}}
    @if($advert)
        <div class="container-fluid" style="margin:20px;">
            <div class="container">
                @foreach($advert as $a)
                    <div class="item active">
                        <center>
                            <img src="{{url($a->image)}}">
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    {{--广告结束--}}

    <div class="author-rank-wrap">
        <div class="">
            <h2>名家大赏</h2>
        </div>
        <div class="hdd">
            <div class="rank-item-wrap">
                <div class="hhdd">本周名家好评榜</div>
                <div class="xkk">
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">作品总评分： 10.0</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">作品总评分： 10.0</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">作品总评分： 10.0</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">作品总评分： 10.0</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">作品总评分： 10.0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rank-item-wrap">
                <div class="hhdd">本周名家好评榜</div>
                <div class="xkk">
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">新增读者数： 23215</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">新增读者数： 23215</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">新增读者数： 23215</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">新增读者数： 23215</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">新增读者数： 23215</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rank-item-wrap">
                <div class="hhdd">本周名家好评榜</div>
                <div class="xkk">
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">评论数： 330</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">评论数： 330</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">评论数： 330</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">评论数： 330</span>
                        </div>
                    </div>
                    <div class="author-rank-item first">
                        <div class="media">
                            <span>1</span>
                            <img src="/home/img/author/6.jpg" width="40px" alt="">
                        </div>
                        <div class="content">
                            <span>火星人陈勇</span>
                            <span class="zpp">评论数： 330</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){

            setInterval(function(){

                //将最后一li前置到ul的最前面，然后 透明度 隐藏 下拉 淡入
                $('#pin div:first').appendTo('#pin');

            },3000)

        })
    </script>
@endsection
