<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    	return view('auth.edita',compact('user'));
    }

    public function atualiza(Request $request,$id)
    {
        $user = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::find($id)->update($request->all());
        return redirect(route('index'))->with('sucesso','Usuário alterado com sucesso!');
    }

    public function apaga($id)
    {
        if (Auth::user()->id == $id) {
            return redirect(route('admin.users.lista'))->with('erro','Você não pode apagar seu prórpio usuário!');
        }else{
           $user = User::find($id)->delete();
           return redirect(route('admin.users.lista'))->with('sucesso','Usuário apagado com sucesso!');
       }
   }

}
