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
      <link rel="shortcut icon" href="/assets/images/favicon.png" />
      <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png" />
      
</head>
<body>
                  
      <!-- Navigation Starts
            ================================================== -->
      <div id="navigation" class="center">
            <div class="container">
                  <div class="sixteen columns">
                        <ul>
                              <li><a href="#">INICIO</a></li>
                              <li><a href="#">PRIMARIA</a></li>
                              <li><a href="#">SECUNDARIA</a></li>
                              <li><a href="#">PORTAL</a></li>
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
                              <h1 class="one"><span>Seleccione un Grado</span></h1>
                        </div>
                  </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="eight columns">
                        <div class="image_container">
                            <center><img src="/assets/images/primaria.png" alt="" class="img-responsive"><br><h5>PRIMARIA</h5></center>
                        </div>
                        <div class="grados_container">
                            <a href="{{ route('users::selectficha',['primaria', 1]) }} "><button class="button-primary">1er Grado</button></a>
                            <a href="{{ route('users::selectficha',['primaria', 2]) }} "><button class="button-primary">2do Grado</button></a>
                            <a href="{{ route('users::selectficha',['primaria', 3]) }} "><button class="button-primary">3er Grado</button></a>
                            <a href="{{ route('users::selectficha',['primaria', 4]) }} "><button class="button-primary">4to Grado</button></a>
                            <a href="{{ route('users::selectficha',['primaria', 5]) }} "><button class="button-primary">5to Grado</button></a>
                            <a href="{{ route('users::selectficha',['primaria', 6]) }} "><button class="button-primary">6to Grado</button></a>
                        </div>                        
                    </div>                    
                    <div class="eight columns">
                        <div class="image_container">
                            <center><img src="/assets/images/secundaria.png" alt="" class="img-responsive"><br><h5>SECUNDARIA</h5></center>
                        </div>
                        <div class="grados_container">
                            <a href="{{ route('users::selectficha',['secundaria', 1]) }} "><button class="button-primary">1er Grado</button></a>
                            <a href="{{ route('users::selectficha',['secundaria', 2]) }} "><button class="button-primary">2do Grado</button></a>
                            <a href="{{ route('users::selectficha',['secundaria', 3]) }} "><button class="button-primary">3er Grado</button></a>
                            <a href="{{ route('users::selectficha',['secundaria', 4]) }} "><button class="button-primary">4to Grado</button></a>
                            <a href="{{ route('users::selectficha',['secundaria', 5]) }} "><button class="button-primary">5to Grado</button></a>
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
                                                      <div class="ch-info-back"> <img src="/assets/images/social-icons/facebook_dark.png" alt="" /> </div>
                                                </div>
                                          </div>
                                    </li>
                                   
                                    <li>
                                          <div class="ch-item">
                                                <div class="ch-info">
                                                      <div class="ch-info-front ch-img-3"></div>
                                                      <div class="ch-info-back"> <img src="/assets/images/social-icons/twitter02_dark.png" alt="" /> </div>
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
                  <script src="/assets/js/jquery.js"></script> 
                  
                  <!-- Social Icons Hover
                        ================================================== -->                  
                  <script type="text/javascript" src="/assets/js/social-icons-hover/social-icons-modernizr.custom.js"></script> 
                  
                  <!-- AJAX Contact Form
                        ================================================== -->                   
                  <script type="text/javascript" src="/assets/js/contact/contact-form.js"></script>                 
                                   
                  <!-- Portfolio 
                        ================================================== --> 
                  <script src="/assets/js/isotope/jquery.isotope.min.js"></script> 
                  <script src="/assets/js/isotope/Isotope-Filtering.js"></script> 
                  
                  <!-- PrettyPhoto for Portfolio
                        ================================================== -->
                  <script src="/assets/js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
                  <script src="/assets/js/prettyphoto/custom.js" type="text/javascript" charset="utf-8"></script> 
                  
                  <!-- Supersized Slider
                        ================================================== -->                  
                  <script type="text/javascript" src="/assets/js/supersized/jquery.easing.min.js"></script>                   
                  
                  <!-- Main Top Navigation
                        ================================================== --> 
                  <script type="text/javascript" src="/assets/js/navigation/jquery.sticky.js"></script>
                  <script>
                        $(document).ready(function(){
                              $("#navigation").sticky({topSpacing:0});
                        });
                  </script>                    
                  <script src="/assets/js/navigation/jquery.nav.js"></script> 
                  <script src="/assets/js/navigation/custom.js"></script> 
                  
                  <!-- Combo Box Menu [Select Menu]
                        ================================================== --> 
                  <script src="/assets/js/navigation/select.js" type="text/javascript"></script> 
                  
                  <!-- Twitter
                        ================================================== --> 
                  <script type="text/javascript" src="/assets/js/twitter/jquery.twitter.js"></script> 
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