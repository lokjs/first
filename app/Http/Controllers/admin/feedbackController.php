<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\feedback;


use App\Services\UploadsManager;

class feedbackController extends Controller
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
    
    public function index(Request $request){
        $feedback=new feedback;
         $row=$feedback->where('del','0')->orderBy('id','desc')->paginate(10);;
        return view('admin.feedback', ['row' => $row,'title'=>'','uri'=>'feedback','group'=>'content']);
    }
 
    public function show(Request $request,$id) {
        $feedback=feedback::where('id',$id)->where('del',0)->first();
        $feedback->is_read=1;
        $feedback->save();
        return view('admin.feedback_show',['row'=>$feedback,'uri'=>'feedback','group'=>'content']);

    }
    public function search(Request $request){
        $title=$request->get('title');
        $uri = $request->path();
        $feedback=feedback::where('title','like','%'.$title.'%')->where('del',0)->paginate(10);
        return view('admin.feedback',['row'=>$feedback,'title'=>$title,'uri'=>'feedback','group'=>'content']);
    }
 
}