@foreach($books as $b)
    <div style="float:left;margin-right:20px;">
        {{--直接读取内容的url,书id是$b[0]['id']--}}
        <a href=""><img src="{{url($b->icon)}}" alt="" width="100px" height="120px"></a>
        <div>
            <a href="">{{$b->booksName}}</a>
            用户id
        </div>
    </div>
@endforeach