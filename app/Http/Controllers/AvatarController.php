<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
class AvatarController extends Controller
{
    public function index(){
        $avatars=Avatar::all();
        return view('admin.avatar.index',\compact('avatars'));
    }
    public function create(){
        return view('admin.avatar.add');
    }
}
