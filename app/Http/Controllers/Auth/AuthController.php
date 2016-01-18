<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\AuthRequest;

use Auth;
use Session;
use Redirect;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    private $redirectTo = '/';    

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'tipo_usuario' => 'required',
        ]);
    }

    protected function create(array $data)
    {
        if(array_key_exists('seccionPrimaria', $data)){
            $seccionPrimaria = "on";
        } else {
            $seccionPrimaria = "off";
        }
           
        if(array_key_exists('seccionSecundaria', $data)){
            $seccionSecundaria = "on";
        } else {
            $seccionSecundaria = "off";
        }
           
        if(array_key_exists('proyHuellas', $data)){
            $proyHuellas = "on";
        } else {
            $proyHuellas = "off";
        }
           
        if(array_key_exists('proyJMF', $data)){
            $proyJMF = "on";
        } else {
            $proyJMF = "off";
        }
        
        if(array_key_exists('tutor', $data)){
            $tutor = $data['tutor'];
        } else {
            $tutor = "";
        }
        
        if(array_key_exists('religion', $data)){
            $religion = $data['religion'];
        } else {
            $religion = "";
        }                
        
        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'colegio' => $data['colegio'],
            'grado' => $data['grado'],  
            'seccion_primaria' => $seccionPrimaria,
            'seccion_secundaria' => $seccionSecundaria,
            'docente_tutor' => $tutor,
            'docente_religion' => $religion,
            'cargo' => $data['optionsRadios'],
            'password' => bcrypt($data['password']),
            'proyecto_huellas' => $proyHuellas,
            'proyecto_jmf' => $proyJMF,
            'tipo_usuario' => $data['tipo_usuario'],            
        ]);
    }
    
    public function login(){        
        return view('auth.login');
    }

    public function postLogin(AuthRequest $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ],$request['remember']))
        {
            return Redirect::to('/');
        }
        Session::flash('message-error', 'Los datos son incorrectos');
        return Redirect::back();
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }      
}
