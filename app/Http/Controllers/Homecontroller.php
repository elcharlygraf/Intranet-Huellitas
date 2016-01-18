<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AlumnoRequest;
use App\Http\Requests\DocenteRequest;
use App\Http\Requests\PadreRequest;

use App\Http\Controllers\Controller;
use DB;
use Session;
use Route;

class Homecontroller extends Controller
{
    private $path = 'registro';

    public function welcome(){
        return view('welcome');
    }

    public function selectgrado(){
        return view('selectgrado');
    }

    public function selectficha(){
        return view('selectficha');
    }

    public function selectcontenido(){
        return view('fichas');
    }

    public function show(){
        $nivel = Route::getCurrentRoute()->getParameter('nivel');
        $grado = Route::getCurrentRoute()->getParameter('grado');
        $ficha = Route::getCurrentRoute()->getParameter('ficha');
        $tipo  = Route::getCurrentRoute()->getParameter('tipo');


        if($nivel && $grado && $ficha && $tipo){
            $data = DB::table('contenidos')->get();
            return view('contenido', compact('data'));

        }
    }

    public function createPadres(){
        return view($this->path.'.padres');
    }
    public function createDocentes(){
        return view($this->path.'.docentes');
    }
    public function createAlumnos(){
        return view($this->path.'.alumnos');
    }

    public function storePadres(PadreRequest $request){
        $create = DB::table('users')->insert(
            [
            'nombres'           => $request['nombres'], 
            'apellidos'         => $request['apellidos'],
            'telefono'          => $request['telefono'],
            'email'             => $request['email'],
            'colegio'           => $request['colegio'],
            'grado'             => implode(',',$request['grado']),
            'docente_tutor'     => $request['tutor'],
            'docente_religion'  => $request['religion'],
            'password'          => bcrypt($request['password']),
            'proyecto'          => implode(',',$request['proyecto']),
            'tipo_usuario'      => 'padre',
            'created_at'        => date('Y-m-d H:i:s')
            ]
        );

        if($create){
           Session::flash('message-success', 'Registro con éxito');
           return redirect()->back(); 
        }
        Session::flash('message-error', 'error');
        return redirect()->back();
    }

    public function storeDocentes(DocenteRequest $request){
        $create = DB::table('users')->insert(
            [
            'nombres'           => $request['nombres'], 
            'apellidos'         => $request['apellidos'],
            'telefono'          => $request['telefono'],
            'email'             => $request['email'],
            'colegio'           => $request['colegio'],
            'grado'             => implode(',',$request['grado']),
            'cargo'             => implode(',',$request['cargo']),
            'qtycargo'          => count($request['cargo']) > 1 ? 'many' : 'only',
            'password'          => bcrypt($request['password']),
            'proyecto'          => implode(',',$request['proyecto']),
            'tipo_usuario'      => 'docente',
            'created_at'        => date('Y-m-d H:i:s')
            ]
        );
        
        if($create){
           Session::flash('message-success', 'Registro con éxito');
           return redirect()->back(); 
        }
        Session::flash('message-error', 'error');
        return redirect()->back();
    }

    public function storeAlumnos(AlumnoRequest $request){
        $create = DB::table('users')->insert(
            [
            'nombres'           => $request['nombres'], 
            'apellidos'         => $request['apellidos'],
            'email'             => $request['email'],
            'colegio'           => $request['colegio'],
            'grado'             => implode(',',$request['grado']),
            'docente_tutor'     => $request['tutor'],
            'docente_religion'  => $request['religion'],
            'password'          => bcrypt($request['password']),
            'proyecto'          => implode(',',$request['proyecto']),
            'tipo_usuario'      => 'alumno',
            'created_at'        => date('Y-m-d H:i:s')
            ]
        );
        
        if($create){
           Session::flash('message-success', 'Registro con éxito');
           return redirect()->back(); 
        }
        Session::flash('message-error', 'error');
        return redirect()->back();
    }

    public function fichasPrimaria(){
        return view('fichas');
    }

    public function fichasSecundaria(){
        return view('fichas');
    }
}