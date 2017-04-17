<span>第{{$paginator->currentPage()}}/{{ceil($paginator->total()/3)}}</span>
<a href="{{$paginator->previousPageUrl()}}">上一页</a>
<a href="{{$paginator->nextPageUrl()}}">下一页</a>