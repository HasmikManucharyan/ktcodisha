<?php
//define('URL', 'http://www.ktcodisha.com/erp/');	
define('URL', 'http://localhost/erp/');	
 ?>	
		<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
           <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
           <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
		<!-- JS -->
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>

		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
	  	
		 <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
        <script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
		<script src="<?php echo URL; ?>public/js/fancywebsocket.js"></script>

		<script>
		var latlng = "21.82519,84.04511";
var url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=" + latlng +"&sensor=false";
$.getJSON(url, function (data) {
    for(var i=0;i<data.results.length;i++) {
        var adress = data.results[i].formatted_address;
        alert(adress);
    }
});
</script>