<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;


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
        return view('admin.banner');
    }
    public function create(){
        return view('admin/banner_detail');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|max:255'
        ]);

        $banner = new banner;
        $banner->title = $request->get('title');
        $banner->url = $request->get('url');
        $banner->pic = $request->get('pic');
        $banner->is_show = ($request->get('is_show')=='on')?1:0;
        $banner->create_author=Auth::guard('admin')->id();
        $banner->update_author=Auth::guard('admin')->id();
        if($banner->save()){
            return redirect('/admin/banner');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }

}