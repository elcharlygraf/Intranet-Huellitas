@extends('layout.index')

@section('body')
        <div id="portfolio" class="light-texture-2">
            <div class="page-header">
                  <div class="container">
                        <div class="sixteen columns">
                              <h1 class="one"><span>AÑADIR VIDEOS</span></h1>
                        </div>
                  </div>
            </div>
            <div class="container">  
            <!--INICIA TU CONTENIDO AQUI (BOOTSTRAP)-->          
               <div class="row">
                   <div class="sixteen columns">
                       {!! Form::open(['route' => 'admin::storeContenidoVideo', 'class' => 'form-signin', 'files' => true]) !!}
                          @include('alertas.request')
                          @include('alertas.error')
                          @include('alertas.success')
                          <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título del Contenido">
                          </div>                      
                          <div class="form-group">
                            <label for="contenido">Enlace del Video</label>
                            <input type="text" name="contenido" class="form-control" id="contenido" placeholder="Enlace del Video">
                          </div>                      
                          <div class="form-group">
                            <label for="target_usuario">Contenido para Usuario</label>
                            <select name="target_usuario" id="target_usuario" class="form-control" style="padding:12px 4px;width: 440px;">
                                <option value="0">Seleccionar</option>
                                <option value="Docentes">Docentes</option>
                                <option value="Padres">Padres</option>
                                <option value="Alumnos">Alumnos</option>                            
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="target_grado">Contenido para Grado</label>
                            <select name="target_grado" id="target_grado" class="form-control" style="padding:12px 4px;width: 440px;">
                                <option value="0">Seleccionar</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>                           
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="target_seccion">Contenido para Seccion</label>
                            <select name="target_seccion" id="target_seccion" class="form-control" style="padding:12px 4px;width: 440px;">
                                <option value="0">Seleccionar</option>
                                <option value="1erGrado">1er Grado</option>
                                <option value="2doGrado">2do Grado</option>
                                <option value="3erGrado">3er Grado</option>
                                <option value="4toGrado">4to Grado</option>
                                <option value="5toGrado">5to Grado</option>
                                <option value="6toGrado">6to Grado</option>                         
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="target_ficha">Contenido para Ficha</label>
                            <select name="target_ficha" id="target_ficha" class="form-control" style="padding:12px 4px;width: 440px;">
                                <option value="0">Seleccionar</option>   
                                <option value="Ficha1">Ficha 1</option>
                                <option value="Ficha2">Ficha 2</option>
                                <option value="Ficha3">Ficha 3</option>
                                <option value="Ficha4">Ficha 4</option>
                                <option value="Ficha5">Ficha 5</option>
                                <option value="Ficha6">Ficha 6</option>
                                <option value="Ficha7">Ficha 7</option>
                                <option value="Ficha8">Ficha 8</option>
                                <option value="Ficha9">Ficha 9</option>
                                <option value="Ficha10">Ficha 10</option>
                                <option value="Ficha11">Ficha 11</option>
                                <option value="Ficha12">Ficha 12</option>
                                <option value="Ficha13">Ficha 13</option>
                                <option value="Ficha14">Ficha 14</option>
                                <option value="Ficha15">Ficha 15</option>
                                <option value="Ficha16">Ficha 16</option>
                                <option value="Ficha17">Ficha 17</option>
                                <option value="Ficha18">Ficha 18</option>
                                <option value="Ficha19">Ficha 19</option>
                                <option value="Ficha20">Ficha 20</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-default">Subir</button>
                        {!! Form::close() !!}
                   </div>
               </div>
            </div>
        </div>
@endsection