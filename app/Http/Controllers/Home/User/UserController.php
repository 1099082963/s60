<?php

namespace App\Http\Controllers\Home\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Model\homeUser;
use App\Model\TmpPhone;
use App\Tool\Result;
use App\Tool\SMS\SendTemplateSMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Register()
    {
        return view('home.register');
    }
    public function Login(){
        return view('home.login');
    }
    //发送手机验证码
    public function sendSMS(Request $request)
    {
        //获取返回的数据对象
        $result=new Result();
        //获取手机号
        $phone = $request->phone;
//        dd($request);
        //判断手机号是否是为空
        if ($phone == '') {
            $result->status = 1;
            $result->message = '手机号不能为空';
            return $result->toJson();
        }
        //定义随机因子
        $charset = '1234567890';
        $sms = new SendTemplateSMS();
        //随机得到随机因子
        $code = '';
        $len = strlen($charset);
        for ($i = 0; $i < 4; $i++){
            $code .= $charset{mt_rand(0,strlen($len))};
        }
        //发送的号码，验证码，模板ID
        $result = $sms->sendSMS($phone,array($code, 5), 1);
        if ($result->status == 0) {
            //获取tmp_phone表模型
            $tmp_phone = new TmpPhone();
            $tmp_phone->phone = $phone;
            $tmp_phone->code = $code;
            $tmp_phone->deadline = time()+ 5*60;
            $tmp_phone->save();
        }
        return $result->toJson();
    }

    //注册操作
    public function doRegister(UserRegisterRequest $request)
    {
        $result=new Result();
        //数据验证
        //判断验证是否正确
        $tmpPhone = TmpPhone::where('phone', $request->phone)->get()->max();
//        dump($tmpPhone->code);
//        dump($tmpPhone->deadline);
//        dump(time());

        if ($tmpPhone->code == $request->verify) {

            if (time() > $tmpPhone->deadline) {
                $result->status = 1;
                $result->message = '验证码过时了';
                dump($result->toJson());
                return redirect('home/user/register');

            }

            //得到用户模型
            $user = new homeUser();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            if ($user->save()) {
                $result->status = 0;
                $result->message = '注册成功';
                $result->toJson();
                return redirect('home/user/login');
            } else {
                $result->status = 1;
                $result->message = '注册失败';
                $result->toJson();
                return redirect('home/user/register');
            }
        } else {
            $result->status = 1;
            $result->message = '验证码错误';
            $result->toJson();
            return redirect('home/user/register');
        }
    }

    //登录
    public function singin(UserLoginRequest $request)
    {
        $flag=Auth::attempt(['phone' => $request->input('phone'), 'password' =>$request->input('password') ]);
//        dd($flag);
        if($flag){
            return redirect('home/index')->with('errors', ['登录成功']);
        }else{
            return redirect('home/user/login');
        }
    }

    //用户注销
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('home/index');

    }
}
