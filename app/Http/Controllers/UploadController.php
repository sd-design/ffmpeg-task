<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\File;

class UploadController extends Controller
{
    public function createForm(){
        return view('file-upload');
    }

    public function upload_files(Request $request){

//        var_dump($request->input());exit;
        $nums = $request->input();
        $i = 1;
        foreach($request->file() as $tmp){
            $fileModel = new File;
            if($tmp) {
                $fileName = 'frame_'.$nums['num_'.$i].'.jpg';
                $filePath = $tmp->storeAs('uploads', $fileName, 'public');

                $fileModel->name = $fileName;
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                $i++;
            }

        }
        return back()
            ->with('success','Files has been uploaded.')
            ->with('file', $fileName);

    }
}
