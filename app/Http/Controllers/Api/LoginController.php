<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//voy a usar el modelo user para autentificarme
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);
        //login true
        // funcion que valida si esta correcto el email y contraseña 
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                // darle un token en texto al usuario
                'token'=>$request->user()->createToken($request->name)->plainTextToken,
                'message'=>'success'

            ]);

        }
        return response()->json([

            'message'=>'no esta autorizado'

        ],401);

        //login false

    }
    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email'=>'required|email',
            'password'=>'required',
            // para ver desde donde se esta conectando el usuario
            'name'=>'required'


        ]);

    }
}
