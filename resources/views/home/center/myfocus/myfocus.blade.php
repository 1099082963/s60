<link rel="stylesheet" type="text/css" href="/home/css/author.css">
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