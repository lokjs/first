<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\UploadsManager;

class ckeditController extends Controller
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
    
    public function upload(Request $request){
		$this->manager->setFolderName('uploads/pic');
        $upload = $this->manager->uploadImage($request,'upload');
        if($upload['error']==NULL)
        {
        	echo '<script>parent.ckeditorUpload("'.$upload['filename'].'");</script>';
        }
        else
        {
        	echo "上传失败";
        }
    }
  
 
}