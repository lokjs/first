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
        $banner=new banner;
         $row=$banner->orderBy('id','desc')->get();
        return view('admin.banner', [
        'row' => $row]);
    }
    public function create(){
        return view('admin/banner_detail');
    }
    public function edit($id){
        $banner=new banner;
        $row=$banner->where('id',$id)->get();
        return view('admin/banner_edit',['row'=>$row]);
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
        $is_show=($request->get('is_show')=='on')?1:0;
        $obj=$banner->updateOrCreate(['id'=> $request->get('id')],[
            'title'=>$request->get('title'),
            'url'=>$request->get('url'),
            'pic'=>$filename,
            'is_show'=>$is_show ,
            'create_author'=>Auth::guard('admin')->id(),
            'update_author'=>Auth::guard('admin')->id(),
            ]);
            return redirect('/admin/banner');
         
        }
        else
        {
            return redirect()->back()->widthErrors('图片上传失败');
        }
 
    }
 
}