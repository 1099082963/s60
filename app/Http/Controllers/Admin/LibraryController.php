<?php

namespace App\Http\Controllers\Admin;

use App\Model\library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    public function index()
    {
        $data = library::all();
        return view('admin.books.library.index')->with('data',$data);
    }
    public function delete(Request $request)
    {
        $user = library::find($request->id);
        $user->delete();
        return view('admin.books.library.index');
    }
    public function details(Request $request)
    {
        $data = library::find($request->id);
        return view('admin.books.library.details')->with('data',$data);
    }
    public function state(Request $request)
    {
        $data = library::find($request->id);
        return view('admin.books.library.state')->with('data',$data);
    }
    public function up(Request $request)
    {
       $up = $request->up == 1 ? 2 : 1;
       $user = library::find($request->id);
       $user->up = $up;
        $user->save();
       $data = library::find($request->id);
       return view('admin.books.library.state')->with('data',$data);

    }
    public function hot(Request $request)
    {
        $hot = $request->hot == 1 ? 2 : 1;
        $user = library::find($request->id);
        $user->hot = $hot;
        $user->save();
        $data = library::find($request->id);
        return view('admin.books.library.state')->with('data',$data);

    }
}
