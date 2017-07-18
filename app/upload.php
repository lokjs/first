<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
class upload  
{
    public function uploadpic( $filename, $filepath)
    {
        //        1.首先检查文件是否存在
        if ($request::hasFile($filename)){
            //          2.获取文件
            $file = $request::file($filename);
            //          3.其次检查图片手否合法
            if ($file->isValid()){
    //                先得到文件后缀,然后将后缀转换成小写,然后看是否在否和图片的数组内
                if(in_array( strtolower($file->extension()),['jpeg','jpg','gif','gpeg','png'])){
                    //          4.将文件取一个新的名字
                    $newName = 'img'.time().rand(100000, 999999).$file->getClientOriginalName();
                    //           5.移动文件,并修改名字
                    if($file->move($filepath,$newName)){
                        return $filepath.'/'.$newName;   //返回一个地址
                    }else{
                        return 4;
                    }
                }else{
                    return 3;
                }

            }else{
                return 2;
            }
        }else{
            return 1;
        }
    }


}


 
?>