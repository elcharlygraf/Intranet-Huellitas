<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Huellas - Intranet</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">    

    <!-- Custom styles for this template -->
    <link href="/assets/css/register.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                {!! Form::open(['route' => 'register::postPadres', 'class' => 'form-signin']) !!}     
                    <h2>Registro de Usuario <small>Intranet Huellas - Padres.</small></h2>
                    <hr class="colorgraph">
                    @include('alertas.request')
                    @include('alertas.error')
                    @include('alertas.success')
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="nombres" id="nombres" class="form-control input-lg" placeholder="Nombres" tabindex="1" autofocus required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="tipo_usuario" value="padre">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="apellidos" id="apellidos" class="form-control input-lg" placeholder="Apellidos" tabindex="2" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="3">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">                                
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electronico" tabindex="4" required>
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <input type="text" name="colegio" id="colegio" class="form-control input-lg" placeholder="Colegio" tabindex="5" required>
                    </div>                    
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                            <h2><small>Grado y Sección</small></h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado1" value="1ero Primaria">
                                    1ero Primaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado2" value="2do Primaria">
                                    2do Primaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado3" value="3ero Primaria">
                                    3ero Primaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado4" value="4to Primaria">
                                    4to Primaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado5" value="5to Primaria">
                                    5to Primaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado6" value="6to Primaria">
                                    6to Primaria
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 checkboxes">
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado7" value="1ero Secundaria">
                                    1ero Secundaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado8" value="2do Secundaria">
                                    2do Secundaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado9" value="3ero Secundaria">
                                    3ero Secundaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado10" value="4to Secundaria">
                                    4to Secundaria
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="grado[]" id="grado11" value="5to Secundaria">
                                    5to Secundaria
                                </label>
                            </div>                            
                        </div>                   
                    </div>
                    <div class="form-group">
                        <input type="text" name="tutor" id="tutor" class="form-control input-lg" placeholder="Nombre Docente Tutor" tabindex="9">
                    </div>
                    <div class="form-group">
                        <input type="text" name="religion" id="religion" class="form-control input-lg" placeholder="Nombre Docente Religión" tabindex="10">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="11">
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-2 checkboxes">
                           <div class="form-group lbl">
                               <label>Proyecto </label>
                           </div>
                       </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 checkboxes">                            
                            <label class="checkbox-inline">
                                <input type="checkbox" value="proyHuellas" id="proyHuellas" name="proyecto[]" tabindex="12"> Huellas
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="proyJMF" id="proyJMF" name="proyecto[]" tabindex="13"> Jesus Me Fascina
                            </label>
                        </div>                    
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="14"></div>
                        <div class="col-xs-12 col-md-6"><a id="btnLogin" href="{{ route('acceso::login')}}" class="btn btn-success btn-block btn-lg">Iniciar Sesión</a></div>
                    </div>
                {!! Form::close() !!}   
            </div>
        </div>
    </div>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>      
</body>
</html>