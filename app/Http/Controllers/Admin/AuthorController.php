<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminAuthorInfoRequest;
use App\Model\author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function authorList()
    {
        $data = author::select()->paginate(1);
//        dd($data);
        return view('Admin.author.index')->with('data',$data);
    }
    public function status($id)
    {
//        dd($id);
        $data= author::where('id',$id)->get();
//        dd($data);
        $data[0]->status=2;
        if($data[0]->save()){
            return redirect('admin/author');
        }
    }
    public function details($id)
    {
        $data=author::where('id',$id)->get();
        return view('admin/author/details')->with('data',$data);
    }

    public function detailsedit(Request $request,$id)
    {
        $data=author::where('id',$id)->get();
        return view('admin/author/detailsedit')->with('data',$data);
    }
    public function dodetailsedit(AdminAuthorInfoRequest $request,$id)
    {
        $author = author::find($id);
        $author->age = $request->input('age');
        $author->email = $request->input('email');
        $author->birthday = $request->input('birthday');
        $author->sex = $request->input('sex');
        if($request->file('icon')){
            $author->icon = $request->file('icon')->move('image/author/',md5(time().uniqid()).'.jpg');
        }
        if ($author->save()) {
            return redirect('admin/author');
        } else {
            return back();
        }
    }
    public function del($id)
    {
        //后台不能删除作者
        return redirect('admin/author');
    }
}
