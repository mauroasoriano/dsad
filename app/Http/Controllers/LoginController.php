<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Traits\BlockUserTrait;
use App\Traits\LoggedUserTrait;

class LoginController extends Controller
{
	use BlockUserTrait;
	use LoggedUserTrait;
	/*
	| 0) bloqueo de intentos +1. 3 es el máximo.
	| 1) validación de formulario
	| 2) verifico que usuario y contraseña sean correctas
	| 3) asigno los permisos requeridos del usuario autentificado
	| 4) reinicia la página una vez completo todos los pasos
	*/
    public function login(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	#0
    	if ($this->block_by_attempts('login')) {
    		return response()->json(['Fuiste bloqueado', 'has hecho demasiados intentos, reintentelo más tarde.'],403);
    	}
    	#1
    	$validator = Validator::make($request->all(), [
    		'user' => 'required|min:4|max:20',
    		'password' => 'required|min:4|max:20',
    	]);
    	if ($validator->fails()) {
    		return ['error' => 'El formulario no es correcto, si el problema persiste, reinicie la página'];
    	}
    	#2
    	if ($user_database = User::select('id', 'password')->where('user', $request->user)->first()) {
	    	if (password_verify($request->password, $user_database->password)) {    		
	    	}else{
	    		return ['error' => 'Usuario o contraseña incorrectos'];
	    	}
    	}else{
    		return ['error' => 'Usuario o contraseña incorrectos'];
    	}
    	#3
    	session_start();
    	$_SESSION['id'] = $user_database->id;
    	return ['success' => true];
    }
}
