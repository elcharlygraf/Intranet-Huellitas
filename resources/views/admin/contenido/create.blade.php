<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>      
      <meta charset="utf-8" />
      <title>Huellas | Orientación y Tutoría</title>
      <meta name="description" content="huellas, orientacion, tutoria, salesiano, grupo, religion" />
      <meta name="author" content="www.greenoctopusdesign.com" />
      
      <!-- Mobile Specific Metas
            ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      
      <!-- All CSS Files
            ================================================== -->
      {!!Html::style('assets/stylesheets/All-Stylesheets.css')!!}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   
         
      <!-- Favicons
            ================================================== -->
      <link rel="shortcut icon" href="/images/favicon.png" />
      <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png" />
      
</head>
<body>
                  
      <!-- Navigation Starts
            ================================================== -->
      <div id="navigation" class="center">
            <div class="container">
                  <div class="sixteen columns">
                        <ul>
                              <li><a href="/">INICIO</a></li>
                              <li><a href="/#about">¿QUÉ ES HUELLAS?</a></li>
                              <li><a href="/#team">PROFESORES</a></li>
                              <li><a href="/#portfolio">NOTICIAS</a></li>
                              <li><a href="/#contact">CONTACTO</a></li>
                              <li><a href="http://intranet.huellas.pe/">INTRANET</a></li>
                              @if(Auth::check())
                              	@if(Auth::user()->tipo_usuario == 'admin')
                              	<li class="current"><a href="">ADMIN</a></li>
                              	@endif
                              @endif
                        </ul>
                  </div>
            </div>
      </div>
      <!-- Navigation Ends
            ================================================== --> 
    <!-- Contact Page Starts
            ================================================== -->
    <div id="contact">
  <div class="page-header">

    <div class="container">

      <div class="pull-right">
        <a href="{{ route('admin::index') }}"><button class="btn btn-default" type="submit">Ver contenidos</button></a>
      </div>
      
      <div class="sixteen columns">
        <h1 class="one"><span>AÑADIR CONTENIDO</span></h1>
      </div>

    </div>
  </div>
        
        <div class="container">  
          <!--INICIA TU CONTENIDO AQUI (BOOTSTRAP)-->          
           <div class="row">
               <div class="col-md-12">
                   {!! Form::open(['route' => 'admin::storeContenido', 'class' => 'form-signin', 'files' => true]) !!}
                   	  
                   	  <div class="form-control">
                   	  	@include('alertas.request')
        				        @include('alertas.error')
        				        @include('alertas.success')
				      </div>

                      <div class="form-group">
                        <label for="tituloContenido">Título</label>
                        <input type="text" name="titulo" class="form-control" id="tituloContenido" placeholder="Título del Contenido">
                      </div>

                      <div class="form-group">
                        <label for="URLYoutube">URL Video</label>
                        <input type="text" name="video" class="form-control" id="URLYoutube" placeholder="Link del Video">
                      </div>

                      <div class="form-group">
                        <label for="SubirPDF">Subir PDF (Si lo requiere)</label>
                        <input type="file" id="SubirPDF" name="pdf">
                        <p class="help-block">Subir PDF de ser necesario.</p>
                      </div>

                      <div class="form-group">
                        <label for="thumbnailPDF">Subir Thumbnail</label>
                        <input type="file" id="thumbnail" name="thumbnail">
                        <p class="help-block">Subir Thumbnail solo si sube un PDF.</p>
                      </div>

                      <div class="form-group">
                        <label for="publicoContenido">TAG</label>
                        <select name="tag" id="publicoContenido" class="form-control" style="padding:12px 4px;width: 440px;">
                            <option value="0">Seleccionar</option>
                            <option value="PDFProfesores">PDF para Profesores</option>
                            <option value="PDFPadres">PDF para Padres</option>
                            <option value="VideosPrimaria">Videos Primaria</option>
                            <option value="VideosSecundaria">Videos Secundaria</option>
                        </select>
                      </div>       

                      <button type="submit" class="btn btn-default">Subir</button>
                    {!! Form::close() !!}
               </div>
           </div>
            <!-- Say Hello Starts -->
                        <div class="sixteen columns center say-hello medium-t-b-padding">                             
                              <!-- Social Icons Starts -->
                              <ul class="ch-grid">
                                    <li>
                                          <div class="ch-item">
                                                <div class="ch-info">
                                                      <div class="ch-info-front ch-img-1"></div>
                                                      <div class="ch-info-back"> <img src="/images/social-icons/facebook_dark.png" alt="" /> </div>
                                                </div>
                                          </div>
                                    </li>
                                   
                                    <li>
                                          <div class="ch-item">
                                                <div class="ch-info">
                                                      <div class="ch-info-front ch-img-3"></div>
                                                      <div class="ch-info-back"> <img src="/images/social-icons/twitter02_dark.png" alt="" /> </div>
                                                </div>
                                          </div>
                                    </li>
                              </ul>
                              <!-- Social Icons Ends -->
                        </div>
                        <!-- Say Hello Ends -->
                        
                        <div class="clear"></div>
                        
                        <!-- Copyright Start -->
                        <div class="copyright center">
                        © 2015 Huellas. Todos los derechos reservados. Desarrollado por <a href="http://www.greenoctopusdesign.com" target="_blank">Green Octpus Design</a> </div>
                        <!-- Copyright Ends --> 
                  <!--ACABA TU CONTENIDO AQUI-->      
        </div>
      </div>
      <!-- Contact Page Ends
            ================================================== --> 
      
      <!-- Included JS Files Starts
            ================================================== --> 
      
                  <!-- jQuery.js 
                        ================================================== --> 
                  <script src="/js/jquery.js"></script> 
                  
                  <!-- Social Icons Hover
                        ================================================== -->                  
                  <script type="text/javascript" src="/js/social-icons-hover/social-icons-modernizr.custom.js"></script> 
                  
                  <!-- AJAX Contact Form
                        ================================================== -->                   
                  <script type="text/javascript" src="/js/contact/contact-form.js"></script>                 
                                   
                  <!-- Portfolio 
                        ================================================== --> 
                  <script src="/js/isotope/jquery.isotope.min.js"></script> 
                  <script src="/js/isotope/Isotope-Filtering.js"></script> 
                  
                  <!-- PrettyPhoto for Portfolio
                        ================================================== -->
                  <script src="/js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
                  <script src="/js/prettyphoto/custom.js" type="text/javascript" charset="utf-8"></script> 
                  
                  <!-- Supersized Slider
                        ================================================== -->                  
                  <script type="text/javascript" src="/js/supersized/jquery.easing.min.js"></script>                   
                  
                  <!-- Main Top Navigation
                        ================================================== --> 
                  <script type="text/javascript" src="/js/navigation/jquery.sticky.js"></script>
                  <script>
                        $(document).ready(function(){
                              $("#navigation").sticky({topSpacing:0});
                        });
                  </script>                    
                  <script src="/js/navigation/jquery.nav.js"></script> 
                  <script src="/js/navigation/custom.js"></script> 
                  
                  <!-- Combo Box Menu [Select Menu]
                        ================================================== --> 
                  <script src="/js/navigation/select.js" type="text/javascript"></script> 
                  
                  <!-- Twitter
                        ================================================== --> 
                  <script type="text/javascript" src="/js/twitter/jquery.twitter.js"></script> 
                  <script type="text/javascript">
                        $(document).ready(function() {
                              $("#twitter").getTwitter({
                                    userName: "envato",
                                    numTweets: 1,								
                                    slideIn: true,
                                    slideDuration: 200,
                                    showHeading: true,								
                                    showProfileLink: true,
                                    showTimestamp: true,
                                    includeRetweets: false,
                                    excludeReplies: true
                              });
                        });
                  </script> 
      
      <!-- Included JS Files Ends
            ================================================== -->

</body>
</html>            