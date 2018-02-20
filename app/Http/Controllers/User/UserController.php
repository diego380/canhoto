<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function lista()
    {
    	$users = User::all();
    	return view('admin.user.lista',['users'=>$users]);
    }
}
