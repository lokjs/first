<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Http\Requests;


use Carbon\Carbon;
use Dflydev\ApacheMimeTypes\PhpRepository;
use Illuminate\Support\Facades\Storage;

class UploadsManager
{

    protected $folderName = 'upload/';
    protected $allowed_extensions = ['png','JPG', 'jpg', 'gif','jpeg','jpe','gif','bmp','cmx','cod','ico','ief','jfif','pgm','pbm','pnm','ppm'];




    public function delete($filepath)
    {
        if(Storage::delete($filepath)){
            return true;
        }else{
            return false;
        }
    }

    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
    }

    public function setAllowed_extensions($allowed)
    {
        $this->allowed_extensions = $allowed;
    }

    public function uploadImage(Request $request, $uploadName)
    {
        $data = array('filename'=>null, 'error'=>null);

    	if($file = $request->file($uploadName)){
    		if($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $this->allowed_extensions)){
    			return ['error' => '只能上传文件格式为png, jpg, gif'];
    		}

    		$filename = $file->getClientOriginalName();
    		$extension = $file->getClientOriginalExtension() ?: 'png';
    		$destinationPath = $this->folderName;
    		$safeName = md5(time()).random_int(5,5).".".$extension;
    		$file->move($destinationPath, $safeName);

    		$data['filename'] = $safeName;

    	}else{
    		$data['error'] = 'Error while uploading file';
    	}
    	return $data;
    }

}