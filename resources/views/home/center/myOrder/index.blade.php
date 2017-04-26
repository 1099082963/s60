<link rel="stylesheet" type="text/css" href="/home/css/centermarster.css">
<div class="main">
    <div class="right-main-container" data-csrf_sign="2109984400">
        <div class="books-title-select">
            <div class="books-part-btns" id="mmmm">
                <button class="button">全部(0)</button>
                <button class="button">已购买(0)</button>
                <button class="button">已收藏(0)</button>
                <button class="button">会员免费(0)</button>
                <button class="button">套餐包(0)</button>
            </div>
        </div>
        <div class="books-container" id="box">
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
            }
        })
    })
</script>