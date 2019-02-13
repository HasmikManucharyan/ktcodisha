<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>LiveraTrack - VTS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<meta charset="utf-8">
<meta name="keywords" content="" />
<!-- .css files -->

<link rel="stylesheet" href="<?php echo URL; ?>public/css/date.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
	
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
 
 <link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
	
	
    <link href="<?php echo URL; ?>public/css/animate.min.css" rel="stylesheet">
     <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
 
 <link href="<?php echo URL; ?>public/css/responsive.dataTables.min.css" rel="stylesheet">
 <link href="<?php echo URL; ?>public/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  
<!-- //.css files -->
<!-- Default-JavaScript-File -->
<script src="<?php echo URL; ?>public/js/date_picker.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
 <script src="<?php echo URL; ?>public/js/jquery.flot.js"></script>
		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	  
	  <script src="<?php echo URL; ?>public/js/view.js"></script>
      <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo URL; ?>public/js/dataTables.rowReorder.min.js"></script>
      
     
<!-- //Default-JavaScript-File -->

<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
<style>
body {
background-color: #f6f6f6;
	}
.navbar-default .navbar-nav > li.dropdown:hover > a, 
.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
}
li.dropdown:hover > .dropdown-menu {
    display: block;
}
</style>

		<!-- Top-Bar -->
		<div class="top-bar">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div><div style="float:left; margin-top:5px;"><img src="<?php echo URL; ?>public/images/livera_trackweb.png"></div><!--<div style="float:left; margin-left:10px; margin-top:-15px; font:Verdana, Geneva, sans-serif;"> <h3><strong>Kalyani Transco</strong></h3></div><div style="float:left; margin-left:10px; margin-top:3px;"><h5 style="color:#eee;">ERP V1.0</h5></div>--></div>
					</div>
                    
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
						<?php  if(Session::get('loggedIn')==true) { ?> 
                            <li><a href="<?php echo URL; ?>vts">Home</a></li>
                            <li><a href="<?php echo URL; ?>vts">Tracking</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle</a></li>
                               <li><a href="<?php echo URL; ?>master/drivermaster">Driver</a></li>
                                <!--<li><a href="<?php echo URL; ?>master/customermaster">Customer</a></li>-->
                           
                              </ul>
                            </li>
                            <!--<li><a href="<?php echo URL; ?>vts/devices">Devices</a></li>-->
                            <li><a href="<?php echo URL; ?>vts/geofences">Geofences</a></li>
                            <li><a href="<?php echo URL; ?>vts/groups">Groups</a></li>
                            <li><a href="<?php echo URL; ?>vts/reports">Reports</a></li>
                            <li><a href="<?php echo URL; ?>vts/users">Users</a></li>
                            <li><a href="<?php echo URL; ?>vts/settings">Settings</a></li>
                            <li><a href="<?php echo URL; ?>vts/commercial">Commercial</a></li>
							<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
							<?php  }  else { ?>
                            <li><a href="<?php echo URL; ?>">Home</a></li>
                            <?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
<!--<div style="max-height: 150px; margin: auto;"> -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>