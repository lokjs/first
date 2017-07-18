<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;
use Storage;
 

class bannerController extends Controller
{

	   use AuthenticatesUsers;
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    protected $redirectPath = '/admin';
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index(){
         $banner = new banner;
         $row=$banner->orderBy('id','desc')->get();
        return view('admin.banner', [
        'row' => $row]);
    }
    public function create(){
        return view('admin/banner_detail');
    }
    public function store(Request $request)
    {


        $this->validate($request, [
           'title' => 'required|max:255'
        ]);
        $file = $request->file('pic');
            // 文件是否上传成功
        if ($file->isValid()) {
            // $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            // $type = $file->getClientMimeType();     // image/jpeg
            // 上传文件
            $filename = time(). uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
        }
        if($bool)
        {
        $banner = new banner;
        $banner->title = $request->get('title');
        if($request->get('url'))
        {
            $banner->url = $request->get('url');
        }
        $banner->pic = $filename;
        $banner->is_show = ($request->get('is_show')=='on')?1:0;
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
 
}