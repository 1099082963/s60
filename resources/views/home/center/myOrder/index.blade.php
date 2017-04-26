<link rel="stylesheet" type="text/css" href="/home/css/centermarster.css">
<div class="main">
    <div class="right-main-container" data-csrf_sign="2109984400">
        <div class="books-title-select">
            <div class="books-part-btns" id="mmmm">
                <button class="button">全部订单</button>
                <button class="button">已支付</button>
                <button class="button">未支付</button>
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
                case '全部订单':
                    $.ajax({
                        url:'{{url('center/myOrder/all')}}',
                        type:'get',
                        success:function(data){
                            $('#box').empty().append(data);
                        }
                    })
                    break;

                case '已支付':
                    $.ajax({
                        url:'{{url('center/myOrders/gobuy')}}',
                        type:'get',
                        success:function(data){
                            $('#box').empty().append(data);
                        }
                    })
                    break;

                case '未支付':
                    $.ajax({
                        url:'{{url('center/myOrders/dobuy')}}',
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