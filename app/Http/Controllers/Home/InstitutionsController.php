<?php

namespace App\Http\Controllers\home;


use App\Model\advertisement;
use App\Model\carousel;
use App\Model\institutions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstitutionsController extends Controller
{

    public function index(Request $request)
    {
        $url = $request->path();
        $carousel = carousel::where('carouselName', $url)->get();
        $advert =advertisement::where(['advertName'=>$url,'display'=>1])->get();
        $data = institutions::paginate(1);
        return view('home.institutions.institutions')->with('data',$data)->with('carousel',$carousel)->with('advert',$advert);
    }
    public function apply()
    {
        return view('home.institutions.apply');
    }
    public function applyPost(Request $request)
    {
       $path = $request->icon->move('image/apply',md5(time().uniqid()).'.jpg');
        $data = array([
           'institutions_name' => $request->institutions_name,
            'domain' => $request->domain,
            'phone' => $request->phone,
            'email' => $request->email,
            'icon' => $path,
        ]);
        institutions::insert($data);

    return redirect('home/institutions');

    }
}
