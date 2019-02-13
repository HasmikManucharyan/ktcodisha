<div class="container-fluid contact-us">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-6 contact-box">
            	<h1>Contact Us:</h1>
                <p>Kalyani Transco</p>
                <ul>
                	<li>
                    	<span class="icons-social"><img src="<?php echo URL; ?>public/images/envelop.png" class="img-responsive" /></span>
                        Email: <a href="#"><span class="span-color">contact@kalyanitransco.com</span></a>
                    </li>
                	<li>
                    	<span class="icons-social"><img src="<?php echo URL; ?>public/images/mapn.png" class="img-responsive" /></span>
                    	<a href="#"><span class="span-color2">20.5937° N, 78.9629° E</span></a>
                    </li>
                    <li>
                    	<span class="icons-social"><img src="<?php echo URL; ?>public/images/phone.png" class="img-responsive" /></span>
                    	Mobile: <a href="#"><span class="span-color">99370 97272 , 99373 52009</span></a>
                   <li>
                   		<span class="icons-social"><img src="<?php echo URL; ?>public/images/map.png" class="img-responsive" /></span>
                   		Near Fertilizer Godown,Goupara,</li>
                   <li>Sarbahal, Jharsuguda – 768201 (Odisha)</li>

                </ul>
            </div>
            <div class="col-sm-3 col-xs-5  ktc-nav">
            	<img src="<?php echo URL; ?>public/images/footer-logo.png" class="img-responsive" />
                <ul>
                    <li><a href="<?php echo URL; ?>index">Home </a></li>
                    <li><a href="<?php echo URL; ?>about">About</a></li>
                    <li><a href="<?php echo URL; ?>services">Service</a></li>
                    <li><a href="<?php echo URL; ?>portfolio">Portfolio</a></li>
                    <li><a href="<?php echo URL; ?>strength">Our Strength</a></li>
                    <li><a href="<?php echo URL; ?>contact">Contact</a></li>
                    <li><a href="<?php echo URL; ?>login">Login</a></li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-7 follow-box">
            	<h1>Follow us</h1>
                <ul>
                    <li><a href="#"><img src="<?php echo URL; ?>public/images/facebook.png" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="<?php echo URL; ?>public/images/twiter.png" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="<?php echo URL; ?>public/images/linkdin.png" class="img-responsive" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<footer>
	<div class="container">
    	<p>Welcome to Kalyani Transco official website! | Designed by: Theme Freesia | © 2018 WordPress</p>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/slick.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
//			$(".device-nav").click(function(){
//				$("nav").toggleClass("reveal");
//			$(".device-nav").toggleClass("reveal");
//			});
//			$('.device-nav').click(function(){
//				$('.hamburger').toggleClass('is-active');
//			  });
           
             $( 'ul li' ).on( 'click', function() {
            $( this ).parent().find( 'li.nav_active' ).removeClass( 'nav_active' );
            $( this ).addClass( 'nav_active' );
      });
			$('.banner-iner').slick({
		  		  dots: false,
				  infinite: true,
				  speed: 500,
				  autoplay: true,
				  autoplaySpeed : 3000,
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  prevArrow:"<img class='slider2 slick-prev' src='<?php echo URL; ?>public/images/previous.png'>",
				  nextArrow:"<img class='slider2 slick-next' src='<?php echo URL; ?>public/images/next.png'>",		  
		  });
		});
    
   

  </script>
 
  

		
		
  
</body>
</html>
