<?php

namespace App\Http\Controllers\Admin;

use App\Model\feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedBackController extends Controller
{
    public function index()
    {
        $data = feedback::paginate(1);
        return view('admin.feedback.feedback')->with('data',$data);
    }
    public function delete($id)
    {
        $del = feedback::find($id);
        $del->delete();
        return redirect(asset(url('admin/feedback')));
    }
    public function dodo($id)
    {
        $status = feedback::find($id);
        $stats = $status->status;
        $stat = $stats == 1?2:2;
        $status->status = $stat;
        $status->save();
        return redirect(asset(url('admin/feedback')));
    }
    public function dete($id)
    {
        $data = feedback::find($id);
        return view('admin.feedback.dete')->with('data',$data);
    }
}
