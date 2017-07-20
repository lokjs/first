<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;


use App\Services\UploadsManager;

class bannerController extends Controller
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
    
    public function index(){
        $banner=new banner;
         $row=$banner->where('del','0')->orderBy('id','desc')->get();
        return view('admin.banner', [
        'row' => $row]);
    }
    public function create(){
        return view('admin/banner_detail');
    }
    public function edit($id){
        $row=banner::where('id',$id)->where('del',0)->first();
        return view('admin/banner_edit',['row'=>$row]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|max:255'
        ]);
        $this->manager->setFolderName('uploads/banner');
        $upload = $this->manager->uploadImage($request,'pic');
        if($upload['error']==NULL)
        {
        $banner = new banner;
        $banner->title=$request->get('title');
        $banner->url=$request->get('url');
        $banner->pic=$upload['filename'];
        $banner->is_show=($request->get('is_show')=='on')?1:0;
        $banner->create_author=Auth::guard('admin')->id();
        $banner->update_author=Auth::guard('admin')->id();
        if($banner->save()){
            return redirect('/admin/banner');
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

        $this->manager->setFolderName('uploads/banner');
        $upload = $this->manager->uploadImage($request,'pic');
        $banner=banner::where('id',$id)->where('del',0)->first();
        $banner->title=$request->get('title');
        $banner->url=$request->get('url');
        if($upload['error']==null)
        {
        $banner->pic=$upload['filename'];
        }
        $banner->is_show=($request->get('is_show')=='on')?1:0;
        $banner->update_author=Auth::guard('admin')->id();
        if($banner->save()){
            return redirect('/admin/banner');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }

    }
 
    public function destroy(Request $request,$id){
        //伪静态删除
        $banner=banner::find($id);
        $banner->del=1;
        $banner->save()
    }
    

    public function show(Request $request,$id) {
        $banner=banner::where('id',$id)->where('del',0)->first();
        return view('admin.banner_show');

    }
 
}