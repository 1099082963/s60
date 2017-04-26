@extends('home/layouts/master')

@section('my-css')

@endsection

@section('main')
    <div style="width: 1165px;margin: 0 auto;border: 1px solid #E4E4E4;margin-top: 20px;">
        <div>
            <span style="width: 800px;height: 50px;line-height: 50px;font-size: 30px;">欢迎来到反馈界面!!!请将您的意见提出来...</span>
            <a href=""><span style="width: 50px;height: 30px;border: 1px solid #DEE0DE;text-align: center;line-height: 30px;background-color:#FEFEFE;">回复</span></a>
        </div>
        <div style="overflow: hidden;border-bottom: 1px solid #DEE0DE;">
            <div style="width: 200px;background-color:#FAFBFC;text-align: center;float: left;">
                <img style="margin-top: 20px;" src="/home/img/a4bd6475e5b08fe99885e8afbb6e4e.jpg" alt="">
                <p style="margin-top: 20px;">阅读官方</p>
            </div>
            <div style="width:930px;float: left;margin-top:20px;margin-left: 30px;">
                <p>HI亲爱的百度用户们:</p>
                <br>
                <p>小伙伴们在使用百度阅读期间，遇到了哪些问题？都可以来这里提问哦~！</p>
                <p>百度阅读吧志愿者们会优先处理本帖内吧友遇到的问题。</p>
                <br>
                <p style="font-size: 12px;float: right;margin-right: 30px;">{{date('Y年m月d日')}}<a href="" style="color: blue;">回复</a></p>
            </div>
        </div>
        @foreach($data as $v)
        <div style="overflow: hidden;border-bottom: 1px solid #DEE0DE;">
            <div style="width: 200px;background-color:#FAFBFC;text-align: center;float: left;">
                <img style="margin-top: 20px;" src="{{url($v->user_icon)}}" width="110px;" alt="">
                <p style="margin-top: 20px;">{{$v->user_name}}</p>
            </div>
            <div style="width:930px;float: left;margin-top:20px;margin-left: 30px;">
                <P>{{$v->desc}}</P>
                <br>
                <p style="font-size: 12px;float: right;margin-right: 30px;"><span style="color:red;">{{$v->status == 1?'处理反馈中':'反馈已处理'}}</span>{{$v->creat}}<a href="" style="color: blue;">回复</a></p>
            </div>
        </div>
        @endforeach
        <div>
            {{$data->links()}}
        </div>


        <div style="background-color: #F9F9F9;padding:0 200px;">
            <p>发表回复</p>
            <div style="width: 600px;height: 300px;background-color: #fff;">
                <form action="" method="post">
                    {{csrf_field()}}
                    <textarea name="desc" id="" cols="82" rows="13" style="resize:none;"></textarea>
                    <input type="submit" value="发表">
                </form>
            </div>
        </div>
    </div>
@endsection