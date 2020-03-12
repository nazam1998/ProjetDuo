<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Avatar;
class AvatarController extends Controller
{
    public function index(){
        $avatars=Avatar::all();
        return view('admin.avatar.index', compact('avatars'));
    }
    public function create(){
        if(count(Avatar::all())>=5){
            return \redirect()->route('avatar');
        }
        return view('admin.avatar.add');
    }
    public function store(Request $request){
        $request->validate([
            'nom' => 'required|alpha|max:255',
            'file_image' => 'required_without:url_image|image',
            'url_image' => 'nullable|required_without:file_image|url',
        ]);
        if(empty($request->input('url_image'))){
            $filename=Storage::put('public',$request->file('file_image'));
            $image=basename($filename);
        }else{
            $url=$request->input('url_image');
            $contents = file_get_contents($url);
            $name = substr($url, strrpos($url, '/') + 1);
            $image=Storage::disk('public')->put($name, $contents);
            $image=$name;
        }
        $avatar=new Avatar();
        $avatar->nom=$request->nom;
        $avatar->image=$image;
        $avatar->save();
        return \redirect()->route('avatar');
    }
    public  function edit($id){
        $avatar=Avatar::find($id);
        return \view('admin.avatar.edit',\compact('avatar'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'nom' => 'required|alpha|max:255',
            'file_image' => 'required_without:url_image|image',
            'url_image' => 'nullable|required_without:file_image|url',
        ]);
        if(empty($request->input('url_image'))){
            $filename=Storage::put('public',$request->file('file_image'));
        $image=basename($filename);
        }else{
            $url=$request->input('url_image');
            $contents = file_get_contents($url);
            $name = substr($url, strrpos($url, '/') + 1);
            $image=Storage::disk('public')->put($name, $contents);
        }
        $avatar=Avatar::find($id);
        if(Storage::exists(public_path($avatar->image))){
            unlink($avatar->image);
        }
        $filename=Storage::disk('public')->put('',$request->file('file_image'));
        $image=basename($filename);
        $avatar->nom=$request->nom;
        $avatar->image=$image;
        $avatar->save();
        return redirect()->route('avatar');
    }
    public function destroy($id){
        $avatar=Avatar::find($id);
        if(Storage::exists(public_path($avatar->image))){
            unlink($avatar->image);
        }
        $avatar->delete();
        return redirect()->route('avatar');

    }
}
