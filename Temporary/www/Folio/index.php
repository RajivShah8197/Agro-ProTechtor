<?php
    session_start();
    $sessionid=session_id();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agroprotechtor";

    $fname=$age=$password=$phoneno=$slist=$district=$city="";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM login WHERE MobileNumber='".$sessionid."'"; 
    
    $result=mysqli_query($conn,$sql);
    
    if( mysqli_num_rows($result) == 0) {
    // output data of each row
      Redirect('../login.php', false);
} else {
        $row=mysqli_fetch_assoc($result);
    $phoneno=$row["MobileNumber"];
    $ngo=$row["NGO"];
        $fname=$row["Name"];
        $slist=$row["State"];
        $district=$row["District"];
        $city=$row["City"];
    }
?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>NGO</title>
<meta name="description" content="OnePage Resume Portfolio">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<div class="wrapper noGap" id="wrapper">

<!--Header start -->
<header>
  	<!--menu start-->
    <div class="menu">
    <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
              	<!--<div class="logo">logo</div> -->
                <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <!-- <a class="navbar-brand" href="#">Menu</a>  --></div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
                        <li class="menuItem"><a href="#aboutus">Profile</a></li>
                        <li class="menuItem"><a href="#aboutus">Donate US</a></li>
                        <li class="menuItem"><a href="#skillset">Issues raised</a></li>
                        <li class="menuItem"><a href="#contact">Logout</a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end--> 
    <!--banner start-->
    <div class="banner row" id="banner">
    <div class="bannerText">
        <h1><?php echo "$fname" ?></h1>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--background slide show start-->
        <div class="slide"> 
          <img src="images/header-image/image01.png" alt="image01"> </div>
        <div class="slide"> 
          <img src="images/header-image/image02.jpg" alt="image01"> </div>
        <!--background slide show end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end -->
  
 <!--about us start-->
  <section class="aboutus" id="aboutus">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2>Descripton</h2>
        <h3>A small introduction about our self</h3>        
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/jhon-img.jpg" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	<h5>Name : <?php echo "$fname" ?></h5><br>
          <h5>Location : <?php echo "$district" ?>|<?php echo "$city" ?>|<?php echo "$slist" ?></h5><br>
          <h5>Contact Details : <?php echo "$phoneno" ?></h5><br>
          <h5>Donate</h5><h3>Upload Your Paytm QRCode</h3>
            <form action="../upload_file.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
        </div>

      	
      </div>     
    </div>    
  </section>
  <!--about us end--> 
  <!--Skillset start -->
  <section id="skillset" class="skillset">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
               <div class="heading">
                <h2>Issues raised</h2>   
              </div>
            </div>
            <div class="col-md-12">              
                <div class="skillbar clearfix " data-percent="94%">
                    <div class="skillbar-title"><span>Issue 1</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="86%">
                    <div class="skillbar-title"><span>issue 2</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="52%">
                    <div class="skillbar-title"><span>Issue 3</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->                
                </div>
            </div>
        </div>
  </section>
  <!--Skillset end -->
  
  
  
  

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'skillset',
		  3: 'experience',
		  4: 'education',
		  5: 'ourwork',
		  6: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
	

});
</script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
					scrollwheel: false,
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
				
				

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Hello!'
                });
            }
        </script>

<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>