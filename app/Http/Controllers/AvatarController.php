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
        return view('admin.avatar.add');
    }
    public function store(Request $request){
        $avatar=new Avatar();
        $filename=Storage::disk('public')->put('',$request->file('image'));
        $image=basename($filename);
        $avatar->nom=$request->nom;
        $avatar->image=$request->image;
        $avatar->save();
        return \redirect()->route('avatar');
    }
    public  function edit($id){
        $avatar=Avatart::find($id);
        return \view('admin.avatar.edit');
    }
    public function update(Request $request,$id){
        $avatar=Avatar::find($id);
        if(Storage::exists(public_path($avatar->image))){
            unlink($avatar->image);
        }
        $filename=Storage::disk('public')->put('',$request->file('image'));
        $image=basename($filename);
        $avatar->nom=$request->nom;
        $avatar->image=$image;
        $avatar->save();
        return redirect()->route('avatar');
    }
    public function destroy($id){
        $avatar=Avatar::find($id);
        $avatar->delete();
        return redirect()->route('avatar');

    }
}
