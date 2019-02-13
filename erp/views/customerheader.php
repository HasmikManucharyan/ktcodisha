<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108931566-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
	  dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-108931566-1');
</script>
<title>LiveraTrack - VTS</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<meta charset="utf-8">
<meta name="keywords" content="" />
<!-- .css files -->
<!-- //Default-JavaScript-File -->
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/datatables.min.css"/>
<script type="text/javascript" src="<?php echo URL; ?>public/css/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/date.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/animate.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/responsive.dataTables.min.css" rel="stylesheet">
 <!--<link href="<?php echo URL; ?>public/css/rowReorder.dataTables.min.css" rel="stylesheet">-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'> 
<!-- //.css files -->
<!-- Default-JavaScript-File -->
<script src="<?php echo URL; ?>public/js/date_picker.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.flot.js"></script>
<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap-notify.js"></script>
<script src="<?php echo URL; ?>public/js/view.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo URL; ?>public/js/dataTables.keyTable.min.js"></script>
      <!--<script src="<?php echo URL; ?>public/js/dataTables.keyTable.min.js"></script> -->
   

<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
<style>
body {
	background-color: #E0E0E0;
}	

.navbar-custom .logo img {
    padding: 15px;
    max-width: 100%;
    height: auto;
}

.navbar-custom .logo {
    float: left;
    padding-right: 40px;
    width: 100%;
}

/*.navbar-custom .navbar-toggle {
    position: absolute;
    right: 15px;
    top: 15px;
    border: 0px;
    width: 50px;
    margin: 0;
}

.navbar-custom .icon-bar {
    width: 100%;
    margin: 5px 0;
    height: 3px;
}
*/
@media (min-width:568px) { 
	.navbar-custom.navbar {
	    height: 110px
	}

	/*.navbar-custom .container {
	    position: relative;
	    overflow: visible;
	}*/

	.navbar-custom .navbar-nav {
	    padding: 65px 0 0;
	    text-align: center;
	    width: 100%;
	
	}

	/*.navbar-custom .navbar-nav > li {
	  
	    float: none;
		background-color: rgb(39, 162, 189);
	}*/

	.navbar-custom .navbar-nav > li > a:hover{
		background-color: rgb(39, 162, 189);
		height: 44px;
		display: inline-block;
    float: none;
	position: static;
	
	}

	.navbar-custom .logo {
	    position: absolute;
	    background: #fff;
	    left: 0;
	    right: 0;
	    z-index: 5000;
	    display: block;
	    float: none;
	    padding: 0;
	}

	.navbar-custom .logo:before,
	.navbar-custom .logo:after {
	    position: absolute;
	    background: #fff;
	    content: '';
	    left: -1000px;
	    width: 2000px;
	    bottom: 0;
	    /*display: block;
	    height: 100%;*/
	}

	.navbar-custom .logo:after {
	    left: auto;
	    right: -1000px;
	}
}
/*.navbar-custom .container,
	.navbar-default .collapse.navbar-collapse,
	.navbar-default .navbar-nav > li.dropdown:hover > a,
	{
    background-color: rgb(18, 188, 232);
    color: rgb(255, 255, 255);
}
.navbar-custom .navbar-nav > li.dropdown:hover > a:hover,
.navbar-custom .navbar-nav > li.dropdown:hover > a:focus.
 {
	background-color: rgb(39, 162, 189);
	color: rgb(255, 255, 255);
	
}*/
/*.navbar-default .navbar-nav > li
{
	color: #FFF;
}
.navbar-default .navbar-nav > li:hover {
	background-color: rgb(39, 162, 189);
	color: rgb(255, 255, 255);
}*/
li.dropdown:hover > .dropdown-menu{
    display: block;
	background-color: rgb(39, 162, 189);
    color: rgb(255, 255, 255);
}
 /*.navbar-nav {
    width: 100%;
    text-align: center;
	 color: rgb(255, 255, 255);
 }
  .navbar-nav > li {
      float: none;
      display: inline-block;
	  
    }*/
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.account-box
{
    border-top: 2px solid #27A2BD;
    z-index: 3;
    font-size: 12px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
}
.form-control{
  background-color : #D3D3D3;
}

.forgotLnk
{
    margin-top: 10px;
    display: block;
}

.purple-bg
{
    background-color: #27A2BD;
    color: #000;
}
.or-box
{
    position: relative;
    border-top: 1px solid #dfdfdf;
    padding-top: 20px;
    margin-top:20px;
}
.or
{
    color: #666666;
    background-color: #ffffff;
    position: absolute;
    text-align: center;
    top: -8px;
    width: 50px;
    left: 120px;
}
.account-box .btn:hover
{
    color: #fff;
}

.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}

</style>
<nav class="navbar navbar-inverse navbar-static-top navbar-custom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="logo" href="#"><img src="<?php echo URL; ?>public/images/livera_trackweb.png" alt=""></a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php  if(Session::get('loggedIn')==true) { ?>
                            <li><a href="<?php echo URL; ?>vts">HOME</a></li>
                                <li><a href="<?php echo URL; ?>vts">TRACKING</a></li>
                                <?php if (Session::get('userType')=="customer"){ ?>
                                <li><a href="<?php echo URL; ?>vts/users">USERS</a></li>
                                <?php } ?>
                                 <?php if (Session::get('userType')=="user" && Session::get('parent_userType')=="dealer"){?>
                                <li><a href="<?php echo URL; ?>master/expenselog">EXPENSE LOG</a></li>
                                <?php } ?>
                                <!--<li><a href="<?php// echo URL; ?>vts/geofences">GEOFENCES</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MASTER</a>
                            		<ul class="dropdown-menu">
                                        <li><a href="<?php echo URL; ?>master/vehiclemaster">VEHICLE</a></li>
                                       	<li><a href="<?php echo URL; ?>master/drivermaster">DRIVER</a></li>
                                        <li><a href="<?php echo URL; ?>vts/devices">DEVICE</a></li>
                                        <li><a href="<?php echo URL; ?>vts/geofences">GEOFENCES</a></li>
                                        <li><a href="<?php echo URL; ?>vts/groups">GROUPS</a></li>
                                        <li><a href="<?php echo URL; ?>master/expenselog">EXPENSE</a></li>
                             	 	</ul>
                            	</li>-->
                       
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORTS</a>
                           <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>vts/historicplayback">HISTORIC PLAYBACK</a></li>
                                 <?php if (Session::get('userType')=="user" && Session::get('parent_userType')=="dealer"){?>
                                <li><a href="<?php echo URL; ?>vts/fuelreport">FUEL REPORT</a></li>
                                <?php } ?>
                                <li><a href="<?php echo URL; ?>vts/reportstrip">TRIP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportstops">STOP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportssummary">SUMMARY REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsroutes">ROUTE REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsevents">EVENTS REPORT</a></li>
                              </ul></li>
                            
                            <!--<li><a href="<?php echo URL; ?>vts/commercial">COMMERCIAL</a></li>-->
                           <li><a href="<?php echo URL; ?>vts/settings"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell faa-ring animated" aria-hidden="true"></i><span class="badge badge-error">5</span></a>
          <ul class="dropdown-menu notify-drop">
            <div class="notify-drop-title">
            	<div class="row">
            		<div class="col-md-6 col-sm-6 col-xs-6">Mark All As Read </div>
            		<div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="notification"><i class="fa fa-dot-circle-o"></i></a></div>
            	</div>
            </div>
            <!-- end notify title -->
            <!-- notify content -->
			
			<?php 
				$sno = 0;
				foreach($this->notes AS $key=>$value){
					$sno++;
						?>
			
			
            <div class="drop-content">
			<!--<li><div class='notification-subject'><?php	//echo $sno."<br>"?></div></li>
	<li><div class='notification-comment'><?php	//echo $value['deviceid']."<br>"?></div></li>
	<li><div class='notification-comments'><?php //echo $value['event_type']."<br>"?></div></li>!-->
			
            	<!--<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		
            		<hr>
            		<p class="time">View</p>
            		</div>
            	</li>!-->
            	<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<?php echo $sno."<br>"?>
					
            		<p class="time">View</p>
            		</div>
            	</li>
            	
            	<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<?php echo $value['deviceid']."<br>"?>
					
            		<p class="time">view</p>
            		</div>
            	</li>
                <li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<?php echo $value['event_type']."<br>"?>
					
            		<p class="time">view</p>
            		</div>
            	</li>
				<!--<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>2172 Overspeeding</p>
            		<p class="time">view</p>
            		</div>
            	</li>
				<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>2172 Geofence Enter</p>
            		<p class="time">view</p>
            		</div>
            	</li>
				<li>
            		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
            		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>2172 Geofence Exit</p>
            		<p class="time">view</p>
            		</div>
            	</li>!-->
            </div>
			
			<?php }  ?>
			
            <div class="notify-drop-footer text-center">
            	<a href=""><i class="fa fa-eye"></i> See All</a>
            </div>
          </ul>
        </li>
							<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
							<?php  }  else { ?>
                            <li><a href="<?php echo URL; ?>">Home</a></li>
                            <?php } ?>
						</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>  

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
