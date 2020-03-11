<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Avatar;
class UserController extends Controller
{
    public function index(){
        $avatars=Avatar::all();
        $users=User::paginate(5);
        return view('admin.user.index', compact('users','avatars'));
    }
    public function create(){
        $avatars=Avatar::all();
        return view('admin.user.add',compact('avatars'));
    }
    public function store(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->age=$request->age;
        $user->email=$request->email;
        $user->id_avatar=$request->id_avatar;
        $user->save();
        return \redirect()->route('user');
    }
    public  function edit($id){
        $user=User::find($id);
        $avatars=Avatar::all();
        return \view('admin.user.edit',\compact('user','avatars'));
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->name;
        $user->age=$request->age;
        $user->email=$request->email;
        $user->id_avatar=$request->id_avatar;
        $user->save();
        return redirect()->route('user');
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user');

    }
}
