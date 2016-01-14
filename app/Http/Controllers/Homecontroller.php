<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Homecontroller extends Controller
{
    private $path = 'registro';

    public function createPadres(){
        return view($this->path.'.padres');
    }
    public function createDocentes(){
        return view($this->path.'.docentes');
    }
    public function createAlumnos(){
        return view($this->path.'.alumnos');
    }

    public function storePadres(Request $request){
        return $request->all();
    }
    public function storeDocentes(Request $request){
        return $request->all();
    }
    public function storeAlumnos(Request $request){
        return $request->all();
    }
}
