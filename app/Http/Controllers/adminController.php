<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
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
    	// print_r($data);
        if (Auth::guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password'] ])) {
            return redirect('admin');
            // echo "11";
        }
		else
		{
			echo "error";
		}	
    }
   public function update(Request $request)
    {
        // $request->user() 返回认证过的用户的实例...
        $data=$request->all();
        
    }

}