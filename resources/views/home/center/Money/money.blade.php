<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .right{height:700px;}
        .right h2{font-size: 30px;margin-left: 20px}
        .right button{margin-left: 20px}
    </style>
</head>
<body id="hhhh">
   <div class="right">
       <h2>账户充值</h2>
       <hr>
       <div>
           <button type="button" class="btn btn-info">充值10元</button>
           <button type="button" class="btn btn-info">充值20元</button>
           <button type="button" class="btn btn-info">充值30元</button>
           <button type="button" class="btn btn-info">充值50元</button>
           <button type="button" class="btn btn-info">充值100元</button>
           <button type="button" class="btn btn-info">自定义充值</button>

        </div>
       <hr>
       <div id="form-money" style="display: none">
           <div class="form-group">
               <label class="sr-only" for="exampleInputEmail3">自定义充值</label>
               <input type="text" name="money" class="form-control" id="money">
           </div>
           <button id="self" class="btn btn-default" >充值 </button>
       </div>


   </div>

   <script>
       $(function(){
           $('.right button').click(function(){
               switch($(this).html()){
                   //请求一个string响应
                   case '充值10元':
                      alert('充值成功');
                       $.ajax({
                           url:'center/Money/getmoney',
                           type:'post',
                           data:{'money':10,'_token':'{{csrf_token()}}'},
                           success:function(data){
                              alert(data);
                           },
                           dataType:'json',
                       })
                       break;
                   case '充值20元':
                       alert('充值成功');
                       $.ajax({
                           url:'center/Money/getmoney',
                           type:'post',
                           data:{'money':20,'_token':'{{csrf_token()}}'},
                           success:function(data){
//                               alert($('.right button').html());
                               $('.right button').html().append('充值成功'+data);
                           },
                           dataType:'json',
                       })
                       break;
                   case '充值30元':
                       alert('充值成功');
                       $.ajax({
                           url:'center/Money/getmoney',
                           type:'post',
                           data:{'money':30,'_token':'{{csrf_token()}}'},
                           success:function(data){
                               alert($('.right button').html());
                               $('.right button').html().append('充值成功'+data);
                           },
                           dataType:'json',
                       })
                       break;
                   case '充值50元':
                       alert('充值成功');
                       $.ajax({
                           url:'center/Money/getmoney',
                           type:'post',
                           data:{'money':50,'_token':'{{csrf_token()}}'},
                           success:function(data){
                               alert($('.right button').html());
                               $('.right button').html().append('充值成功'+data);
                           },
                           dataType:'json',
                       })
                       break;

                   case '充值100元':
                       alert('充值成功');
                       $.ajax({
                           url:'center/Money/getmoney',
                           type:'post',
                           data:{'money':100,'_token':'{{csrf_token()}}'},
                           success:function(data){
                               alert($('.right button').html());
                               $('.right button').html().append('充值成功'+data);
                           },
                           dataType:'json',
                       })
                       break;

                   case '自定义充值':
                        $('#form-money').show();
                       $('#self').click(function(){
                           alert('充值成功');
                           $('#form-money').hide();
                           $.ajax({
                               url:'center/Money/getmoney',
                               type:'post',
                               data:{'money':$('#money').val(),'_token':'{{csrf_token()}}'},
                               success:function(data){


                               },
                               dataType:'json',
                           })
                       })

                       break;
               }
           })
       })
   </script>
</body>
</html>