<?php 

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Member;

class FileUploadService
{


    public function uploadFile($request,$member){


       
        $image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('members_img',$imgname);
        $member->profile=$imgname; }
    }
}
?>