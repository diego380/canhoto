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

    public function edita($id)
    {
    	$user = User::find($id);
    	return view('admin.user.edita',compact('user'));
    }

    public function atualiza(Request $request,$id)
    {
    	$user = User::find($id)->update($request->all());
    	return redirect(route('admin.users.lista'))->with('sucesso','Usuário alterado com sucesso!');
    }

    public function apaga($id)
    {
    	$user = User::find($id)->delete();
    	return redirect(route('admin.users.lista'))->with('sucesso','Usuário apagado com sucesso!');
    }
}
