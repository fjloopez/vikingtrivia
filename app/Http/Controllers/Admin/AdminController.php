<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function createAdmin(Request $request){
		if ($request->isMethod('post'))
		{
			$messages = [
				'name.required' => 'El nombre es requerido',
				'name.max' => 'El nombre no puede tener más de 30 caracteres',
				'name.regex' => 'Sólo se aceptan letras',
				'email.required' => 'El email es requerido',
				'email.max' => 'El mail no puede tener más de 50 caracteres',
				'email.unique' => 'El email ya existe',
				'password.required' => 'El campo es requerido',
				'password.min' => 'El password debe tener al menos 3 caracteres',
				'password.confirmed' => 'Las contraseñas no coinciden'
			];

			$validator = Validator::make($request->all(), $messages);

			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator);
			}
			else{
				$user = new User;
				$user->name = $request->name;
				$user->email = $request->email;
				$user->password = bcrypt($request->password);
				$user->remember_token = str_random(100);
				$user->confirm_token = str_random(100);

				//Activar el administrador sin necesidad de enviar correo electrónico
				$user->active = 1;
				//El valor 1 en la columna determina si el usuario es o no administrador
				$user->user = 1;

				if ($user->save()) {
					return redirect()->back()with('message', 'Has sido logueado correctamente');
				}else
				{
					return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
				}


			}

		}

		return view('admin.createAdmin');
    }

     public function createQuestion()
    {
    	return view('admin.questions');
    }
}
