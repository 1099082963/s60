<?php

namespace App\Http\Controllers\Admin;

use App\Model\advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    public function showAdvert()
    {
        $advert=advertisement::select()->paginate(5);
//        dd($advert);
        return view('Admin/advert/index')->with('advert',$advert);
    }
    public function addAdvert()
    {
        return view('Admin/advert/addadvert');
    }

    public function doAddAdvert(Request $request)
    {
//        dd($request->all());
        $advert=new advertisement();
        $advert->advertName=$request->name;
        $advert->image=$request->file('image')->move('image/advert/',md5(time().uniqid()).'.jpg');
        $advert->save();
        return redirect('admin/advert');
    }

    public function editAdvert($id)
    {
        $advert=advertisement::find($id);
        return view('Admin/advert/editadvert')->with('advert',$advert);
    }
    public function doEditAdvert(Request $request,$id)
    {
        $advert=advertisement::find($id);
        $advert->advertName=$request->name;
        $advert->image=$request->file('image')->move('image/advert/',md5(time().uniqid()).'.jpg');
        $advert->save();
        return redirect('admin/advert');
    }

    public function delAdvert(Request $request,$id)
    {
        $advert=advertisement::find($id);
        $advert->delete();
        return redirect('admin/advert');
    }

    public function display(Request $request,$id)
    {
        $advert=advertisement::find($id);
        if($advert->display==0){
            $advert->display=1;
            $advert->save();
        }else{
            $advert->display=0;
            $advert->save();
        }

        return redirect('admin/advert');
    }

}
