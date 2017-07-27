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
   <link rel="stylesheet" href="css/main.css">
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
         <div class="row"><br><br>

                <div>
                    <h1 class="section-heading">Ratings of Restaurants</h1>
                </div>
            <div class="col-25">

               <div class="jumbotron">
               <div class="container text-center">
               <br>
               {{ Form::select('Location', array('Dhaka' => 'Dhaka', 'Chittagong' => 'Chittagong', 'Sylhet' => 'Sylhet', 'Rajshahi' => 'Rajshahi', 'Khulna' => 'Khulna', 'Barisal' => 'Barisal')) }}
               </div>
               </div>
  
               <div class="container-fluid bg-5 text-center">
                 <div class="row">
                   <div class="col-sm-5">
                    <div id="barchart_values_pizza_hut" style="width: 900px; height: 300px;"></div>
                    <div id="barchart_values_handi" style="width: 900px; height: 300px;"></div>
                    <div id="barchart_values_KFC" style="width: 900px; height: 300px;"></div>
                    <div id="barchart_values_CP" style="width: 900px; height: 300px;"></div>
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

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Food", 4.9, "#b87333"],
        ["Value", 3.5, "#b87333"],
        ["Service", 4.2, "#b87333"],
        ["Environment", 5, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Pizza Hut",
        width: 600,
        height: 200,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values_pizza_hut"));
      chart.draw(view, options);
  }
  </script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Food", 4.9, "#b87333"],
        ["Value", 3.5, "#b87333"],
        ["Service", 4.2, "#b87333"],
        ["Environment", 5, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "KFC",
        width: 600,
        height: 200,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values_KFC"));
      chart.draw(view, options);
  }
  </script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Food", 4.2, "#b87333"],
        ["Value", 3.2, "#b87333"],
        ["Service", 4.5, "#b87333"],
        ["Environment", 5, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Handi",
        width: 600,
        height: 200,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values_handi"));
      chart.draw(view, options);
  }
  </script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Food", 4.2, "#b87333"],
        ["Value", 3.2, "#b87333"],
        ["Service", 4.5, "#b87333"],
        ["Environment", 5, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "CP",
        width: 600,
        height: 200,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values_CP"));
      chart.draw(view, options);
  }
  </script>

</body>

</html>