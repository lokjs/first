<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\admin;
class adminController extends Controller
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
    protected function redirectTo()
	{
    	return '/admin/login';
	}
    public function index(){
    	if (Auth::guard('admin')->check())
		{
		    return View('admin/index');
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
        if (Auth::guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password'] ])) {
            //更新ip
            $ip=$request->ip();
            $id = Auth::guard('admin')->id();
            Admin::where('id',$id)->update(["ip"=>$ip]);
        }
      return redirect('admin');      
    }

}