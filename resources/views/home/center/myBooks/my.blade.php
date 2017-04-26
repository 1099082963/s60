
    <div class="main">
        <div class="right-main-container" data-csrf_sign="2109984400">
            <div class="books-title-select">
                <div class="books-part-btns" id="mmmm">
                    <button class="button">全部(0)</button>

                    @if(count($cou)==0)
                        <button class="button">已购买</button>(0)
                    @else
                        <button class="button">已购买</button>({{count($cou)}})
                    @endif
                    @if($books==0)
                        <button class="button">已收藏</button>(0)
                    @else
                        <button class="button">已收藏</button>({{$books}})
                    @endif

                    <button class="button">会员免费(0)</button>
                    <button class="button">套餐包(0)</button>
                </div>
            </div>
            <div class="books-container" id="box">
                <div class="no-item-bg">
                    <a target="_blank" href="http://yuedu.baidu.com/"><div class="select-book-btn"></div></a>
                </div>
            </div>
            <div id="page">

            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#mmmm button').click(function(){
                switch($(this).html()){
                    //请求一个string响应
                    case '全部(0)':
                        $.ajax({
                            url:'center/myBooks/all',
                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;
                    case '已购买':
                        $.ajax({
                            url:'{{url('center/ispay')}}',
                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;


                    case '已收藏':
                        $.ajax({
                            url:'{{url('center/myBooks/collect')}}',
                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;



                }
            })
        })
    </script>

