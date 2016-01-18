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
                <li><a href="{{ route('admin::createContenidoPdf') }}">CREAR FICHA</a></li>
                <li><a href="{{ route('admin::createContenidoPdf') }}">CARGAR PDF</a></li>
                <li><a href="{{ route('admin::createContenidoVideo') }}">CARGAR VIDEO</a></li>
                <li><a href="{{ route('admin::createContenidoPdf') }}">CREAR ARTICULO</a></li>
                <li><a href="{{ route('acceso::logout')}}">CERRAR SESION</a></li>                
              </ul>
          </div>
        </div>
      </div>
      <!-- Navigation Ends
            ================================================== --> 
      <!-- Contact Page Starts
            ================================================== -->
    <div id="contact">
        <div class="container">  
          <!--INICIA TU CONTENIDO AQUI (BOOTSTRAP)-->          
           <div class="row">
              <div class="col-md-12">
                @section('body')
                <div id="portfolio" class="light-texture-2">
                  <div class="page-header">
                        <div class="container">
                              <div class="sixteen columns">
                                    <h1 class="one"><span>NOTICIAS</span></h1>
                              </div>
                        </div>
                  </div>

                  <div class="container">
                      <!-- Portfolio Navigation Starts -->
                      <div class="sixteen columns center">
                        <div id="options">
                          <ul id="filters" class="option-set" data-option-key="filter">
                            <li><a href="#selected" data-option-value="*" class="selected">Todo</a></li>
                            <li><a href="{{ route('admin::pdfProfesores')}}" data-option-value=".pdfpr">PDF PARA PROFESORES</a></li>                   
                            <li><a href="{{ route('admin::pdfPadres')}}" data-option-value=".pdfpa">PDF PARA PADRES</a></li>
                            <li><a href="{{ route('admin::videoPrimaria')}}" data-option-value=".video">VIDEOS PRIMARIA</a></li>
                            <li><a href="{{ route('admin::videoSecundaria')}}" data-option-value=".video2">VIDEOS SECUNDARIA</a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- Portfolio Navigation Ends -->
                      
                      <div class="clear"></div>
                      <div id="container-thumbs" class="gallery">
                          @foreach($all as $data)
                            <!-- Project Starts -->
                            <div class="one-third column element view view-third video">
                              <img src="images/portfolio/thumbs/3.jpg" class="scale-with-grid image-shadow" alt="" />
                              <div class="title">{{ $data->titulo }}</div>
                              <div class="description"></div>
                              <div class="mask">
                                    <h3>Video[youtube]</h3>
                                    <a href="https://www.youtube.com/watch?v=7tJ6uywPnQE" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/video.png" alt="" /></a> 
                              </div>
                            </div>
                            <!-- Project Ends --> 
                          @endforeach                         
                      </div>
                  </div>
                </div>
                @show
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
              © 2015 Huellas. Todos los derechos reservados. Desarrollado por 
              <a href="http://www.greenoctopusdesign.com" target="_blank">Green Octpus Design</a> 
              <a href="{{ route('acceso::logout') }}">[SALIR]</a></div>
              <!-- Copyright Ends --> 
            <!--ACABA TU CONTENIDO AQUI-->      
            </div>
          </div>
      <!-- Contact Page Ends
            ================================================== --> 
    @section('scripts')    
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
    @show        
</body>
</html>            