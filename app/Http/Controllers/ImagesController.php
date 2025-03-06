<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Image;


class ImagesController extends Controller
{



    // save image  url path into databasae table
   function upload(Request $req){
    $filePath = $req->file('file')->store('public');
    $pathArray= explode('/', $filePath); //convert into array
    $imgPath= $pathArray[1];
    $img=new Image();
    $img->path=$imgPath;
    if($img->save()){
        return redirect('display');
    }else{
        return "image upload failed";
    }
   }



   function displayImages(){
    $images=Image::all();
    return view('imageUpload.display', ['imgData'=> $images]);

   }
}      
