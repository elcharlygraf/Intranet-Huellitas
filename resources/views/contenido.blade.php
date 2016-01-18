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
      {!!Html::style('assets/stylesheets/main.css')!!}
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
                              <li><a href="#">INICIO</a></li>
                              <li><a target="_blank" href="http://www.huellas.pe">PORTAL</a></li>
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
                   <!-- Portfolio Page Starts
                   ================================================== -->
                   <div id="portfolio" class="light-texture-2">
                        <div class="page-header">
                              <div class="container">
                                    <div class="sixteen columns">
                                          <h1 class="one"><span>VER CONTENIDO</span></h1>
                                    </div>
                              </div>
                        </div>
                        <div class="container">
                              
                              <!-- Portfolio Navigation Starts -->
<!--
                  <div class="sixteen columns center">
                        <div id="options">
                              <ul id="filters" class="option-set" data-option-key="filter">
                                    <li><a href="#selected" data-option-value="*" class="selected">Todo</a></li>
                                    
                                    
                <li><a href="#pdfspr" data-option-value=".pdfpr">PDF PARA PROFESORES</a></li>                   
                                    <li><a href="#pdfspa" data-option-value=".pdfpa">PDF PARA PADRES</a></li>
                                      <li><a href="#video" data-option-value=".video">VIDEOS PRIMARIA</a></li>
                                     <li><a href="#video2" data-option-value=".video2">VIDEOS SECUNDARIA</a></li>
                                     
                              </ul>
                        </div>
                  </div>
            -->
            <!-- Portfolio Navigation Ends -->
            
            <div class="clear"></div>
            <div id="container-thumbs" class="gallery">
                @foreach($data as $rows)  
                  <!-- Project Starts -->
                  <div class="one-third column element view view-third {{ $rows->tipo_contenido }}">
                        <img src="{{ asset('uploads') }}/{{ $rows->PDFthumbnail }}" class="scale-with-grid image-shadow" alt="" />
                        <div class="title">{{ $rows->titulo }}</div>
                        <div class="description"></div>
                        <div class="mask">
                            @if($rows->tipo_contenido == 'pdf')
                              <h3>Video[youtube]</h3>
                              <a href="{{ $rows->contenido }}" rel="prettyPhoto[mixed]" title="" class="info">
                                <img src="images/portfolio/video.png" alt="" />
                              </a>
                            @else
                              <h3>Pdf para {{$rows->tipo_usuario}}s</h3>
                              <a href="{{ $rows->contenido }}" title="" target="_blank" class="info">
                              <img src="images/portfolio/photos.png" alt="" /></a> 
                            @endif  
                        </div>
                  </div>
                @endforeach    
            </div>
            <!-- Project Ends -->            

</div>
<!-- Project Ends --> 


           
</div>
</div>
<div class="container">
  <div class="row">
    <div class="sixteen columns">
      <div id="publicidad">
        <center><img src="http://lorempixel.com/600/200/" class="img-responsive" alt=""></center>
  </div>
</div>                    
</div>            
</div>
</div>
</div>
      <!-- Portfolio Page Ends
      ================================================== --> 
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