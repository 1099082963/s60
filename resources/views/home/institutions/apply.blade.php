@extends('home/layouts/master')
@section('main')
    <div style="width: 1165px;margin: 10px auto;">
        百度阅读>>>品台入驻>>>申请入驻平台
    </div>
    <div style="width: 1165px;border-top: 1px solid #1E9865; border:1px solid #E5E5E5 ;padding: 70px 164px;margin: 0 auto;">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <h4 style="font-size: 15px;border-bottom: 1px solid #EAEAEA;height: 29px;padding-bottom: 14px;">基础信息填写 <span style="color: red;">(均为必填项)</span></h4>
            <p>机构官方ID:{{session('phone')}}</p>
            <p style="padding-left:130px;font-size: 12px;">当前登录的账号将默认为机构的官方账号，如需更换账号请使用新账号重新登陆之后再进行申请.</p>
            <br>
            <p>公司名称:<input type="text" name="institutions_name"><span style="font-size: 12px;"> &nbsp;最多不超过30个字</span></p>
            <p style="padding-left:130px;font-size: 12px;">请填写完整的公司名称 如：博士德文化有限公司</p>
            <br>
            <p>公司域名:<input type="text" name="domain"><span style="font-size: 12px;"></span></p>
            <p style="padding-left:130px;font-size: 12px;">请填写完整的公司域名 如：www.baidu.com</p>
            <br>
            <p>联系电话:<input type="number" name="phone"></p>
            <p style="padding-left:130px;font-size: 12px;">请准确填写您的联系电话，以便于平台管理员及时与您联系。该号码不会展示给读者。</p>
            <p style="padding-left:130px;font-size: 12px;">格式：01012345678 13912345678</p>
            <br>
            <p>电子邮箱:<input type="email" name="email"></p>
            <p style="padding-left:130px;font-size: 12px;">请保持邮箱真实有效,百度将向此邮箱发送激活邮件并进行日常事务联系。</p>
            <br>
            <p>公司log:<input type="file" name="icon"></p>
            <p style="padding-left:130px;font-size: 12px;">请上传公司完整log</p>
            <br>
            <p><input type="submit" value="确认申请" style="background-color: #39986F;color: #fff;"></p>
        </form>
    </div>
@endsection