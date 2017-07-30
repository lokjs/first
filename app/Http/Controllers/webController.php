<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webconfig;


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
        return view('index',['config'=>$this->config,'link'=>'index']);
    }

    public function about(){
        return view('about',['config'=>$this->config,'link'=>'about']);
    }
    public function server(){
        return view('server',['config'=>$this->config,'link'=>'server']);
    }
    public function object(){
        return view('object',['config'=>$this->config,'link'=>'object']);
    }
    public function news(){
        return view('news',['config'=>$this->config,'link'=>'news']);
    }
 

}