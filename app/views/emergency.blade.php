<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Smart Life</title>
   <meta name="description" content="">  
   <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/emergency.css">
   <link rel="stylesheet" href="css/vendor.css">  

   <style type="text/css" media="screen">

      #styles { 
         background: white;
         padding-top: 12rem;
         padding-bottom: 12rem;
      }
         
   </style>   

   <!-- script
   ================================================== -->
   <script src="js/modernizr.js"></script>

   <!-- favicons
   ================================================== -->
   <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

   <!-- header 
   ================================================== -->


   <!-- intro section
   ================================================== -->
   <section id="intro">

      <div class="shadow-overlay"></div>

      <div class="intro-content">
         <div class="row">

            <div class="col-25">

               <div class="jumbotron">
               <div class="container text-center">
                  <h1>Emergency</h1>
                  {{ Form::select('Location', array('Dhaka' => 'Dhaka', 'Chittagong' => 'Chittagong', 'Sylhet' => 'Sylhet', 'Rajshahi' => 'Rajshahi', 'Khulna' => 'Khulna', 'Barisal' => 'Barisal')) }}
                     
               </div>
               </div>

  
               <div class="container-fluid bg-5 text-center">
                 <div class="row">
                   <div class="col-sm-5">
                     <a class="button stroke" href="bdpolice" title="">BD Police</a>
                   </div>
                   <div class="col-sm-5">
                     <a class="button stroke" href="rab" title="">RAB</a>
                   </div>
                   <div class="col-sm-5">
                     <a class="button stroke" href="ambulance" title="">Ambulance</a>
                   </div>
                   <div class="col-sm-5">
                     <a class="button stroke" href="fire" title="">Fire Service</a>
                   </div>
                   
                 </div>
               </div>

            </div>  

            
         </div>               
      </div>      

   </section> <!-- /intro -->


   


   <!-- footer
   ================================================== -->
   <footer>

      <div class="footer-bottom">

         <div class="row">

            <div class="col-twelve">
               <div class="copyright">
                  <span>Contact Us</span> 
                  <span><a href="http://www.styleshout.com/">Admin</a></span>                
               </div>

                      
            </div>

         </div> <!-- /footer-bottom -->      

      </div>

   </footer>  

   <div id="preloader"> 
      <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>