<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Avatar;
use Illuminate\Validation\Rule;
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
        $request->validate([
            'name' => 'required|alpha|max:255',
            'age' => 'required|integer|min:0|max:120',
            'email' => 'required|email|unique:users',
            'id_avatar' => 'required|integer',
        ]);
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
        $request->validate([
            'name' => 'required|alpha|max:255',
            'age' => 'required|integer|min:0|max:120',
            'email' => 'required|email|unique:users,email,'.$id,
            'id_avatar' => 'required|integer',
        ]);
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
