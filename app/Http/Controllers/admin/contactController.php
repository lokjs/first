<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;


use App\Services\UploadsManager;

class contactController extends Controller
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
        $contact=new contact;
        $uri = $request->path();
         $row=$contact->where('del','0')->get();
        return view('admin.contact', ['row' => $row,'uri'=>'contact','group'=>'content']);
    }
    public function edit($id){
        $row=contact::where('id',$id)->where('del',0)->first();
        return view('admin/contact_edit',['row'=>$row,'uri'=>'contact','group'=>'content']);
    }
     public function update(Request $request,$id)
    {

        $this->manager->setFolderName('uploads/contact');
        $upload = $this->manager->uploadImage($request,'pic');
        $contact=contact::where('id',$id)->where('del',0)->first();
        $contact->title=$request->get('title');
        $contact->content=$request->get('content');
        $contact->x=$request->get('x');
        $contact->y=$request->get('y');
        if($upload['error']==null)
        {
        $contact->pic=$upload['filename'];
        }
        $contact->update_author=Auth::guard('admin')->id();
        if($contact->save()){
            return redirect('/admin/contact');
            }else{
                return redirect()->back()->withInput()->withErrors('保存失败！'); 
        }
    }
 
    public function show(Request $request,$id) {
        $contact=contact::where('id',$id)->where('del',0)->first();
        return view('admin.contact_show',['row'=>$contact,'uri'=>'contact','group'=>'content']);

    }
 
 
}