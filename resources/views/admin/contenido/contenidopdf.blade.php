@extends('layout.index')

@section('body')
<div id="portfolio" class="light-texture-2">
    <div class="page-header">
      <div class="container">
        <div class="sixteen columns">
          <h1 class="one"><span>AÑADIR PDF</span></h1>
        </div>
      </div>
    </div>
    <div class="container">  
      <!--INICIA TU CONTENIDO AQUI (BOOTSTRAP)-->          
       <div class="row">
           <div class="sixteen columns">
              {!! Form::open(['route' => 'admin::storeContenido', 'class' => 'form-signin', 'files' => true]) !!}
                  
                  @include('alertas.request')
                  @include('alertas.error')
                  @include('alertas.success')
                  <input type="hidden" value="pdf" id="tipo_contenido" name="tipo_contenido">  
                  <div class="form-group">
                    <label for="tituloContenido">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título del Contenido">
                  </div>   

                  <div class="form-group">
                    <label for="SubirPDF">Subir PDF</label>
                    <input type="file" id="contenido" name="contenido">
                    <p class="help-block">Subir PDF de ser necesario.</p>
                  </div>

                  <div class="form-group">
                    <label for="pdfthumb">Subir Thumbnail</label>
                    <input type="file" id="pdfthumb" name="pdfthumb">
                    <p class="help-block">Subir Thumbnail solo si sube un PDF.</p>
                  </div>

                  <div class="form-group">
                    <label for="target_usuario">Contenido para Usuario</label>
                    <select name="target_usuario" id="target_usuario" class="form-control" style="padding:12px 4px;width: 440px;">
                        <option>Seleccionar</option>
                        <option value="docente">Docentes</option>
                        <option value="padre">Padres</option>
                        <option value="alumno">Alumnos</option>                            
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="target_grado">Contenido para Grado</label>
                    <select name="target_grado" id="target_grado" class="form-control" style="padding:12px 4px;width: 440px;">
                        <option>Seleccionar</option>
                        <option value="primaria">Primaria</option>
                        <option value="secundaria">Secundaria</option>                           
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="target_seccion">Contenido para Seccion</label>
                    <select name="target_seccion" id="target_seccion" class="form-control" style="padding:12px 4px;width: 440px;">
                        <option>Seleccionar</option>
                        <option value="1">1er Grado</option>
                        <option value="2">2do Grado</option>
                        <option value="3">3er Grado</option>
                        <option value="4">4to Grado</option>
                        <option value="5">5to Grado</option>
                        <option value="6">6to Grado</option>                         
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="target_ficha">Contenido para Ficha</label>
                    <select name="target_ficha" id="target_ficha" class="form-control" style="padding:12px 4px;width: 440px;">
                        <option value="0">Seleccionar</option>   
                        <option value="1">Ficha 1</option>
                        <option value="2">Ficha 2</option>
                        <option value="3">Ficha 3</option>
                        <option value="4">Ficha 4</option>
                        <option value="5">Ficha 5</option>
                        <option value="6">Ficha 6</option>
                        <option value="7">Ficha 7</option>
                        <option value="8">Ficha 8</option>
                        <option value="9">Ficha 9</option>
                        <option value="10">Ficha 10</option>
                        <option value="11">Ficha 11</option>
                        <option value="12">Ficha 12</option>
                        <option value="13">Ficha 13</option>
                        <option value="14">Ficha 14</option>
                        <option value="15">Ficha 15</option>
                        <option value="16">Ficha 16</option>
                        <option value="17">Ficha 17</option>
                        <option value="18">Ficha 18</option>
                        <option value="19">Ficha 19</option>
                        <option value="20">Ficha 20</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="PDFTipo">Tipo PDF</label>
                    <select name="PDFTipo" id="PDFTipo" class="form-control" style="padding:12px 4px;width: 440px;">
                        <option value="0">Seleccionar</option>   
                        <option value="sesiones">Sesion de Clase</option>
                        <option value="lecturas">Lectura de Apoyo</option>                            
                    </select>
                  </div>

                  <button type="submit" class="btn btn-default">Subir</button>

                {!! Form::close() !!}
           </div>
       </div>
    </div>
</div>
@endsection