<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view("Test/upload");
    }
     
    public function saveUpload(Request $r){
        $files = $r-> file('photo');
    
        if($r->photo)
        {
            foreach($files as $file){
                $file->store('uploads','custom');
            }
            // $file = $r->file("photo")->store("uploads","custom");
            return redirect("upload")->with('success', 'File has been uploaded successfully.');
            // $r->session()->flash('success', 'File has been uploaded successfully.');
            // return redirect("upload");

        }else{
            return redirect("upload")->with("error","please select a file");
        }
        
    }
}
