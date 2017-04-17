<?php

namespace App\Http\Controllers\Admin;

use App\Model\cateBooks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $pid = empty($request->id)? 0 : $request->id;
        $data = cateBooks::where('pid','=',$pid)->paginate(5);
        return view('Admin.books.index')->with('data',$data)->with('pid',$pid);
    }
    public function subclass(Request $request)
    {

        $id = $request->pid == 0 ? 1 : $request->pid;
        $pid = cateBooks::where('id','=',$id)->get()[0]->pid;
        $data = cateBooks::where('pid','=',$pid)->paginate(5);
        return view('Admin.books.index')->with('data',$data)->with('pid',$pid);
    }

    public function add()
    {
        return view('Admin.books.booksAdd');
    }
    public function cateAdd(Request $request)
    {
        return view('Admin.books.booksAdd')->with('id',$request->id)->with('path',$request->path);
    }
    public function cateEdit(Request $request)
    {
        $id = $request->id;
        $data = cateBooks::where('id','=',$id)->get();
        return view('Admin.books.booksEdit')->with('data',$data);
    }
    public function edit(Request $request)
    {
        $data = cateBooks::find($request->id);
        $data->name=$request->name;
        $data->pid=$request->pid;
        $data->path=$request->path;
        $data->display=$request->display;
        $result=$data->save();
        if($result){
            return redirect('admin/books');
        }else{
            return back();
        }
    }
    public function catedd(Request $request)
    {
//        dd($request->name);
        $result = cateBooks::insert(
            [
                'name'=> $request->name,
                'pid'=> $request->pid,
                'path'=> $request->path,
                'display'=> $request->display,
            ]
        );
        if ($result){
            return redirect('admin/books');
        }else{
            return back();
        }
    }
}
