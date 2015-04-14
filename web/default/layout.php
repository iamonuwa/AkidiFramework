<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo SITETITLE.' | '.$this->pageTitle ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>css/default.css">
	<link rel="stylesheet" href="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>css/layout.css">
   <link rel="stylesheet" href="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>css/media-queries.css">    

   <!-- Script
   ================================================== -->
	<script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>images/favicon.png" >

</head>

<body>
    
    <div id="preloader">      
      <div id="status">
         <img src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo" >
				<a href="<?php echo URL_PATH; ?>index" >
                 <img src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>images/logo.png" alt="Zoon">                  
              </a>					
			</div>

		   <nav id="nav-wrap">

		      <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
			   <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

		      <ul id="nav" class="nav">
		         <li><a class="smoothscroll" href="#home">Home</a></li>
		         <li><a class="smoothscroll" href="#about">About Me</a></li>	
                         <li><a class="smoothscroll" href="#location">Contact Me</a></li>	
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			
<?php require($this->content); ?>
	

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
                <li>&copy; <?php echo date('Y');?> Akidi Framework V0.1</li>
                <li>Built With <a href="http://dl.akidiframework.com"> Akidi Framework</a> By <a title="achi" href="http://www.github.com/isaac">Onuwa Nnachi Isaac</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/jquery-migrate-1.2.1.min.js"></script>

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/gmaps.js"></script>
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/waypoints.js"></script>   
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/jquery.countdown.js"></script>
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/jquery.placeholder.js"></script>
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/backstretch.js"></script>  
   <script src="<?php echo URL_PATH.'web/'.DEFAULT_TEMPLATE;?>js/init.js"></script>

</body>

</html>