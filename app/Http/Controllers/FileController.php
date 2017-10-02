<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use File;
use App\FileProyek;
class FileController extends Controller
{
    
    /**
     *
     * FIle Proyek
     *
     */
    public function indexProyek($id){
    	$proyek = Proyek::find($id);
    	return View('fileproyek.index',compact('proyek'));
    }
    /**
     *
     * Upload File Proyeks
     *
     */
       public function uploadFileProyek(Request $request){
    	$id = $request->get('id');
	   	$file = $request->file('file');
    	$fileName = $file->getClientOriginalName();
        $path     = public_path() . DIRECTORY_SEPARATOR . 'files';
   	  	$file ->move($path,$fileName);
   		//save into image table
   		$data =$request->all();
   		$data['nama_file'] = $fileName;
   		$gallery = Proyek::findOrfail($id);
   		$image = $gallery -> files() -> create($data);
   		return $image;
    }
     public function deleteFile($id){
        $image = FileProyek::findOrfail($id);
        $path     = public_path() . DIRECTORY_SEPARATOR . 'files' .  DIRECTORY_SEPARATOR . $image->filename;
        File::delete($path);
        $image->delete();
        return Redirect()->back();
    }
    public function downloadFile($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
}
