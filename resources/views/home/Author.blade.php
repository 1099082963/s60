@extends('home/layouts/master')
@section('main')
    <link rel="stylesheet" href="/home/css/author.css">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="width: 3%;margin-left: -3%;">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-color:#FFD464;width: 100%;">
                <center>
                <img class="img" src="/home/img/author/1.jpg" alt="...">
                </center>
            </div>
            <div class="item" style="background-color:#F4878A;width: 100%";>
                <center>
                <img class="img" src="/home/img/author/2.jpg" alt="...">
                </center>
            </div>
            <div class="item" style="background-color:#85D1F5;width: 100%";>
                <center>
                <img class="img" src="/home/img/author/3.jpg" alt="...">
                </center>
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
                    <span class="num-item" data-num="5"><span class="num-bg" style="background-position: 0px -150px;"></span></span>
                    <span class="num-item" data-num="2"><span class="num-bg" style="background-position: 0px -60px;"></span></span>
                    <span class="num-item" data-num="5"><span class="num-bg" style="background-position: 0px -150px;"></span></span>
                    <span class="num-item" data-num="6"><span class="num-bg" style="background-position: 0px -210px;"></span></span>
                    <span>人加入</span>
                </div>
                <div class="org-num">
                    <span>已有</span>
                    <span class="num-item" data-num="1"><span class="num-bg" style="background-position: 0px -30px;"></span></span>
                    <span class="num-item" data-num="6"><span class="num-bg" style="background-position: 0px -180px;"></span></span>
                    <span class="num-item" data-num="4"><span class="num-bg" style="background-position: 0px -120px;"></span></span>
                    <span>机构入驻</span>
                </div>
            </div>
            <div class="btn-wrap" style="margin-top:20px;">
                <a href="http://yuedu.baidu.com/partner/browse/mingjiashow?fr=mingjia" target="_blank" class="ui-bz-btn" style="text-decoration: none;">
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
    <div class="ax-area-wrap">
        <img src="/home/img/author/7.jpg" alt="">
    </div>

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