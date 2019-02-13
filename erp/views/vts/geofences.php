<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
		<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/animate.min.css" />
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
		<script src="<?php echo URL; ?>public/js/settings.js"></script>
		<script src="<?php echo URL; ?>public/js/script.js"></script>
<!--		<script src="<?php echo URL; ?>public/js/jquery.ui.rotatable.js"></script>-->
		<style>
  .ui-rotatable-handle {
    height: 16px;
    width: 16px;
    cursor: pointer;
    background-image: url('<?php echo URL; ?>public/images/maps/rotate.png');
    background-size: 100%;
    margin-left: 60px;
    margin-top: -50px;
	z-index:3000;
}
  </style>
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
  <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
        <div class="white_div" style="">
           <div class="title_div">
             <span class="title_pra" style="font-size:18px;"><strong>Geofences</strong></span>
<!--             <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addDriverMaster()" value="Add New Driver"> -->
            </div>
            <br>
            <center> <input type="text" id="searchTxt" placeholder="Search"></center><br>
    <div class="contact-heading" id="page1">
		   
		   
		   
		<div id="page">
			<h3>Draw your Geofence / Site Location</h3>
			<div id="msg">&nbsp;</div>
<!--
			<div class="alert alert-danger sr-only" id="delete-marker">
				<h4>You really want to delete this marker?</h4>
				<p>This action can not be undone.</p>
				<button class="btn btn-danger" id="button-delete-marker">Yes, really delete it</button>
				<button class="btn btn-default dismiss-alert">No</button>
			</div>
			<div class="alert alert-danger sr-only" id="delete-polygon">
				<h4>You really want to delete this polygon?</h4>
				<p>This action can not be undone.</p>
				<button class="btn btn-danger" id="button-delete-polygon">Yes, really delete it</button>
				<button class="btn btn-default dismiss-alert">No</button>
			</div>
-->
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary sr-only zeichnen-modus" id="panel-save">
						<div class="panel-heading">Save Geofence</div>
						<div class="panel-body">
                        <!--<form action="#" method="post" role="form">
						
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php //echo $name; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="description">Description:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value="<?php echo $description; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="calendarid">calendarid:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="calendarid" id="calendarid" placeholder="Enter calendarid" value="<?php echo $calendarid; ?>">
      </div>
    </div>
 
 <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
	 <button type="button" class="btn btn-success" id="panel-save-button">to save</button>
		
      </div>
    </div>-->
                        
                        
                        
                        
                        
                        
							<form role="form" action="">
								
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" placeholder="Name">
								</div>
                                <div class="form-group">
									
									<input type="hidden" class="form-control" name="calanderid" placeholder="Calander Id" value="5">
								</div>
								<div class="form-group">
									<label>Nearest Road</label>
									<textarea class="form-control" name="description" rows="3"></textarea>
								</div>
								<input type="hidden" id="gid" name="gid" />
								<button type="button" class="btn btn-success" id="panel-save-button">Save Geofence</button>
								<button type="button" class="btn btn-warning" id="panel-save-cancel">Cancel</button>
							</form>
					  	</div>
					</div>
										
					
					<div class="panel panel-primary">
 
 <!--<div class="panel-body">
 
Site Master<a href="<?php //echo URL; ?>master/edit_vehiclemaster"><button id="btnAdd" type="button" class="btn btn-info pull-right">Add New Geofences</button></a>
  </div>-->
  <div class="panel panel-primary zeichnen-modus" id="panel-menu">
						<div class="panel-heading">Site Master</div>
						<div class="panel-body row">
							
                            <div class="panel panel-primary zeichnen-modus" id="panel-marker">
						<!--<div class="panel-heading">Tips To draw</div>
						<div class="panel-body">-->
						<a href="#" class="btn btn-block btn-info" id="modus-draw">Add New</a>
<!--
                    <p>Tips To draw :
Hold down the 'n' key and click on the map to set a new marker.Set at least 3 markers to draw a polygon</p>
-->
							<div id="marker-info">
									<!--<i class="hinweis1">Hold down the 'n' key and click on the map to set a new marker</i>
									<i class="sr-only hinweis2">Click on a marker to move or delete it.You can also move the marker with the mouse.</i>
							</div>-->
					  	</div>
					</div>
                    
							<div title="Set at least 3 markers to draw a polygon" data-toggle="tooltip" class="btn-sm col-md-6"><button id="todraw" class="btn btn-primary" disabled="disabled">Save Changes</button> </div>
                            	<div class="alert alert-danger sr-only" id="delete-marker">
				<h4>You really want to delete this marker?</h4>
				<p>This action can not be undone.</p>
				<button class="btn btn-danger" id="button-delete-marker">Yes, really delete it</button>
				<button class="btn btn-default dismiss-alert">No</button>
			</div>
			<div class="alert alert-danger sr-only" id="delete-polygon">
				<h4>You really want to delete this polygon?</h4>
				<p>This action can not be undone.</p>
				<button class="btn btn-danger" id="button-delete-polygon">Yes, really delete it</button>
				<button class="btn btn-default dismiss-alert">No</button>
			</div>
					  	</div> 
					</div>
                 
							
					
                    
                    
  <!--<div class="panel panel-primary" id="panel-modus">
	  
						<div class="panel-heading">What U want to do</div>
						<div class="panel-body">
							<a href="#" class="btn btn-block btn-info" id="modus-draw">Edit</a>
							<a href="#" class="btn btn-block btn-default" id="modus-manage">Delete</a>
					  	</div>
					</div>

  <div class="panel panel-primary verwalten-modus" id="panel-polygon-overview">
						<div class="panel-heading">Available Locations</div>
						<div class="panel-body">
							<div id="polygone">&nbsp;</div>
					  	</div>
					</div>
					<div class="panel panel-primary verwalten-modus sr-only" id="panel-polygon-details">
						<div class="panel-heading">Further information on the Polygon</div>
						<div class="panel-body">&nbsp;</div>
					</div>-->
  <div class="panel panel-primary sr-only zeichnen-modus" id="panel-marker-edit">
						<div class="panel-heading">Edit markers</div>
						<div class="panel-body">
							<div id="marker-form">&nbsp;</div>
					  	</div>
					</div>

	                    <div id="panel-polygon-overview" class="panel-body table-responsive">  
	                   
		<table id="example" class="cell-border" width="100%" cellspacing="0">
		
                                             <thead><tr>
                                               
                                               <th>Id</th>
                                               <th>Name</th>
											   <th>Nearest Road</th>
											   <th></th>
                                               <?php if(Roles::handleRole("master/geofence")>0){ ?>
												  <th></th>
												  
                                               <?php } ?>
                                              
                                             </tr></thead>
				<?php foreach($this->Allgeofences AS $key=>$value){
						?>
											 <tr>
                                               <td align="center"><?php	echo $value['id']."<br>"?></td>
											   
											   <td align="center"><div class="panel-element" data-mid="<?php echo $value['area']; ?>" data-id="<?php	echo $value['id']; ?>" ><?php	echo $value['name']; ?></div></td>
											   <td align="center"><?php	echo $value['description']."<br>"?></td>
											   <td><div class="panel-element-edit btn btn-sm btn-info" data-mid="<?php echo $value['area']; ?>" data-id="<?php	echo $value['id']; ?>" data-nid="<?php	echo $value['name']; ?>" data-did="<?php echo $value['description']; ?>"  >EDIT</div></td>
                                             
                                                <?php if(Roles::handleRole("master/geofence")>0){ ?>
											   <td><a href="javascript:confirmDelete('deletePolygon/?id=<?php echo $value['id'];?>')" class="btn btn-danger btn-sm" role="button">Delete</a></td>
											   <?php } ?>
											     	   </tr>
											
					<?php } ?>
</table>	
</div>
</div>
					
	<!--	<div class="panel panel-primary">
<div class="panel-heading">Add New Geofence</div>
	                    <div class="panel-body">  

<form action="<?php//echo URL; ?>master/edit_submit_drivermaster" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">
						
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">
        <input class="form-control" name="name" id="name" placeholder="Enter name" value="<?php//echo $name; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="description">Description:</label>
      <div class="col-xs-6">
        <input class="form-control" name="description" id="description" placeholder="Enter description" value="<?php//echo $description; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="calendarid">calendarid:</label>
      <div class="col-xs-6">
        <input class="form-control" name="calendarid" id="calendarid" placeholder="Enter calendarid" value="<?php//echo $calendarid; ?>">
      </div>
    </div>
 
 <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
	  <?php// if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" value="submit" name="submit">Submit</button>
	  <?php// } else { ?>
	  <input type="hidden" value="<?php// echo $this->content[0]['id']; ?>" name="id" >
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit">Update</button>
	  <?php// } ?>
		
      </div>
    </div>
 
 
 
 </div>
 </div>		-->	
					
					
				</div>
			
                <button id="addmarkermap" class="btn btn-info">Add Markers</button>
				<div id="map" class="col-md-6">&nbsp;</div>
                
          <!--  <a href="#" class="btn btn-block btn-info" id="modus-draw">Add Marker</a>-->
        
				<!-- <div id="draggable3" style="width: 250px; height: 250px ; background:url('<?php echo URL; ?>public/images/maps/direction.png');background-size: contain;background-repeat:no-repeat;">
				<div id="target4"  class="box" style="width: 250px; height: 250px ; background:url('<?php echo URL; ?>public/images/maps/compass.png');background-size: contain;background-repeat:no-repeat;">
						
				</div>
				<div id="txtAng" style="background:url('<?php echo URL; ?>public/images/maps/angle.png');background-size: contain;background-repeat:no-repeat; font-size:9pt; padding:8px; font-weight:bold;position:absolute;">Text
					</div>
		</div> -->
		</div>
			</div>
		</div>
         </div>
      </div>
    </div>
</div>

       
<!-- Material Dashboard javascript methods -->
	<script src="public/js/material-dashboard.js"></script>	
	
	<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
<script>

			$(document).ready(function() {
				$('#example').dataTable( {
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: true
				} );

				});

/*
				var params = {
					start: function(event, ui) {
							console.log("Rotating started")
					},
					rotate: function(event, ui) {
							if (Math.abs(ui.angle.current > 6)) {
								console.log("Rotating " + ui.angle.current)
							}
					},
					stop: function(event, ui) {
							console.log("Rotating stopped")
					},
			};

			$('#target4').rotatable(); $('#target4').draggable()
			$("div[class*='ui-rotatable-handle']").bind("mousedown", function(e) {
	getCurrentRotation('target4');
});
$("#target4").bind("mousemove", function(e) {
	//$('.box').rotatable("instance").startRotate(e);
	getCurrentRotation('target4');
});

	
	function getCurrentRotation( elid ) {
var el = document.getElementById(elid);
var st = window.getComputedStyle(el, null);
var tr = st.getPropertyValue("-webkit-transform") ||
		 st.getPropertyValue("-moz-transform") ||
		 st.getPropertyValue("-ms-transform") ||
		 st.getPropertyValue("-o-transform") ||
		 st.getPropertyValue("transform") ||
		 "fail...";

if( tr !== "none") {
	//console.log('Matrix: ' + tr);

	var values = tr.split('(')[1];
		values = values.split(')')[0];
		values = values.split(',');
	var a = values[0];
	var b = values[1];
	var c = values[2];
	var d = values[3];

	var scale = Math.sqrt(a*a + b*b);


	var radians = Math.atan2(b, a);
if ( radians < 0 ) {
radians += (2 * Math.PI);
}
var angle = Math.round( radians * (180/Math.PI));


} else {
	var angle = 0;
}


console.log('Rotate: ' + angle + 'deg');
var minAngle = angle-90;
if(minAngle<0){minAngle=minAngle+360};
var maxAngle = angle+90;
if(maxAngle>360){maxAngle=maxAngle-360};

$('#txtAng').html('Ang: ' + angle + '&deg;<br/>' +'Min: ' + minAngle + '&deg;<br/>'+'Max: ' + maxAngle + '&deg;<br/>');
}
		*/	
      
		</script>

