<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\admin;
use App\Services\UploadsManager;
class adminController extends Controller
{
 
	   use AuthenticatesUsers;
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    protected $redirectPath = '/admin';
     protected $manager;
    public  function __construct(UploadsManager $manager)
    {
        $this->middleware('guest');
        $this->manager = $manager;
    }
    protected function redirectTo()
	{
    	return '/admin/login';
	}
    public function index(){
    	if (Auth::guard('admin')->check())
		{
		    return View('admin/index',['group'=>'','uri'=>'index']);
		}
		else
		{
			return redirect('admin/login');
		}
    }
    public function getlogin(){
    	return View('admin.login');
    }
    public function postlogin(Request $request){
    	$data=$request->all();
        if (Auth::guard('admin')->attempt(['email' => $data['name'], 'password' => $data['password'] ])) {
            //更新ip
            $ip=$request->ip();
            $id = Auth::guard('admin')->id();
            Admin::where('id',$id)->update(["ip"=>$ip]);
        }
      return redirect('admin');      
    }

    public function edit($id=null){
        $users=Auth::guard('admin')->user();
        if($id&&($users->rtp==1))
        {
            $userobj=admin::where('id',$id)->where('del','0')->first();
            return view('/admin.admins_edit',['group'=>'sys','uri'=>'admins','row'=>$userobj,'title'=>'']);
        }
        else
        {
           $user =  Auth::guard('admin')->user();
            return view('admin.info',['group'=>'sys','uri'=>'info','user'=>$user]);
        }
 
    }
    public function adminlist(){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            $users=admin::where('del',0)->paginate(1);
            return view('admin.admins',['group'=>'sys','uri'=>'admins','row'=>$users,'title'=>'']);
        }
        else
        {
           return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
        }
    }
    public function create(){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            return view('/admin.admins_detail',['group'=>'sys','uri'=>'admins','title'=>'']);
        }
        else
        {
            return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
        }
    }
    public function store(Request $request){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            $admin=new admin;
            $admin->name=$request->get('name');
            $admin->email=$request->get('email');
            $admin->password=bcrypt($request->get('password'));
            $this->manager->setFolderName('uploads/admin');
            $upload = $this->manager->uploadImage($request,'pic');
            if($upload['error']==null)
            {
            $admin->pic=$upload['filename'];
            }
            $admin->rtp=$request->get('rtp');
            if($admin->save()){
            return redirect('/admin/admins');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
            }         
        }
        else
        {
           return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
        }
    }
    public function destroy(Request $request,$id){

        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            $userobj=admin::where('id',$id)->first();
            $userobj->del=1;
            if($userobj->save())
            {
    return redirect('/admin/admins');
            }
            else
            {
                return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
            }
        }
    }
    public function search(Request $request){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            $users=admin::where('name','like','%'.$request->get('title').'%')->where('del','0')->paginate(10);
            return view('/admin.admins',['group'=>'sys','row'=>$users,'uri'=>'admins','title'=>$request->get('title')]);
        }
        else
        {
             return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
        }
    }
    public function show(Request $request,$id){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1)
        {
            $userobj=admin::where('id',$id)->where('del','0')->first();
            return view('/admin.admins_show',['group'=>'sys','row'=>$userobj,'uri'=>'admins']);
        }
        else
        {
             return view('/admin',['group'=>'sys','uri'=>'info','title'=>'']);
        }

    }
    public function update(Request $request,$id=null){
        $user=Auth::guard('admin')->user();
        if($user->rtp==1&&$id!=null)
        {
            $userobj=admin::where('id',$id)->where('del','0')->first();
            $userobj->name=$request->get('name');
            $userobj->email=$request->get('email');
            if($request->get('password'))
            {
                $userobj->password=bcrypt($request->get('password'));
            }
            $this->manager->setFolderName('uploads/admin');
            $upload = $this->manager->uploadImage($request,'pic');
            if($upload['error']==null)
            {
            $userobj->pic=$upload['filename'];
            }
             if($userobj->save()){
            return redirect('/admin/admins');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
            }
        }
        else
        {
            //仅更新自己
            $user->name=$request->get('title');
            if($request->get('password'))
            {
                $user->password=bcrypt($request->get('password'));
            }
            $this->manager->setFolderName('uploads/admin');
            $upload = $this->manager->uploadImage($request,'pic');
            if($upload['error']==null)
            {
            $user->pic=$upload['filename'];
            }
            if($user->save()){
            return redirect('/admin');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
            }

        }
    }

}