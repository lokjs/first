<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webconfig;
use App\banner;
use App\contact;


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
        $banner=banner::where('del',0)->Orderby('id','desc')->paginate(3);
        return view('index',['config'=>$this->config,'link'=>'index','banner'=>$banner]);
    }

    public function about(){
        $about=contact::where('del',0)->Orderby('id','desc')->first();
        return view('about',['config'=>$this->config,'link'=>'about','about'=>$about]);
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
    public function lxwm(){
        $about=contact::where('del',0)->Orderby('id','desc')->first();
        return view('lxwm',['config'=>$this->config,'link'=>'about','about'=>$about]);
    }
    public function feedback(){
        return view('feedback',['config'=>$this->config,'link'=>'about']);
    }
 
 

}