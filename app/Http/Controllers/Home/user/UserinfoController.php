<?php

namespace App\Http\Controllers\Home\user;

use App\Http\Requests\EmailRequest;
use App\Http\Requests\HomeUserInfoRequest;
use App\Http\Requests\PhoneRequest;
use App\Http\Requests\UserPassRequest;
use App\Model\homeUser;
use App\Model\TmpPhone;
use App\Model\User;
use App\Model\Userinformation;
use App\Tool\Result;
use App\Tool\SMS\SendTemplateSMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserinfoController extends Controller
{
    //
    public function info(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

       $data=$userinfo[0];

        return view('home.center.myinformation.user')->with('data',$data)->with('name',$name)->with('icon',$icon);
    }
    public function infoupdate(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
            $phone = session('phone');
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        $data=$userinfo[0];
        return view('home/center/myinformation/userupdate')->with('phone',$phone)->with('icon',$icon)->with('data',$data)->with('name',$name);
    }
    public function doinfoupdate(HomeUserInfoRequest $request){
        $user=homeUser::where('phone',session('phone'))->get();
        $id= $user[0]->id;
        $reader=homeUser::find($id);
        $reader->name = $request->input('name');
        $result1 = $reader->save();

        $infor = Userinformation::where('uid',$id)->get();
        $infoid = $infor[0]->id;
        $info = Userinformation::find($infoid);
        $info->age = $request->input('age');
        if($request->input('birthday')){
            $info->birthday = $request->input('birthday');
        }
        $info->marital = $request->input('marital');
        $info->character = $request->input('character');
        $info->professional = $request->input('professional');
        $info->sex = $request->input('sex');
        $info->personal = $request->input('personal');
        if($request->file('icon')){
            $info->icon = $request->file('icon')->move('home/reader',md5(time().uniqid()).'.jpg');
        }

        $result2 = $info->save();
        //判断是否修改成功
        if ($result1&&$result2) {
            return redirect('home/user/info');
        } else {
            return back();
        }

    }
    public function userpass(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
            $phone = session('phone');
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        $data=$userinfo[0];
        return view('home/center/myinformation/userpass')->with('phone',$phone)->with('icon',$icon)->with('data',$data)->with('name',$name);

    }
    public function douserpass(UserPassRequest $request){
        $user=homeUser::where('phone',session('phone'))->get();
        $user[0]->password = Hash::make($request->password);
        $result =$user[0]->save();
        if($result){
            $request->session()->flush();
            return redirect('home/user/login');
        }else{
            return back();
        }
//        dd($user[0]->password);
    }

    //邮箱绑定与解绑
    public function email(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        $data=$userinfo[0];
        return view('home.center.myinformation.email')->with('data',$data)->with('name',$name)->with('icon',$icon);
    }
    public function handemail(EmailRequest $request){
        $user=homeUser::where('phone',session('phone'))->get();
        $name = $user[0]->name;
        $id = $user[0]->id;
        $userinfo = Userinformation::where('uid',$id)->get();
        $userinfo[0]->is_confirmed = 0;
        $confirmed_code=str_random(48);
        $userinfo[0]->email=$request->input('email');
        $userinfo[0]->confirmed_code=$confirmed_code;
        $userinfo[0]->save();
        $view='home.center.myinformation.emailconfirmed';
        $subject='请验证邮箱';

//

//        dd($userinfo[0]);
        $edit = ['email'=>$userinfo[0]->email,'name'=>$name,'confirmed_code'=>$confirmed_code];
        $confirmed_code=['confirmed_code'=>$confirmed_code];
        $this->sendEmail($edit,$view,$subject,$confirmed_code);
        return redirect('home/user/doemail');

    }
    public function emailConfirm($code)
    {
//        dd($code);
        //查询与之匹配的这个用户
        $user = Userinformation::where('confirmed_code', $code)->first();
        //dd($user);
        if (is_null($user)) {
            return redirect('home/user/info');
        }
        $user->confirmed_code = str_random(48);
        $user->is_confirmed = 1;
        $user->save();
        return redirect('home/user/email');
    }

    public function sendEmail($edit,$view,$subject,$confirmed_code){
        Mail::send($view,$confirmed_code,function($m) use($subject,$edit){
            $m->to($edit['email'])->subject($subject);
        });
    }

    public function doemail(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        $data=$userinfo[0];


        return view('home.center.myinformation.doemail')->with('data',$data)->with('name',$name)->with('icon',$icon);
    }
    public function outphone(){
        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
//        dd($user);
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
            }else{
                $name='文库新人';
            }
            $userinfo = Userinformation::where('uid',$id)->get();
            $icon =$userinfo[0]->icon;
        }else{
            $name='文库新人';
        }

        $data=$userinfo[0];




        return view('home.center.myinformation.outphone')->with('data',$data)->with('name',$name)->with('icon',$icon);
    }


    //发送手机验证码
    public function sendSMS(Request $request)
    {
//        dd($request);
        //获取返回的数据对象
        $result=new Result();
        //获取手机号
        $phone = $request->phone;
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




    public function dooutphone(PhoneRequest $request){

        $result=new Result();
        //数据验证
        //判断验证是否正确
        $tmpPhone = TmpPhone::where('phone', $request->phone)->get()->max();
        dump($tmpPhone->code);
//        dump($tmpPhone->deadline);
//        dump(time());

        if ($tmpPhone->code == $request->verify) {

            if (time() > $tmpPhone->deadline) {
                $result->status = 1;
                $result->message = '验证码过时了';
                dump($result->toJson());
                return redirect('home/user/outphone');

            }

            //得到用户模型

            $user=homeUser::where('phone',session('phone'))->get();
            $user[0]->phone=$request->phone;
//            dd($user);
            if ($user[0]->save()) {
                $result->status = 0;
                $result->toJson();
                $request->session()->flush();
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
}
