@extends('home/layouts/master')

@section('my-css')
    <link rel="stylesheet" href="/css/homeIndex.css">
@endsection

@section('main')
    <div class="container lb-zong">
        <div class="media">
            <div class="top-number-unit free-num-wrap">
                <p class="num" data-num="31,192"><span class="num0 d0" data-num="3" style="background-position: -2px -90px;"></span><span class="num0 d1" data-num="1" style="background-position: -2px -30px;"></span><span class="num0 d0" data-num="1" style="background-position: -2px -30px;"></span><span class="num0 d1" data-num="9" style="background-position: -2px -270px;"></span><span class="num0 d2" data-num="2" style="background-position: -2px -60px;"></span></p>
            </div>
            <a href="/promotion/activity/nafreelist?fr=book_index#topBanner" target="_blank" class="apply-btn"></a>
        </div>
        <div class="lb">
            {{--轮播开始--}}
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/home/img/lb1.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/home/img/lb2.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/home/img/lb3.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/home/img/lb4.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/home/img/lb5.jpg" alt="...">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="iconfont lb-left" aria-hidden="true">&#xe670;</span>
                    <span class="sr-only"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="iconfont lb-right">&#xe66e;</span>
                    <span class="sr-only"></span>
                </a>
            </div>
            {{--轮播结束--}}
        </div>
    </div>
    <div class="container type">
        <span><b>分类</b></span>
        <ul class="type-ul">
            <li><a href="" class="btn btn-default" target="_blank">成功学</a></li>
            <li><a href="" class="btn btn-default" target="_blank">投资理财</a></li>
            <li><a href="" class="btn btn-default" target="_blank">人际处事</a></li>
            <li><a href="" class="btn btn-default" target="_blank">计算机</a></li>
            <li><a href="" class="btn btn-default" target="_blank">人物传记</a></li>
            <li><a href="" class="btn btn-default" target="_blank">言情小说</a></li>
            <li><a href="" class="btn btn-default" target="_blank">散文随笔</a></li>
            <li><a href="" class="btn btn-default" target="_blank">悬疑推理</a></li>
            <li><a href="" class="btn btn-default" target="_blank">市场营销</a></li>
        </ul>
        <a class="btn more"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            更多
        </a>
        <div class="collapse" id="collapseExample">
            <div class="type-div-hidden">
                <ul class="type-ul-hidden">
                    <li><a href="" class="btn btn-default" target="_blank">健康养生</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">演讲口才</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">现当代小说</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">宗教哲学</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">企业管理</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">心理学</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">教育考试</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">历史小说</a></li>
                    <li><a href="" class="btn btn-default" target="_blank">两性情感</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mod other-link yd-reco">
        <div class="other-link-wrap">
            <a class="other-link-item" href="" target="_blank">
                <img class="other-link-img" src="/home/img/douban.jpg" data-a="">
            </a>
            <a class="other-link-item" href="" target="_blank">
                <img class="other-link-img" src="/home/img/duke.jpg" data-a="">
            </a>
            <a class="other-link-item" href="" target="_blank">
                <img class="other-link-img" src="/home/img/huazhang.jpg" data-a="">
            </a>
        </div>
    </div>
    <div class="mod yd-reco">
        <div class="container-fluid yd-reco-wrap js-toolbar-hook ">
            <div class="hd">
                <a class="more-books" href="" target="_blank">
                    更多&nbsp;&gt;
                </a>
                <h3 class="mod-title">热门推荐</h3>
            </div>

            <div class="bd container">
                <ul>
                    <li class="book" data-track="0,0">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/1e30e924b899a901516799f314950a7b0308f5a1.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/93cea605abea998fcc22bcd126fff705cc175c6b?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">热播剧《大唐荣耀》原著：大...</span>
                                        <p class="book-card-author">沧溟水</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="" target="_blank" title="热播剧《大唐荣耀》原著：大唐后妃传：珍珠传奇Ⅰ">热播剧《大唐荣耀》原著：大唐后妃传...</a>
                        <p class="book-price">￥4.89</p>
                    </li>
                    <li class="book" data-track="0,1">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/279759ee3d6d55fbc36bf8e264224f4a21a4dd41.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/c4a7e22a366baf1ffc4ffe4733687e21af45ff2c?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">人间正道</span>
                                        <p class="book-card-author">周梅森</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/c4a7e22a366baf1ffc4ffe4733687e21af45ff2c?fr=index" target="_blank" title="人间正道">人间正道</a>
                        <p class="book-price">￥4.19</p>
                    </li>
                    <li class="book" data-track="0,2">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/ac345982b2b7d0a24f57156ac2ef76094a369aae.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/49e22fe5e109581b6bd97f19227916888486b9e4?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">拉普拉斯的魔女</span>
                                        <p class="book-card-author">东野圭吾</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/49e22fe5e109581b6bd97f19227916888486b9e4?fr=index" target="_blank" title="拉普拉斯的魔女">拉普拉斯的魔女</a>
                        <p class="book-price">￥15.99</p>
                    </li>
                    <li class="book" data-track="0,3">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/a8014c086e061d954024cf7272f40ad162d9ca1e.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/389360c90d22590102020740be1e650e52eacfcf?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">三生三世十里桃花</span>
                                        <p class="book-card-author">唐七公子</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/389360c90d22590102020740be1e650e52eacfcf?fr=index" target="_blank" title="三生三世十里桃花">三生三世十里桃花</a>
                        <p class="book-price">￥5.99</p>
                    </li>
                    <li class="book" data-track="0,4">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/a8ec8a13632762d0f7b2b255a9ec08fa503dc64f.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/5b1c1fe2a58da0116c17496e?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">嫌疑人X的献身</span>
                                        <p class="book-card-author">东野圭吾</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/5b1c1fe2a58da0116c17496e?fr=index" target="_blank" title="嫌疑人X的献身">嫌疑人X的献身</a>
                        <p class="book-price">￥8.99</p>
                    </li>
                    <li class="book" data-track="0,5">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/4610b912c8fcc3ce5f35d9c49b45d688d53f204b.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/198e08e285254b35eefdc8d376eeaeaad1f316e2?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">天下没有陌生人</span>
                                        <p class="book-card-author">刘希平</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/198e08e285254b35eefdc8d376eeaeaad1f316e2?fr=index" target="_blank" title="天下没有陌生人">天下没有陌生人</a>
                        <p class="book-price">￥15.99</p>
                    </li>
                    <li class="book" data-track="0,6">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/aec379310a55b319fb3d55fb4aa98226cefc1773.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/7e2c7823cd7931b765ce0508763231126edb77d6?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">余生太短，要和有趣的人在一...</span>
                                        <p class="book-card-author">麦子熟了</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/7e2c7823cd7931b765ce0508763231126edb77d6?fr=index" target="_blank" title="余生太短，要和有趣的人在一起">余生太短，要和有趣的人在一起</a>
                        <p class="book-price">￥9.45</p>
                    </li>
                    <li class="book" data-track="0,7">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/b64543a98226cffc5aac3919b0014a90f703ea93.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/9900488485868762caaedd3383c4bb4cf7ecb7d7?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">未来简史：从智人到智神</span>
                                        <p class="book-card-author">[以色列]尤瓦尔...</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/9900488485868762caaedd3383c4bb4cf7ecb7d7?fr=index" target="_blank" title="未来简史：从智人到智神">未来简史：从智人到智神</a>
                        <p class="book-price">￥40.80</p>
                    </li>
                    <li class="book" data-track="0,8">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/29381f30e924b899b272b40f67061d950a7bf6bf.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/6438e6bf970590c69ec3d5bbfd0a79563c1ed446?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">白鹿原</span>
                                        <p class="book-card-author">陈忠实</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/6438e6bf970590c69ec3d5bbfd0a79563c1ed446?fr=index" target="_blank" title="白鹿原">白鹿原</a>
                        <p class="book-price">￥12.00</p>
                    </li>
                    <li class="book" data-track="0,9">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/d4628535e5dde7117bb9e1cfa0efce1b9d1661a4.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/334b5491ad02de80d4d840c7?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">刺客信条：杀死你是我存在的...</span>
                                        <p class="book-card-author">往来社</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/334b5491ad02de80d4d840c7?fr=index" target="_blank" title="刺客信条：杀死你是我存在的意义（怪哉009）">刺客信条：杀死你是我存在的意义（怪...</a>
                        <p class="book-price">￥6.00</p>
                    </li>
                    <li class="book" data-track="0,10">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/3812b31bb051f819f335bbdcd3b44aed2e73e710.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/96285dbd294ac850ad02de80d4d8d15abf23005a?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">狼的恩赐</span>
                                        <p class="book-card-author">安妮·赖斯</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/96285dbd294ac850ad02de80d4d8d15abf23005a?fr=index" target="_blank" title="狼的恩赐">狼的恩赐</a>
                        <p class="book-price">￥26.00</p>
                    </li>
                    <li class="book" data-track="0,11">
                        <div class="book-cover">
                            <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                            <b class="book-cover-shadow"></b>
                            <img class="hot-book-img" src="/home/img/64380cd7912397dd66b636245082b2b7d1a287c7.jpg" alt="">
                            <div class="book-card">
                                <div class="book-card-pack">
                                    <a href="/ebook/8681a0631611cc7931b765ce05087632311274e0?fr=index" target="_blank" class="book-card-wrap">
                                        <span class="book-card-title">忽而半夏</span>
                                        <p class="book-card-author">奈奈</p>
                                        <span class="book-card-btn">去看看</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="book-title" href="/ebook/8681a0631611cc7931b765ce05087632311274e0?fr=index" target="_blank" title="忽而半夏">忽而半夏</a>
                        <p class="book-price">￥4.96</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mod-hd container-fluid" style="text-align: center"><h3 class="mod-title">出版社</h3></div>
    {{--出版社开始--}}
    <div class="org-bd container">
        <div class="mod tabs conta-fluidiner" id="org-tab">
            <div class="hd topper container">
                <ul id='tabControl' class="tabControl">
                    <li class="hover">
                        <a href="" target="_blank" title="上海读客"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/500fd9f9d72a60595b64046e2a34349b033bba4a.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="中信出版社"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/960a304e251f95cae8bada1fcb177f3e660952cf.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="华章数字媒体"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1f178a82b9014a90cf42b41fad773912b31bee10.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="北京磨铁数盟信息技术有限公司"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/0bd162d9f2d3572cfd7590cb8813632762d0c316.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="湖北长江新世纪"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/54fbb2fb43166d22f07f56cd452309f79052d25b.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="新星出版社"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/63d0f703918fa0ec8602cafd209759ee3c6ddb7d.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="中南博集天卷"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/b21bb051f81986189a3484d548ed2e738bd4e674.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="果麦文化"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/cc11728b4710b912b7d08b40c2fdfc039245227e.jpg" class="org-banner"></a>
                    </li><li class="disabled">
                        <a href="" target="_blank" title="理想国"><img src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1ad5ad6eddc451da42c7361cb0fd5266d0163217.jpg" class="org-banner"></a>
                    </li></ul>
            </div>
            <div class="bd">
                <ul id="tabContent" class="tabContent">
                    <li class="hover-current">
                        <p class="org-title"><b class="ic-org"></b>上海读客</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/5cbf92175acfa1c7ab00cc5f?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/3b87e950352ac65cd128c50cf2f2b21193138aa4.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/5cbf92175acfa1c7ab00cc5f?fr=index" target="_blank" title="微微一笑很倾城">微微一笑很倾城</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/71bff9bd50e2524de4187e0d?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1ad5ad6eddc451da18b205bbb5fd5266d016321d.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/71bff9bd50e2524de4187e0d?fr=index" target="_blank" title="何以笙箫默">何以笙箫默</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/1ffdd3b4aaea998fcc220eb2?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/a044ad345982b2b79c34118e37adcbef77099bd4.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/1ffdd3b4aaea998fcc220eb2?fr=index" target="_blank" title="后来我们都哭了II·废墟">后来我们都哭了II...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/9a713002b8f67c1cfbd6b881?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/d0c8a786c9177f3e55f84b5b78cf3bc79e3d5693.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/9a713002b8f67c1cfbd6b881?fr=index" target="_blank" title="杉杉来吃">杉杉来吃</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>中信出版社</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/81c0ab4387c24028915fc3ba?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1c950a7b02087bf4fb5b4c51f6d3572c10dfcfd7.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/81c0ab4387c24028915fc3ba?fr=index" target="_blank" title="从0到1：开启商业与未来的秘密">从0到1：开启商业...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/1bc9c8cf852458fb770b569b?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/a5c27d1ed21b0ef41bca62e5d8c451da81cb3e6e.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/1bc9c8cf852458fb770b569b?fr=index" target="_blank" title="人类简史">人类简史</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/7a89b178b4daa58da1114a07?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/37d3d539b6003af32a33a054362ac65c1038b67c.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/7a89b178b4daa58da1114a07?fr=index" target="_blank" title="谁动了我的奶酪">谁动了我的奶酪</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/befcec1133d4b14e84246832?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/5366d0160924ab18239ff01332fae6cd7b890b0c.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/befcec1133d4b14e84246832?fr=index" target="_blank" title="创业者手册">创业者手册</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>华章数字媒体</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/f93599b66137ee06eff918af?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/2f738bd4b31c87016964cf4c247f9e2f0608ff4e.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/f93599b66137ee06eff918af?fr=index" target="_blank" title="如何高效学习">如何高效学习</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/3ee85eae6137ee06eef9184a?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/18d8bc3eb13533fa2c38587cabd3fd1f40345bd2.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/3ee85eae6137ee06eef9184a?fr=index" target="_blank" title="定位：有史以来对美国营销影响最大的观念">定位：有史以来对...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/1b49d26efad6195f302ba637?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/4d086e061d950a7bcb382e3109d162d9f2d3c932.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/1b49d26efad6195f302ba637?fr=index" target="_blank" title="世界上最简单的会计书">世界上最简单的会...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/bde30f92941ea76e58fa0481?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/574e9258d109b3ded3718528cfbf6c81810a4ca7.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/bde30f92941ea76e58fa0481?fr=index" target="_blank" title="从零开始学K线：新手入门、洞悉K线、股市获利之道">从零开始学K线：新...</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>北京磨铁数盟信息技术有限公司</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/35e00f5dfd0a79563d1e720f?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/c995d143ad4bd113405e318d5dafa40f4afb05f9.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/35e00f5dfd0a79563d1e720f?fr=index" target="_blank" title="后宫如懿传·大结局">后宫如懿传·大结...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/a7c2c4035a8102d276a22fd1?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/b151f8198618367a1e370d782c738bd4b21ce5dd.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/a7c2c4035a8102d276a22fd1?fr=index" target="_blank" title="后宫·如懿传2">后宫·如懿传2</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/d060fcad7f1922791688e8f5?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/377adab44aed2e73600392098301a18b87d6fa29.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/d060fcad7f1922791688e8f5?fr=index" target="_blank" title="后宫·如懿传4">后宫·如懿传4</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/31cc2ea404a1b0717fd5dd7e?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1c950a7b02087bf40afc42c1f1d3572c11dfcf81.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/31cc2ea404a1b0717fd5dd7e?fr=index" target="_blank" title="后宫·如懿传3">后宫·如懿传3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>湖北长江新世纪</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/ab06d8565727a5e9856a61b1?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/d4628535e5dde7119e580eaba4efce1b9c1661e0.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/ab06d8565727a5e9856a61b1?fr=index" target="_blank" title="我不是潘金莲">我不是潘金莲</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/0d588b1a8e9951e79b892792?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/d01373f082025aaf12797c87f8edab64034f1a36.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/0d588b1a8e9951e79b892792?fr=index" target="_blank" title="狼图腾">狼图腾</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/4e7e1660581b6bd97f19eafb?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/f636afc379310a55cdf892a9b44543a98326108a.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/4e7e1660581b6bd97f19eafb?fr=index" target="_blank" title="女不强大天不容">女不强大天不容</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/a5c2fef40066f5335a8121f0?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/a6efce1b9d16fdfa51f67a4dbc8f8c5495ee7bff.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/a5c2fef40066f5335a8121f0?fr=index" target="_blank" title="白说">白说</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>新星出版社</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/622a4198376baf1ffd4fad82?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/ac4bd11373f082028619a9c24dfbfbedaa641b47.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/622a4198376baf1ffd4fad82?fr=index" target="_blank" title="无人生还">无人生还</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/6d1721ad4a7302768f993985?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/bba1cd11728b47100a53c631c5cec3fdfd0323ca.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/6d1721ad4a7302768f993985?fr=index" target="_blank" title="东方快车谋杀案">东方快车谋杀案</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/6bda8ca003d8ce2f006623f3?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/8644ebf81a4c510f64a25df06659252dd52aa5f2.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/6bda8ca003d8ce2f006623f3?fr=index" target="_blank" title="布谷鸟的蛋是谁的">布谷鸟的蛋是谁的</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/aee52575b9f3f90f77c61b80?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/574e9258d109b3de0ec7df95cabf6c81810a4cd6.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/aee52575b9f3f90f77c61b80?fr=index" target="_blank" title="ABC谋杀案">ABC谋杀案</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>中南博集天卷</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/1500a1db647d27284a735178?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/cefc1e178a82b9013c1270bd748da9773812ef85.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/1500a1db647d27284a735178?fr=index" target="_blank" title="最好的我们（全二册）">最好的我们（全二...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/c2106a5f87c24028915fc3fe?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/4a36acaf2edda3ccbf953fef02e93901203f9288.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/c2106a5f87c24028915fc3fe?fr=index" target="_blank" title="当我足够好，才会遇见你">当我足够好，才会...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/28d46950b84ae45c3a358c06?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/1c950a7b02087bf4c35335e0f1d3572c11dfcf78.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/28d46950b84ae45c3a358c06?fr=index" target="_blank" title="大漠谣">大漠谣</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/491008fc51e79b89680226ce?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/50da81cb39dbb6fde109f5430a24ab18972b3700.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/491008fc51e79b89680226ce?fr=index" target="_blank" title="暗恋·橘生淮南（下）">暗恋·橘生淮南（...</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>果麦文化</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/fe954049be23482fb4da4c65?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/b21c8701a18b87d6508e06a5010828381e30fdb8.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/fe954049be23482fb4da4c65?fr=index" target="_blank" title="小王子">小王子</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/8c65adab76eeaeaad0f33015?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/f703738da977391209bafa3ffc198618377ae2d4.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/8c65adab76eeaeaad0f33015?fr=index" target="_blank" title="皮囊">皮囊</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/6af1cb28a45177232e60a219?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/8b13632762d0f7034e95ec670afa513d2697c562.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/6af1cb28a45177232e60a219?fr=index" target="_blank" title="跟乐嘉学性格色彩">跟乐嘉学性格色彩</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/9ccce9039ec3d5bbfc0a748b?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/4b90f603738da9778a1dff78b851f8198618e3b7.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/9ccce9039ec3d5bbfc0a748b?fr=index" target="_blank" title="女王乔安">女王乔安</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden">
                        <p class="org-title"><b class="ic-org"></b>理想国</p>
                        <ul class="org-books">
                            <li class="book">
                                <a href="/ebook/377f90aa67ec102de2bd89c6?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/7dd98d1001e939010da2f2c97dec54e737d196a0.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/377f90aa67ec102de2bd89c6?fr=index" target="_blank" title="看见">看见</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/79ae3016680203d8ce2f24ed?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/3801213fb80e7bec23723403292eb9389a506ba3.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/79ae3016680203d8ce2f24ed?fr=index" target="_blank" title="乌合之众：大众心理研究">乌合之众：大众心...</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/990fcfe227284b73f24250c3?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/8c1001e93901213f950a312b52e736d12f2e950f.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/990fcfe227284b73f24250c3?fr=index" target="_blank" title="优雅">优雅</a>
                            </li>
                            <li class="book">
                                <a href="/ebook/323f16fb783e0912a2162ab0?fr=index" target="_blank" class="book-cover">
                                    <b class="book-cover-shadow"></b>
                                    <img class="book-img" src="https://gss0.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/doc/abpic/item/b21bb051f81986188a3690734ced2e738ad4e6d0.jpg" alt="">
                                </a>
                                <a class="book-title" href="/ebook/323f16fb783e0912a2162ab0?fr=index" target="_blank" title="大数据">大数据</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{--出版社结束--}}
    <script>
        var lis = document.getElementById('tabControl').getElementsByTagName('li');
        var mess = document.getElementById('tabContent').children;
        for(var i = 0;i<mess.length; i++) {
            (function (i) {
                lis[i].onmouseover = function () {
                    lis[i].className = 'hover';
                    mess[i].className = 'hover-current';
                };
                lis[i].onmouseout = function () {
                    lis[i].className = 'disabled';
                    mess[i].className = 'hidden';
                }
            })(i)
        }

    </script>
    <script>
        $('.hot-book-img').mouseover(function(){
            $(this).css({opacity:0.2}).next().show('slow').css({width: "150px" ,color:"#ccc"});
        })
        $('.hot-book-img').mouseout(function(){
            $(this).css({opacity:1}).next().hide('slow');
        });
    </script>
    {{--返回顶部开始--}}
    {{--<div id="side-bar" style="right: 64.5px; display: block;" class="">--}}
        {{--<div class="btn-wrap mb5">--}}
            {{--<a href="###" class="side-bar-item gotop"><span class="ic"></span></a>--}}
            {{--<a href="###" class="side-bar-item weixin">--}}
                {{--<span class="ic"></span>--}}
                {{--<span class="text-tip">关注<br>微信</span>--}}
                {{--<span class="tooltips-box side-bar-qr-wp" style="display: none;">--}}
                {{--<span class="abox"><span class="a1"></span><span class="a2"></span></span>--}}
                {{--<span class="side-bar-qr"></span>--}}
                {{--<span class="side-bar-qr-txt">扫描二维码，快速分享到微信朋友圈</span>--}}
                {{--</span>--}}
            {{--</a>--}}
            {{--<a href="http://weibo.com/readbaidu" class="side-bar-item weibo" target="_blank"><span class="ic"></span><span class="text-tip">关注<br>微博</span></a>--}}
        {{--</div>--}}
        {{--<div class="btn-wrap">--}}
            {{--<a href="http://tieba.baidu.com/p/4471901647?share=9105&amp;fr=share" class="side-bar-item fankui log-xsend" data-logxsend="[2, 200206]" target="_blank"><span class="ic">意见反馈</span><span class="text-tip">意见反馈</span></a>--}}
        {{--</div>--}}
        {{--<div class="feedback-remind">--}}
            {{--<a href="###" class="feedback-remind-close"></a>--}}
            {{--<div class="feedback-remind-content"></div>--}}
            {{--<a href="http://tieba.baidu.com/p/4471901647?share=9105&amp;fr=share" target="_blank" class="feedback-remind-link  log-xsend" data-logxsend="[2, 200206]"></a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--返回顶部结束--}}
@endsection