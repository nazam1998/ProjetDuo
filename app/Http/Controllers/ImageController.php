<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Image;
use App\Categorie;

class ImageController extends Controller
{
    //
    public function index(){
        $images=Image::all();
        return view("admin/image/index", compact("images"));
    }

    public function create(){
        $categories=Categorie::all();
        return view ("admin/image/add", compact("categories"));
    }

    public function show($id){

        $image=Image::find($id);
        return Storage::disk('public')->download($image->image);
    
    }
    
    public function store(Request $request){
        // $request->validate([
        //     'nom' => 'required|alpha|max:255',
        //     'image' => 'required|image',
        // ]);
        $image = new Image();
        $filename=Storage::put('public',$request->file('image'));
        $imageName=basename($filename);
        $image->image=$imageName;
        $image->nom=$request->nom;
        $image->id_categorie=$request->id_categorie;
        $image->save();
        return \redirect()->route("image");
    }

        public function edit($id){
            $image=Image::find($id);
            $categories=Categorie::all();
            return \view("admin.image.edit", \compact("image", "categories"));
        }
        public function update(Request $request, $id){
            $request->validate([
                'nom' => 'required|max:255',
                'id_categorie' => 'required|integer',
                "image"=> "required|image"
            ]);

            $image = Image::find($id);
            $filename=Storage::put('public',$request->file('image'));
            $imageName=basename($filename);
            $image->image=$imageName;
            $image->nom=$request->nom;
            $image->id_categorie=$request->id_categorie;
            $image->save();
            return \redirect()->route("image");
}
        public function destroy($id){
            $image=Image::find($id);
            $image->delete();
            return redirect()->route("image");
      }
}