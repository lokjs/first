<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;


use App\Services\UploadsManager;

class articlecontroller extends Controller
{

	   use AuthenticatesUsers;
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    protected $redirectPath = '/admin';
    protected $manager;
    public function __construct(UploadsManager $manager)
    {
        $this->middleware('guest');
        $this->manager = $manager;
    }
    
    public function index(Request $request){
        $article=new article;
         $row=$article->where('del','0')->orderBy('id','desc')->paginate(10);
        return view('admin.article', ['row' => $row,'title'=>'','uri'=>'article','group'=>'content']);
    }
    public function create(){
        return view('admin/article_detail',['uri'=>'article','group'=>'content']);
    }
    public function edit($id){
        $row=article::where('id',$id)->where('del',0)->first();
        return view('admin/article_edit',['row'=>$row,'uri'=>'article','group'=>'content']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|max:255'
        ]);
        $this->manager->setFolderName('uploads/article');
        $upload = $this->manager->uploadImage($request,'pic');
        if($upload['error']==NULL)
        {
        $article = new article;
        $article->title=$request->get('title');
        $article->pic=$upload['filename'];
        $article->create_author=Auth::guard('admin')->id();
        $article->update_author=Auth::guard('admin')->id();
        $article->content=$request->get('content');
        if($article->save()){
            return redirect('/admin/article');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }

        }
        else
        {
            return redirect()->back()->widthErrors('图片上传失败');
        }
 
    }
    public function update(Request $request,$id)
    {

        $this->manager->setFolderName('uploads/article');
        $upload = $this->manager->uploadImage($request,'pic');
        $article=article::where('id',$id)->where('del',0)->first();
        $article->title=$request->get('title');
        $article->content=$request->get('content');
        if($upload['error']==null)
        {
        $article->pic=$upload['filename'];
        }
        $article->update_author=Auth::guard('admin')->id();
        if($article->save()){
            return redirect('/admin/article');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }
    public function destroy(Request $request,$id){
        //伪静态删除
        $article=article::find($id);
        $article->del=1;
        if($article->save())
        {
            return redirect('/admin/article');
        } 
        else
        {
            return redirect()->back()->widthInput()->widthErrors('删除失败');
        }

    }
    public function show(Request $request,$id) {
        $article=article::where('id',$id)->where('del',0)->first();
        return view('admin.article_show',['row'=>$article,'uri'=>'article','group'=>'content']);

    }
    public function search(Request $request){
        $title=$request->get('title');
        $article=article::where('title','like','%'.$title.'%')->where('del',0)->paginate(10);
        return view('admin.article',['row'=>$article,'title'=>$title,'uri'=>'article','group'=>'content']);
    }
 
}