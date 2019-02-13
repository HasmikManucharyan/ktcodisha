<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myNavbar");
var btns = header.getElementsByClassName("btn2");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

  <section class="copyright">
	<div class="agileits_copyright text-center">
			<p>© 2018 Kalyani Transco All rights reserved | Developed by <a href="http://www.liveramedia.com/" class="w3_agile">www.liveramedia.com</a></p>
	</div>
</section>
<script src="<?php echo URL; ?>public/js/jarallax.js"></script>
	<script src="<?php echo URL; ?>public/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="<?php echo URL; ?>public/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/easing.js"></script>


 

