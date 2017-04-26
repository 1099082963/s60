<?php

namespace App\Http\Controllers\Admin;

use App\Model\institutions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstitutionsController extends Controller
{
    public function index()
    {
        $data = institutions::paginate(1);
        return view('admin.institutions.institutions')->with('data', $data);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $data = institutions::find($id);
        $data->delete();
        return redirect('admin/institutions');
    }
    public function all(Request $request)
    {
        $id = $request->id;
        $data = institutions::find($id);
//        dd($data);
        return view('admin.institutions.all')->with('data',$data);
    }
}
