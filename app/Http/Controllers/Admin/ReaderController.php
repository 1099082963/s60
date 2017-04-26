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
    public function status($status,$id){
        if($status==0){
            $status=1;
        }else if($status==1){
            $status=0;
        }
        $data = Reader::find($id);
        $data->status=$status;
//        dd( $data->status);
        if($data->save()){
            return redirect('admin/reader')->with('data',$data);
        }else{
            return '此操作失败';
        }

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

    //用户  详情
    public function readerdesc($id){
        $info = Userinformation::join('user','userinformation.uid','user.id')->where('user.id',$id)->get();
//        dd($info);

        foreach($info as $infor){
            $data = $infor;
        }
        return view('Admin.reader.description')->with('data',$data);
    }
    public function doreaderdesc($id){
        $data = Userinformation::join('user','userinformation.uid','user.id')->get()->find($id);
        return view('Admin.reader.descriptionedit')->with('data',$data);
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


}
