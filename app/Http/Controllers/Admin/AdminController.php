<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\ContenidoRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;

class AdminController extends Controller
{
	private $path = "admin";

    public function createContenidoPdf()
    {
        $all = DB::table('contenidos')->get();
        return view($this->path.'.contenido.contenidopdf', compact('all'));
    }

    public function createContenidoVideo()
    {
        $all = DB::table('contenidos')->get();
        return view($this->path.'.contenido.contenidovideo', compact('all'));
    }

    public function index(){
    	$all = DB::table('contenidos')->get();
    	return view($this->path.'.contenido.contenidopdf', compact('all'));
    }

    public function storeContenido(ContenidoRequest $request)
    {
      	$contenido = $request['contenido']->getClientOriginalName();
      	             $request['contenido']->move(base_path().'/public/uploads/', $contenido);	

      	$pdfthumb  = $request['pdfthumb']->getClientOriginalName();
      	             $request['pdfthumb']->move(base_path().'/public/uploads/', $pdfthumb);	

        $create = DB::table('contenidos')->insert([
        'tipo_contenido' => !empty($request['tipo_contenido']) ? $request['tipo_contenido'] : '', 
        'titulo'         => $request['titulo'], 

        'contenido'      => !empty($contenido) ? $contenido : '',
        'PDFthumbnail'   => !empty($pdfthumb)  ? $pdfthumb : '',

        'target_usuario' => $request['target_usuario'],
        'target_grado'   => $request['target_grado'],
        'target_seccion' => $request['target_seccion'],
        'target_ficha'   => $request['target_ficha'],
        
        'PDFTipo'        => !empty($request['PDFTipo']) ? $request['PDFTipo'] : '',
        'created_at'     => date('Y-m-d H:i:s')

        ]);

        if($create){
           Session::flash('message-success', 'Registro con éxito');
           return redirect()->back(); 
        }
        Session::flash('message-error', 'error');
        return redirect()->back();   
    }

    public function storeContenidoVideo(Request $request)
    {

        $create = DB::table('contenidos')->insert([
        'titulo'         => $request['titulo'], 
        'contenido'      => $request['contenido'], 

        'target_usuario' => $request['target_usuario'],
        'target_grado'   => $request['target_grado'],
        'target_seccion' => $request['target_seccion'],
        'target_ficha'   => $request['target_ficha'],
        'PDFTipo'        => 'videos',
        
        'created_at'     => date('Y-m-d H:i:s')
        ]);

        if($create){
           Session::flash('message-success', 'Registro con éxito');
           return redirect()->back(); 
        }
        Session::flash('message-error', 'error');
        return redirect()->back();   
    }

    public function pdfProfesores(){
    	$all = DB::table('contenidos')->where('tags','PDFProfesores')->get();
      return view($this->path.'.contenido.pdfprofesores', compact('all'));
    }

    public function pdfPadres(){
    	$all = DB::table('contenidos')->where('tags','PDFPadres')->get();
    	return view($this->path.'.contenido.pdfpadres', compact('all'));
    }

    public function videoPrimaria(){
    	$all = DB::table('contenidos')->where('tags','VideosPrimaria')->get();
    	return view($this->path.'.contenido.videoprimaria', compact('all'));
    }

    public function videoSecundaria(){
    	$all = DB::table('contenidos')->where('tags','VideosSecundaria')->get();
    	return view($this->path.'.contenido.videosecundaria', compact('all'));
    }
}
