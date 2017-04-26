<?php

namespace App\Http\Controllers\Home\Author;

use App\Http\Requests\addBookchaptersRequest;
use App\Http\Requests\addBookCurrentchaptersRequest;
use App\Http\Requests\addBookrollsRequest;
use App\Http\Requests\AuthorInfoRequest;
use App\Http\Requests\AuthorRegisterRequest;
use App\Http\Requests\CreateBooksRequest;
use App\Http\Requests\editBooksRequest;
use App\Model\author;
use App\Model\BookChapters;
use App\Model\BookRolls;
use App\Model\Books;
use App\Model\cateBooks;
use App\Model\homeUser;
use App\Model\level;
use App\Model\Reader;
use App\Model\User;
use App\Model\Userinformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function register()
    {

        if(session('phone')){
            $user=homeUser::where('phone',session('phone'))->get();
            $id = $user[0]->id;
            if($user[0]->name){
                $name=$user[0]->name;
                session(['name'=>$name]);
            }else{
                $name='文库新人';
            }
        }else{
            $name='文库新人';
        }
        if(!session('phone')){
            return redirect('home/user/login');
        }else {

            $user = homeUser::where('phone', session('phone'))->get();
            $id = $user[0]['id'];
//        dd($id);
            $author = author::where('phone', session('phone'))->get()->toArray();
//        dd($author);
            if ($author) {
//                dd($author[0]);
                $uid = $author[0]['uid'];
//                dd($uid);
                $status = $author[0]['status'];
                if ($id == $uid) {
                    if ($status == 0) {
                        return view('home/author/register');
                    } else if ($status == 1) {
                        return view('home/author/wait');
                    } else if ($status == 2) {

                        $data = level::where('author_id',$author[0]['id'])->get();
//                        dd($data);

                        if(count($data->toArray())>0){
                            $level = $data[0]->level;
//                            dd($level);
                            return view('home/author/info')->with(['author'=>$author[0],'level'=>$level]);
                        }else{
//                            dd($author[0]);
                            return view('home/author/info')->with(['author' => $author[0],'level'=>'小说新秀']);

                        }

                    }
                } else {

                    return view('home/author/register');
                }
            } else {

                return view('home/author/register');
            }

        }

    }
    public function doRegister(AuthorRegisterRequest $request)
    {
//        dump(session('phone'));
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;

//        dd($request->all());
        //得到作者模型
        $author = new author();
        $author->uid = $id;
        $author->name = $request->name;
        $author->phone = $request->phone;
        $author->email = $request->email;
        $author->QQ = $request->qq;
        //状态：申请中
        $author->status=1;
        $author->icon = $request->file('icon')->move('image/author',md5(time().uniqid()).'.jpg');
        if($author->save()){
            return redirect('home/author/register');
        }
    }
    public function doInfo(Request $request,$id)
    {
//        dump($id);
//        dump($request->toArray());
        $author=author::where('id',$id)->get();
        $author[0]->age=$request->age;
        $author[0]->sex=$request->sex;
        $author[0]->birthday=$request->birthday;
        $author[0]->phone=$request->phone;
        $author[0]->email=$request->email;
        if($request->file('icon')){
            $author[0]->icon = $request->file('icon')->move('image/author/',md5(time().uniqid()).'.jpg');
        }
        if($author[0]->save()){
            return redirect('home/author/register');
        }else{
            return view('home/author/register/{id}');
        }

    }
    public function bookList()
    {
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();
//        dd($author[0]['id']);
        $books=Books::where('author_id',$author[0]['id'])->get()->toArray();
        if($books){
//          dd($books[0]);
            return view('home.author.bookList')->with('author',$author[0])->with('books',$books);
        }else{
            return view('home.author.bookList')->with('author',$author[0]);
        }
    }
    public function createbooks()
    {
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();

        $cate1=cateBooks::where('pid',0)->get()->toArray();

        return view('home.author.createbooks')->with('author',$author[0])
            ->with('cate1',$cate1);
    }
    //书的分类
    public function cebooks($cate1_id)
    {
        $data =cateBooks::where('pid','=',$cate1_id)->get()->toArray();
        return $data;
    }
    //执行创建书的操作
    public function docreatebooks(CreateBooksRequest $request)
    {
//        dd($request->all());
        $books=new Books();
        $books->cid=$request->input('input_2j');
        $books->author_id=$request->input('author_id');
        $books->booksName=$request->input('booksName');
        $books->author_name=$request->input('author_name');
        $books->price=$request->input('price');
        $books->label=$request->input('label');
        $books->desc=$request->input('desc');
        $books->copyright=$request->input('copyright');
        $books->registime=$request->input('registime');
        $books->icon = $request->file('icon')->move('image/createbooks',md5(time().uniqid()).'.jpg');
        if($books->save()){

                $uid = Reader::where('phone',session('phone'))->get()[0]->id;
                $author_id = author::where('uid',$uid)->get()[0]->id;
                $count = Books::where('author_id',$author_id)->count();
                if ($count<=5){
                    $level = '小说新秀';
                }elseif($count >= 5 && $count < 10 ){
                    $level = '白银作家';
                }elseif($count >=10 && $count <15){
                    $level = '白金作家';
                }elseif($count >=15 && $count <20){
                    $level = '大神';
                }
                $data = array([
                    'author_id'=>$author_id,
                    'books_count'=>$count,
                    'level'=>$level,
                ]);
                $le=level::where('author_id',$author_id)->get();

                if(count($le->toArray())>0){
                    $le[0]->books_count=$count;
                    $le[0]->author_id=$author_id;
                    $le[0]->level=$level;
                    $le[0]->save();

                }else{
                    level::insert($data);
                }

            return redirect('home/author/books');
        }

    }
    //编写小说卷数章节和内容
    public function addBookrolls(Request $request,$b_id)
    {
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();
        return view('home/author/writebook/addBookrolls')->with('author',$author[0]);
    }
    //添加卷操作
    public function doAddBookrolls(addBookrollsRequest $request,$b_id)
    {
        $bookrolls=new BookRolls();
        $bookrolls->bid=$b_id;
        $bookrolls->bookrollsname=$request->input('bookrollsname');
        $bookrolls->addtime=time();
        $bookrolls->desc=$request->input('desc');
        $bookrolls->chapterssum=$request->input('chapterssum');
        $bookrolls->save();
        $currentBookrolls=BookRolls::where('bookrollsname',$request->input('bookrollsname'))->get()->toArray();
        $rid=$currentBookrolls[0]['id'];
//        dd($rid);
        return redirect('home/author/addBookchapters/'.$rid);

    }
    //添加卷后添加章节界面，传的是卷id
    public function addBookchapters($rid)
    {
        $bookrolls=BookRolls::where('id',$rid)->get()->toArray();
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();
        return view('home/author/writebook/addBookchapters')->with('author',$author[0])->with('bookrolls',$bookrolls);
    }

    //执行添加章节
    public function doAddBookchapters(addBookchaptersRequest $request,$rid)
    {
//        dd($request->all());
        $bookrolls=BookRolls::where('id',$rid)->select()->get()->toArray();
        $bid=$bookrolls[0]['bid'];
        $books=Books::find($bid);

        $bookchapters=new Bookchapters();
        $bookchapters->rid=$rid;
        $bookchapters->bid=$bid;
        $bookchapters->chaptersname=$request->input('bookchaptersname');
        $bookchapters->addtime=time();
        $str = str_replace("\r\n","<br />",$request->input('site'));
        $bookchapters->site=$str;

        if($bookchapters->save()){
            return redirect('home/author/books');
        }

    }
//-----------------------------------------我是分割线--------------------------------------------------------
    //直接添加章节界面，传的是书id
    public function addCurrentBookchapters($bid)
    {
//        dd($bid);
        $bookrolls=BookRolls::where('bid',$bid)->get()->toArray();
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();

        return view('home/author/writebook/addBookchapters')->with('author',$author[0])->with('bookrolls',$bookrolls);
    }

    //执行直接添加章节
    public function doAddCurrentBookchapters(addBookCurrentchaptersRequest $request,$bid)
    {
//        dd($request->file('site'));
        $books=Books::find($bid);
//        dd($books);
        //查询卷中的章节数,如果章节表中对应的卷的章节已经等于章节数就不能再添加此卷的章节
        $currentbookrolls=BookRolls::where('id',$request->input('bookrolls'))->select()->get()->toArray();
//        dd($currentbookrolls);
        $chapterssum=$currentbookrolls[0]['chapterssum'];
//        dd($chapterssum);
        //计算出对应卷的章节数有多少
        $currentbookchapters=BookChapters::where('rid',$request->input('bookrolls'))->select()->get()->toArray();
//        dd(count($currentbookchapters));
        $currentbookchaptersnum=count($currentbookchapters);
        if($chapterssum==$currentbookchaptersnum){
            //如果章节数超过了，就不能再添加章节了 重定向存一次性的session
            return redirect()->back()->with('chapterserror', '本卷不能再添加章节了！');
        }else{
            $bookchapters=new Bookchapters();
            $bookchapters->rid=$request->input('bookrolls');
            $bookchapters->bid=$bid;
            $bookchapters->chaptersname=$request->input('bookchaptersname');
            $bookchapters->addtime=time();
            $str = str_replace("\r\n","<br />",$request->input('site'));
            $bookchapters->site=$str;
            if($bookchapters->save()){
                return redirect('home/author/books');
            }
        }



    }

    //ajax二级联动
    public function cechapters($id)
    {
        //dd($chapters_id);//传来的是卷id,data是对应的章节
        $data =BookChapters::where('rid',$id)->get()->toArray();
        return $data;
    }
    //ajax章节的分类
    public function catesite($chapter_id)
    {
        $chapter =BookChapters::where('id',$chapter_id)->get()->toArray();
        return $chapter;
    }
    //ajax求卷名和章节数
    public function juan(Request $request)
    {
        $id=$request->id;
//        $name=BookRolls::find($id);
//        return $name->bookrollsname;
        $bookrolls=BookRolls::where('id',$request->id)->get()->toArray();
        return $bookrolls[0];
    }

    //修改章节
    public function editCurrentBookchapters($bid)
    {
        $bookrolls=BookRolls::where('bid',$bid)->get()->toArray();
        $user=homeUser::where('phone',session('phone'))->get();
        $id=$user[0]->id;
        $author=author::where('uid',$id)->get()->toArray();

        return view('home/author/writebook/editBookchapters')->with('author',$author[0])->with('bookrolls',$bookrolls);
    }
    //修改章节post
    public function doEditCurrentBookchapters(editBooksRequest $request,$bid)
    {
//        dump($request->all());
        $bookrolls=BookRolls::where(['id'=>$request->bookrolls,'bid'=>$bid])->get();
//        dd($bookrolls[0]->bookrollsname);
        $bookchapters=BookChapters::where(['rid'=>$request->bookrolls,'id'=>$request->bookchapters])->get();
//        dd($bookchapters[0]);
        if(count($bookchapters->toArray())>0){
            //修改卷名
            $bookrolls[0]->bookrollsname=$request->newrollname;
            $bookrolls[0]->uptime=time()+28800;
            $bookrolls[0]->chapterssum=$request->newchapterssum;
            $bookrolls[0]->save();

            $bookchapters[0]->chaptersname=$request->newchaptername;
            $bookchapters[0]->uptime=time()+28800;
            $bookchapters[0]->site=$request->site;
            $bookchapters[0]->save();
            return redirect('home/author/books');
        }else{
            return redirect()->back()->with('bookrollserror', ' 请先添加章节再进行修改！');
        }


    }

    //删除章节
    public function delCurrentBookchapters($bid)
    {
        $bookrolls=BookRolls::where('bid',$bid)->get()->toArray();
//        dd($bookrolls);
        if($bookrolls){
            $user=homeUser::where('phone',session('phone'))->get();
            $id=$user[0]->id;
            $author=author::where('uid',$id)->get()->toArray();

            return view('home/author/writebook/delBookchapters')->with('author',$author[0])->with('bookrolls',$bookrolls);

        }else{
            //重定向存一次性的session
            return redirect()->back()->with('bookrollserror', ' 还没有卷不能进行删除！');
        }

    }
    //删除章节post
    public function doDelCurrentBookchapters(Request $request,$bid)
    {
//        dd($request->all());
        if($request->bookchapters=='all'){
            $bookrolls=BookRolls::find($request->bookrolls);
//            $bookchapters=BookChapters::where('rid',$request->bookrolls)->get();
//            dd($bookchapters);
            //删除卷
            $bookrolls->delete();
            //删除此卷下的所有章节
            $bookchapters = DB::delete('delete from chapters where rid='.$request->bookrolls);

        }else{
            $bookchapters=BookChapters::find($request->bookchapters);
            //删除章节
            $bookchapters->delete();
        }

        return redirect('home/author/books');

            $uid = Reader::where('phone',session('phone'))->get()[0]->id;
            $author_id = author::where('uid',$uid)->get()[0]->id;
            $count = Books::where('author_id',$author_id)->count();
            if ($count<=5){
                $level = '小说新秀';
            }elseif($count >= 5 && $count < 10 ){
                $level = '白银作家';
            }elseif($count >=10 && $count <15){
                $level = '白金作家';
            }elseif($count >=15 && $count <20){
                $level = '大神';
            }
            $data = array([
                'author_id'=>$author_id,
                'books_count'=>$count,
                'level'=>$level,
            ]);
            level::insert($data);
            return redirect('home/author/books');

    }


}
