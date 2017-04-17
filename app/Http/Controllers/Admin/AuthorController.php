<?php

namespace App\Http\Controllers\Admin;

use App\Model\author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function authorList()
    {
        $data = author::select()->get();
//        $author = author::paginate(5);
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
}
