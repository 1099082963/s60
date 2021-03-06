@extends('home/layouts/master')
@section('name',$name)

@section('my-css')
    <link rel="stylesheet" href="/css/homeIndex.css">
@endsection

@section('main')

    <div class="container lb-zong" style="position: relative;">


        <div class="media" >
            <img src="{{url('home/img/gg.jpg')}}" width="400px" height="285px">

        </div>

        <div class="lb">
            {{--轮播开始--}}
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
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
                            <div class="item active">
                                <img src="{{url($c->image)}}">
                            </div>
                        @else
                            <div class="item">
                                <img src="{{url($c->image)}}">
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- 左右箭头 -->

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

            @foreach($onecategroy as $one)
            <li><a href="{{asset(url('home/category'))}}" class="btn btn-default" target="_blank">{{$one->name}}</a></li>
            @endforeach

        </ul>
        <a class="btn more"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            更多
        </a>
        <div class="collapse" id="collapseExample">
            <div class="type-div-hidden">
                <ul class="type-ul-hidden">

                    @foreach($twocategroy as $two)
                    <li><a href="{{asset(url('home/category/secend',$two->id))}}" class="btn btn-default" target="_blank">{{$two->name}}</a></li>
                    @endforeach

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

                <a class="more-books" href="{{asset(url('home/category'))}}" target="_blank">

                    更多&nbsp;&gt;
                </a>
                <h3 class="mod-title">热门推荐</h3>
            </div>

            <div class="bd container">
                <ul>

                    @foreach($books as $book)
                        <li class="book" data-track="0,0">
                            <div class="book-cover">
                                <b class="ic-book-wrap"><b class="ic-book ic-book-0"></b></b>
                                <b class="book-cover-shadow"></b>
                                <a href="{{asset(url('home/readBooks',$book->id))}}"><img class="hot-book-img" src="{{url($book->icon)}}" alt=""></a>
                            </div>
                            <a class="book-title" href="" target="_blank" title="{{$book->booksName}}">{{$book->booksName}}</a>
                            <p class="book-price">&yen;{{$book->price}}</p>
                        </li>
                    @endforeach

                </ul>
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

@endsection