<link rel="stylesheet" type="text/css" href="/home/css/centermarster.css">
<div class="main">
    <div class="right-main-container" data-csrf_sign="2109984400">
        <div class="books-title-select">
            <div class="books-part-btns" id="mmmm">
               <button class="button">用户充值</button>
                <button class="button">用户充值记录</button>
                <button class="button">用户积分</button>
            </div>
        </div>
        <div class="" id="box-right" style="width:800px;">
        </div>

    </div>
</div>
<script>
    $(function() {
        function dohistory() {
            $('#mmmm button').click(function () {
                switch ($(this).html()) {
                    //请求一个string响应
                    case '用户充值记录':
                        $.ajax({
                            url: 'center/Money/history',
                            type: 'get',
                            success: function (data) {
                                $('#box-right').empty().append(data);
                            },

                        });
                        break;
                    case '用户充值':
                        $.ajax({
                            url: 'center/Money/money',
                            type: 'get',
                            success: function (data) {
                                $('#box-right').empty().append(data);
                            }
                        })
                        break;

                    case '用户积分':
                    $.ajax({
                        url:'center/Money/core',
                        type:'get',
                        success:function(data){
                            $('#box-right').empty().append(data);
                        }
                    })
                    break;

                }
            })
        }
        dohistory();
    })






//    $(function(){
//        $('#mmmm button').click(function(){
//            switch($(this).html()) {
//                //请求一个string响应
//                case '用户充值':
//                    $.ajax({
//                        url: 'center/Money/money',
//                        type: 'get',
//                        success: function (data) {
//                            $('#box').empty().append(data);
//                        }
//                    })
//                    break;
//                case '用户积分':
//                    $.ajax({
//                        url:'center/Money/core',
//                        type:'get',
//                        success:function(data){
//                            $('#box').empty().append(data);
//                        }
//                    })
//                    break;
//            }
//
//
//
//
//    })
</script>


