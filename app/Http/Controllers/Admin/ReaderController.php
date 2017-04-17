<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InformationRequest;
use App\Http\Requests\ReadRequest;
use App\Model\Reader;
use App\Model\Userinformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ReaderController extends Controller
{
    //用户
    public function readerlist(){
        $data = Reader::select()->get();
//        dd($data);
        return view('admin.reader.reader')->with('data',$data);
    }
    //分页
    public function dosearch(Request $request){

        $sear=$request->input('search');
        if($sear){
            $data = Reader::where('name','like','%'.$sear.'%')->paginate(1);
            return view('admin.reader.reader')->with('data',$data);
        }else{
            $data = Reader::paginate(3);
            return view('admin.reader.reader')->with('data',$data);
        }

    }
    //用户详情
    public function readerdesc($id){
        $info = Userinformation::join('user','userinformation.uid','user.id')->get();
        foreach($info as $infor){
            $data = $infor;
        }
        return view('Admin.reader.description')->with('data',$data);
    }
    public function doreaderdesc($id){
        $data = Userinformation::join('user','userinformation.uid','user.id')->get()->find($id);
        return view('Admin.reader.descriptionedit')->with('data',$data);
    }
    public function doreaderdescedit(InformationRequest $request,$id){
//        dd($request->all());
        $user = Reader::find($id);
        $info = Userinformation::find($id);
        $info->age = $request->input('age');
        $info->email = $request->input('email');
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

//        dd($request->file('icon'));
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $result1 = $user->save();
        $result2 = $info->save();
        //判断是否修改成功
        if ($result1&&$result2) {
            return redirect('admin/reader');
        } else {
            return back();
        };
    }
    //用户删除
    public function readerdel($id){
       $reader = Reader::find($id);
        $userinformation =Userinformation::where('uid',$id);
        $userinformation->delete();
        $reader->delete();
        return redirect('admin/reader');
//        return view('Admin.reader.reader');
    }
    //用户修改
    public function readeredit($id){
        $user = Reader::find($id);
        return view('Admin.reader.edit', compact('user'));
    }
    public function readerUpdate(ReadRequest $request,$id){
//        dd($request->all());
        $user = Reader::find($id);
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $result = $user->save();
//        dd($result);
        //判断是否修改成功
        if ($result) {
            return redirect('admin/reader');
        } else {
            return back();
        }
    }
}
