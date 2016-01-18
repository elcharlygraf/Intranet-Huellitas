
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
    <link href="/assets/css/login.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
    <div class = "container">
        <div class="wrapper">
          <div class="bs-example" data-example-id="basic-forms">
          {!! Form::open(['route' => 'acceso::postLogin', 'class' => 'form-signin']) !!}     
            <h3 class="form-signin-heading">Intranet Huellas - Iniciar Sesión</h3>
            @include('alertas.error')
            @include('alertas.request')
              <hr class="colorgraph"><br>
              
              <div class="form-group">
              {!! Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Correo Electronico']); !!}
              </div>
              
              <div class="form-group">
              {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******']); !!} 
              </div>

              <button id="btnLogin" class="btn btn-lg btn-primary btn-block"  name="Submit" value="Iniciar Sesión" type="Submit">Login</button>

              <div class="bs-callout bs-callout-warning" id="callout-formgroup-inputgroup">
                <div class="form-group"> 
                  <ul class="register-opt">
                    <li>Si usted es docente y desea registrarse, <a href="{{ route('register::docentes')}}">clic aqui</a>.</li>
                    <li>Si usted es padre de familia y desea registrarse, <a href="{{ route('register::padres')}}">clic aqui</a>.</li>
                    <li>Si usted es alumno y desea registrarse, <a href="{{ route('register::alumnos')}}">clic aqui</a>.</li>
                  </ul>
                </div>
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