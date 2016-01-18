<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContenidoRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'    => 'required',
            'contenido' => 'required',
            'pdfthumb'  => 'required'
        ];
    }
}
