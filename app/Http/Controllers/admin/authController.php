<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class authController extends Controller
{

	   use AuthenticatesUsers;
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
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
    	return View('admin.index');
    }
    public function getlogin(){
    	return View('admin.login');
    }
 


}