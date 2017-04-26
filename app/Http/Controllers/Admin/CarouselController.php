<?php

namespace App\Http\Controllers\Admin;

use App\Model\carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{
    public function showCarousel()
    {
        $carousel=carousel::select()->get();
//        dd($carousel);
        return view('Admin/carousel/index')->with('carousel',$carousel);
    }
    public function addCarousel()
    {
        return view('Admin/carousel/addcarousel');
    }
    public function doAddCarousel(Request $request)
    {
//        dd($request->all());
        $carousel=new carousel();
        $carousel->carouselName=$request->name;
        $carousel->image=$request->file('image')->move('image/carousel/',md5(time().uniqid()).'.jpg');
        $carousel->save();
        return redirect('admin/carousel');
    }

    public function editCarousel($id)
    {
        $carousel=carousel::find($id);
//        dd($carousel);
        return view('Admin/carousel/editcarousel')->with('carousel',$carousel);
    }
    public function doEditCarousel(Request $request,$id)
    {
//        dd($id);
//        dd($request->all());
        $carousel=carousel::find($id);
        $carousel->carouselName=$request->name;
        $carousel->image=$request->file('image')->move('image/carousel/',md5(time().uniqid()).'.jpg');
        $carousel->save();
        return redirect('admin/carousel');
    }

    public function delCarousel(Request $request,$id)
    {
//        dd($id);
        $carousel=carousel::find($id);
        $carousel->delete();
        return redirect('admin/carousel');
    }
}
