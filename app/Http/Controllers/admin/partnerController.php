<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\partner;


use App\Services\UploadsManager;

class partnerController extends Controller
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
        $partner=new partner;
         $row=$partner->where('del','0')->orderBy('id','desc')->paginate(10);
        return view('admin.partner', ['row' => $row,'title'=>'','uri'=>'partner','group'=>'content']);
    }
    public function create(){
        return view('admin/partner_detail',['uri'=>'partner','group'=>'content']);
    }
    public function edit($id){
        $row=partner::where('id',$id)->where('del',0)->first();
        return view('admin/partner_edit',['row'=>$row,'uri'=>'partner','group'=>'content']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|max:255'
        ]);
        $this->manager->setFolderName('uploads/partner');
        $upload = $this->manager->uploadImage($request,'pic');
        if($upload['error']==NULL)
        {
        $partner = new partner;
        $partner->title=$request->get('title');
        $partner->url=$request->get('url');
        $partner->pic=$upload['filename'];
        $partner->is_show=($request->get('is_show')=='on')?1:0;
        $partner->create_author=Auth::guard('admin')->id();
        $partner->update_author=Auth::guard('admin')->id();
        if($partner->save()){
            return redirect('/admin/partner');
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

        $this->manager->setFolderName('uploads/partner');
        $upload = $this->manager->uploadImage($request,'pic');
        $partner=partner::where('id',$id)->where('del',0)->first();
        $partner->title=$request->get('title');
        $partner->url=$request->get('url');
        if($upload['error']==null)
        {
        $partner->pic=$upload['filename'];
        }
        $partner->is_show=($request->get('is_show')=='on')?1:0;
        $partner->update_author=Auth::guard('admin')->id();
        if($partner->save()){
            return redirect('/admin/partner');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }
    public function destroy(Request $request,$id){
        //伪静态删除
        $partner=partner::find($id);
        $partner->del=1;
        if($partner->save())
        {
            return redirect('/admin/partner');
        } 
        else
        {
            return redirect()->back()->widthInput()->widthErrors('删除失败');
        }

    }
    public function show(Request $request,$id) {
        $partner=partner::where('id',$id)->where('del',0)->first();
        return view('admin.partner_show',['row'=>$partner,'uri'=>'partner','group'=>'content']);

    }
    public function search(Request $request){
        $title=$request->get('title');
        $partner=partner::where('title','like','%'.$title.'%')->where('del',0)->paginate(10);
        return view('admin.partner',['row'=>$partner,'title'=>$title,'uri'=>'partner','group'=>'content']);
    }
 
}