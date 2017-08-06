<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webconfig;
use App\banner;
use App\contact;
use App\feedback;
use App\article;
use App\partner;

class webController extends Controller
{
 
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public  function __construct()
    {
        $this->config=webconfig::where('del',0)->first();

    }
    public function index(){
        $banner=banner::where('del',0)->Orderby('id','desc')->paginate(3);
        $article=article::where('del',0)->Orderby('id','desc')->paginate(3);
        $article1=article::where('del',0)->where('pic','!=','null')->Orderby('id','desc')->paginate(3);
        $partners=partner::where('del',0)->where('is_show',1)->Orderby('id','DESC')->get();
         $about=contact::where('del',0)->Orderby('id','desc')->first();
        return view('index',['config'=>$this->config,'link'=>'index','banner'=>$banner,'articles'=>$article,'article_pic'=>$article1,'partners'=>$partners,'about'=>$about]);
    }

    public function about(){
        $about=contact::where('del',0)->Orderby('id','desc')->first();
        return view('about',['config'=>$this->config,'link'=>'about','about'=>$about]);
    }

    public function server(){
        return view('server',['config'=>$this->config,'link'=>'server']);
    }
    public function object(){
        return view('object',['config'=>$this->config,'link'=>'object']);
    }
    public function news(Request $request){
        $title=$request->get('title');
        $row=article::where('del',0)->where('type',1)->where('title','like','%'.$title.'%')->orderBy('id','DESC')->paginate(10);
        return view('news',['config'=>$this->config,'link'=>'news','row'=>$row,'title'=>$title,'type'=>'1']);
    }
    public function actives(Request $request){
        $title=$request->get('title');
        $row=article::where('del',0)->where('type',2)->where('title','like','%'.$title.'%')->orderBy('id','DESC')->paginate(10);
        return view('news',['config'=>$this->config,'link'=>'news','row'=>$row,'title'=>$title,'type'=>'2']);   
    }
    public function laws(Request $request){
        $title=$request->get('title');
        $row=article::where('del',0)->where('type',3)->where('title','like','%'.$title.'%')->orderBy('id','DESC')->paginate(10);
        return view('news',['config'=>$this->config,'link'=>'news','row'=>$row,'title'=>$title,'type'=>'3']);   
    }
    public function news_detail(Request $request,$id){
        $row=article::where('id',$id)->where('del',0)->first();
        if($row)
        {
        $pre=article::where('type',$row->type)->where('id','<',$id)->orderBy('id','DESC')->first();
        $next=article::where('type',$row->type)->where('id','>',$id)->orderBy('id','ASC')->first();
        }
        return view('new',['config'=>$this->config,'link'=>'news','row'=>$row,'pre'=>$pre,'next'=>$next]);
    }

    public function lxwm(){
        $about=contact::where('del',0)->Orderby('id','desc')->first();
        return view('lxwm',['config'=>$this->config,'link'=>'about','about'=>$about]);
    }
    public function feedback(){
        return view('feedback',['config'=>$this->config,'link'=>'about']);
    }
    public function feedbackupdate(Request $request){
        $feedback=new feedback;
        $feedback->name=$request->get('name');
        $feedback->phone=$request->get('phone');
        $feedback->title=$request->get('title');
        $feedback->content=$request->get('content');
        if($feedback->save())
        {
            return redirect('feedback')->with('ok','保存成功');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }
    public function search(Request $request){
        $title=$request->get('title');
        $row=article::where('del',0)->where('title','like','%'.$title.'%')->paginate(10);
        return view('search',['config'=>$this->config,'link'=>'news','row'=>$row,'title'=>$title]);

    }
 

}