<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Hashing\Hasher;
use Auth;
class UsuarioController extends Controller
{
        //Redireccionar a la ruta usuario.registro
      public function getRegistro()
      {
            return view('usuario.registro');
      }
      //Recepcion de datos formulario
      public function postRegistro( Request $request)
      {
            $this->validate($request, [
              'email'=> 'email|required|unique:users',
              'password'=> 'required|min:4'
            ]);
            $user = new User([
              'email'=> $request -> input('email'),
              'password'=> bcrypt($request -> input('password'))
            ]);
            $user->save();
            Auth::login($user);

            return redirect()->route('usuario.perfil');
      }

      public function getInicio()
      {
            return view('usuario.inicio');
      }
      //Metodo que valida la autenticacion del usuario
      public function postInicio(Request $request)
      {
          $this->validate($request, [
            'email'=> 'email|required',
            'password'=> 'required|min:4'
          ]);

            if(Auth::attempt(['email'=> $request->input('email'),'password'=> $request->input('password')])){
                #Session::put('frontSession',$input_data['email']);
                return redirect()->route('usuario.perfil');
            }
            return redirect()->back();
      }

      //Metodo que redirecciona al perfil del usuario
      public function getPerfil()
      {
            return view('usuario.perfil');
      }


      public function getSalir()
      {
        Auth::logout();
        return redirect()->back();
      }
}
