<?php

namespace App\Http\Controllers\Home;

use App\Model\advertisement;
use App\Model\BookChapters;
use App\Model\BookRolls;
use App\Model\Books;
use App\Model\collectBooks;
use App\Model\Classify;
use App\Model\comment;
use App\Model\Reader;
use App\Model\recordbooks;
use App\Model\homeUser;
use App\Model\perfect;
use App\Model\replay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ClassifyController extends Controller
{
    //首页
    public function index(Request $request)
    {

        if (session('phone')) {
            $user = homeUser::where('phone', session('phone'))->get();
//            dd($user);
            if ($user[0]->name) {
                $name = $user[0]->name;
            } else {
                $name = '文库新人';
            }

        } else {
            $name = '文库新人';
        }


        $data = Classify::where('pid','=',0)->get();
        $result = Books::all();
        $ddat = Classify::where('pid','=',100)->get();
        //获取路由
        $url = $request->path();
        $advert =advertisement::where(['advertName'=>$url,'display'=>1])->get();

        return view('home.classify')->with('data',$data)->with('name',$name)->with('result',$result)->with('ddat',$ddat)->with('advert',$advert);


    }
    //第二级导航
    public function secondLevel($id)
    {
        $data = Classify::where('pid','=',0)->get();
        $ddat = Classify::where('pid','=',$id)->get();
        $result = Books::all();
        return view('home.classify')->with('ddat',$ddat)->with('data',$data)->with('result',$result);
    }
    //进入二级
    public function second($id)
    {
        $pid = Classify::where('id','=',$id)->get()->toArray();
        $pid = $pid[0]['pid'];
        $data = Classify::where('pid','=',$pid)->get();
        $result = Books::where('cid','=',$id)->get();
        return view('home.classify.secend')->with('data',$data)->with('result',$result);
    }

    //图书详情
    public function readBooks($id)
    {
//        dd(1);
        $user = homeUser::where('phone', session('phone'))->get();
//            dd($user);
        if (!empty($user[0]->name)) {
            $name = $user[0]->name;
        } else {
            $name = '文库新人';
        }
        if (session('phone')) {
            //------------------------hewei开始-----------------------------------
            $user = Reader::where('phone', session('phone'))->get()[0];
//            dd($user->id);
            //收藏
            $havecollect = collectBooks::where(['uid' => $user->id, 'bid' => $id])->get()->toArray();
            if ($havecollect) {
                $status = $havecollect[0]['status'];
//                dd(1111);
            } else {
                $status = 0;
//                dd($status);
            }

            //记录表
            $newcollers = recordbooks::where('uid', $user->id)->get()->toArray();
            $collers = recordbooks::where(['uid' => $user->id, 'bid' => $id])->get()->toArray();
            $havecount = count($collers);

            $books = Books::where('id', $id)->get()[0];
//            dd($newcollers);
            $newcollcount = count($newcollers);
            //如果没有这本书的记录就添加,有就不添加这本书的记录了
            if ($havecount == 0) {
                //只能存入8条记录
                if ($newcollcount > 8) {
                    $oldcollers = recordbooks::where('uid', $user->id)->orderby('addtime', 'asc')->first();
                    $oldcollers->delete();
                }
                $addcoller = new recordbooks();
                $addcoller->uid = $user->id;
                $addcoller->bid = $id;
                $addcoller->addtime = time() + 28800;
                $addcoller->booksname = $books->booksName;
                $addcoller->icon = $books->icon;
                $addcoller->author_name = $books->author_name;
                $addcoller->save();
            }
            $data = Books::find($id);
            $comment = homeUser::join('comment','user.id','comment.uid')->where('book_id',$id)->paginate(3);
            $page = homeUser::join('comment','comment.uid','user.id')->where('book_id',$id)->get();
            $coun=count($page);

            $arr=comment::join('replay','comment.id','replay.comment_id')
                ->join('user','comment.uid','user.id')
                ->get();
            if(session('phone')){
                $user=homeUser::where('phone',session('phone'))->get();
                $uid = $user[0]->id;
                $perfect = perfect::where('book_id',$id)
                    ->where('zan_uid',$uid)
                    ->get()->toArray();
//        dd($perfect);
                if(!$perfect){
//                dd($perfect);
                    return view('home.classify.details')
                        ->with('name',$name)
                        ->with('data',$data)
                        ->with('comment',$comment)
                        ->with('coun',$coun)
                        ->with('book_id',$id)
                        ->with('newcollers', $newcollers)
                        ->with('arr',$arr)
                        ->with('perfect',$perfect)
                        ->with('status', $status)->with('do', 1);
                }else{
                    $perfect = perfect::where('book_id',$id)
                        ->where('zan_uid',$uid)
                        ->get();
                    return view('home.classify.details')
                        ->with('data', $data)
                        ->with('comment',$comment)
                        ->with('book_id',$id)
                        ->with('coun',$coun)
                        ->with('name', $name)
                        ->with('arr',$arr)
                        ->with('newcollers', $newcollers)
                        ->with('perfect',$perfect)
                    ->with('status', $status)->with('do', 1);
                }

            }

            return view('home.classify.details')
                ->with('data', $data)
                ->with('comment',$comment)
                ->with('book_id',$id)
                ->with('name', $name)
                ->with('arr',$arr)
                ->with('newcollers', $newcollers)
                ->with('status', $status)->with('do', 1);


        } else {

            $data = Books::find($id);
            return view('home.classify.details')->with('data', $data)->with('name', $name)->with('do', 0);
        }
    }

        //-----------------hewei结束---------------------------------


    //评论
    public function bookcomment(Request $request,$book_id){
//        dd(11);
        $rules=array(
            'comment'=>'required|max:50',
        );
        //自定义错误
        $mess = array(
            'comment.required'=>'评论内容不可为空',
            'comment.max'=>'评论内容不可超过50字',
        );
        $validate=Validator::make($request->all(),$rules,$mess);
        if($validate->fails()){
            return back()->withErrors($validate);//用back返回上一级
//            return redirect('admin/user-update')->withErrors($validate);//传递错误信息
        }


        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
//        dd($uid);
        $comment= $request->comment;
        $time = date('Y-m-d H:i:s',time()+28800);
//        dd($comment);
        $result1 = comment::insertGetId(['uid'=>$uid,'comment'=>$comment,'book_id'=>$book_id,'create_time'=>$time]);

        if($result1){
            return redirect('home/readBooks/'.$book_id);
        }else{
            return back();
        }
//        dd($data);

    }

    public function replay(Request $request){
        //这本书的id;dump($comment_id);
//        //回复的那条评论的人的id

        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $comment_id=$request->comment_id;
        $replay_comment=$request->replay_comment;
//        $book_id=$request->book_id;

        $result = replay::insert(['replay_uid'=>$uid,'comment_id'=>$comment_id,'replay_comment'=>$replay_comment]);
//            return 111;

        if($result){
            $arr=comment::join('replay','comment.id','replay.comment_id')->where('comment_id', $comment_id)->get();
            return $arr;
        }else{
            return 222;
        }
    }

    public function perfect(Request $request){
        $comment_id=$request->comment_id;
        $book_id=$request->book_id;
        $perfect=$request->perfect;
//        dump($comment_id);
//        dump($book_id);
//        dump($perfect);
        $user=homeUser::where('phone',session('phone'))->get();
        $uid = $user[0]->id;
        $chong = perfect::all();
        if(count($chong)==0){
            $result2 = perfect::insert([
                'comment_id'=>$comment_id,
                'book_id'=>$book_id,
                'perfect'=>$perfect,
                'zan_uid'=>$uid
            ]);
            if($result2){
                return 11;
            }else{
                return 22;
            }
        }else{
//      $chongcomment_id=$chong[0]->comment_id;
//      $chongbook_id=$chong[0]->book_id;
//      $chongzan_id=$chong[0]->zan_uid;
//        if(($chongcomment_id==$comment_id)&&
//            ($chongbook_id==$book_id)&&
//            ($chongzan_id==$uid)){
//            $chong = perfect::where('comment_id',$comment_id)
//                                ->where('book_id',$book_id)
//                                ->where('zan_uid',$uid)->get();
//            $chong[0]->perfect=$perfect;
            $a = perfect::where('comment_id',$comment_id)->where('book_id',$book_id)->where('zan_uid',$uid)->get()->toArray();
//          dd($a);

            if(!empty($a)){
                $zanid= $a[0]['id'];
                $zan = perfect::find($zanid);
//          dd($zan);
                $zan->comment_id=$comment_id;
                $zan->zan_uid=$uid;
                $zan->book_id=$book_id;
                $zan->perfect=$perfect;
                if($zan->save()){
                    return 111;
                }else{
                    return 222;
                }
            }else{

                $result2 = perfect::insert([
                    'comment_id'=>$comment_id,
                    'book_id'=>$book_id,
                    'perfect'=>$perfect,
                    'zan_uid'=>$uid
                ]);
                if($result2){
                    return 11;
                }else{
                    return 22;
                }
            }
        }
    }


    //收藏书籍
    public function collect($id)
    {
        $user=Reader::where('phone',session('phone'))->get()->toArray();
        $uid=$user[0]['id'];
        //当前用户当前书籍没有收藏时,新增一条收藏
        $havecollect = collectBooks::where(['uid' => $uid, 'bid' => $id])->get()->toArray();
        $havecount = count($havecollect);
        //当前用户当前书籍收藏了但是取消了,status是0,则修改
        $havecollect2 = collectBooks::where(['uid' => $uid, 'bid' => $id,'status'=>0])->get();
//        dd($havecollect2);

//        dd($havecount2);
        //没收藏才能收藏
        if ($havecount == 0) {
            $collect = new collectBooks();
            $collect->uid = $uid;
            $collect->bid = $id;
            $collect->status = 1;
            $collect->save();
            return redirect('home/readBooks/'.$id);
        }else if($havecollect2){
            $havecollect2[0]->status=1;
            $havecollect2[0]->save();
            return redirect('home/readBooks/'.$id);
        }else{
            return redirect('home/readBooks/'.$id);
        }
    }


    //读小说
    public function doread($id)
    {
        $books=Books::find($id);
        $bookrolls=BookRolls::where('bid',$id)->get();
//        dd(count($bookrolls->toArray()));
        if(count($bookrolls->toArray())>0){

            foreach ($bookrolls as $v){
                $bookchapters[]=BookChapters::where('rid',$v->id)->get()->toArray();
            }
            //        dd($bookchapters);//章节按照卷分
            if(count($bookchapters)>0){
                return view('home/classify/read')->with('books',$books)
                    ->with('bookrolls',$bookrolls)
                    ->with('bookchapters',$bookchapters);
            }else{
                return view('home/classify/read')->with('books',$books)->with('bookrolls',$bookrolls);
            }

        }else{
            return view('home/classify/read')->with('books',$books)->with('bookrolls',$bookrolls);
        }


    }

    public function content(Request $request)
    {
        $cid=$request->cid;
        $chapters=BookChapters::find($cid);
        $site=$chapters->site;
        return $site;

    }

}
