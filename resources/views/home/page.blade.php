<span>第{{$paginator->currentPage()}}/{{ceil($paginator->total()/2)}}</span>
<a href="{{$paginator->previousPageUrl()}}#book-comment">上一页</a>
<a href="{{$paginator->nextPageUrl()}}#book-comment">下一页</a>