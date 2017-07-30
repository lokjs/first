<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\webconfig;


use App\Services\UploadsManager;

class webconfigController extends Controller
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
        $webconfig=new webconfig;
         $row=$webconfig->where('del','0')->first();
        return view('admin.webconfig', ['row' => $row,'title'=>'','uri'=>'webconfig','group'=>'sys']);
    }
 
    public function show(Request $request,$id) {
        $webconfig=webconfig::where('id',$id)->where('del',0)->first();
        return view('admin.webconfig_show',['row'=>$webconfig,'uri'=>'webconfig','group'=>'sys']);
    }
     public function edit(Request $request,$id) {
        $webconfig=webconfig::where('id',$id)->where('del',0)->first();
        return view('admin.webconfig_edit',['row'=>$webconfig,'uri'=>'webconfig','group'=>'sys']);
    }
    public function update(Request $request,$id){
        $webconfig=webconfig::where('id',$id)->where('del',0)->first();
        $webconfig->title=$request->get('title');
        $webconfig->bnumber=$request->get('bnumber');
        $webconfig->keywords=$request->get('keywords');
        $webconfig->description=$request->get('description');

        if($webconfig->save())
        {

             return redirect('/admin/webconfig');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }
 
}