	<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
     <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
     <link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
     <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
       <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
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
                                <li><a href="<?php echo URL; ?>master/customermaster">Customer</a></li>
                                <li><a href="<?php echo URL; ?>vts/devices">Device</a></li>
                                <li><a href="<?php echo URL; ?>master/customermaster">Expense</a></li>
                           
                              </ul>
                            </li>
                           <!-- <li><a href="<?php echo URL; ?>vts/devices">Devices</a></li>
                            <li><a href="<?php echo URL; ?>vts/geofences">Geofences</a></li>
                            <li><a href="<?php echo URL; ?>vts/groups">Groups</a></li>
                           <li><a href="<?php echo URL; ?>vts/users">Users</a></li> -->
                           <li><a href="<?php echo URL; ?>vts/reports">Reports</a></li>
                            
                            <li><a href="<?php echo URL; ?>vts/commercial">Commercial</a></li>
                            <li><a href="<?php echo URL; ?>vts/settings">Settings</a></li>
							<li><a href="<?php echo URL; ?>vts/notifications">notifications</a></li>
							<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
							<?php  }  else { ?>
                            <li><a href="<?php echo URL; ?>">Home</a></li>
                            <?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        
             <div class="contact-heading" id="page1">
			 <a href="<?php echo URL; ?>vts/geofences"><button type="button" class="btn btn-primary">Geofences</button></a>
			 <a href="<?php echo URL; ?>vts/users"><button type="button" class="btn btn-primary">Users</button></a>
			 <a href="<?php echo URL; ?>vts/groups"><button type="button" class="btn btn-primary">Groups</button></a>
		</div>
		<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>vts">VTS</a></li>
   <li>Devices</li>

</ul> 
		<div class="content">
	            <div class="container-fluid">
<p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>vts/edit_devices"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a></p>


   <div class="col-md-12">

			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Devices</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
		<table id="example" class="cell-border" width="100%" cellspacing="0">
		
                                             <thead><tr>
                                               
                                               <th>id</th>
											   <th>name</th>
                                               <th>uniqueid</th>
											   <th>lastupdate</th>
											   <th>positionid</th>
											   <th>groupid</th>
											   <th>attributes</th>
											   <th>Status</th>
											   
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
				<?php foreach($this->Alldevices AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['id']."<br>"?></td>
											   <td><?php	echo $value['name']."<br>"?></td>
											   <td><?php	echo $value['uniqueId']."<br>"?></td>
											   <td><?php	echo $value['lastUpdate']."<br>"?></td>
											   <td><?php	echo $value['positionId']."<br>"?></td>
											   <td><?php	echo $value['groupId']."<br>"?></td>
											   <td><?php	echo $value['attributes']."<br>"?></td>
											   <td><?php	echo $value['status']."<br>"?></td>
											 
											   <td><a href="<?php echo URL; ?>vts/view_devices/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>vts/edit_devices/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_devices/?id=<?php echo $value['id'];?>&name=<?php echo $value['name']; ?>&uniqueId=<?php echo $value['uniqueId']; ?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>
											   
									
											   </tr>
											
					<?php } ?>
</table>	
</div>
</div>
</div>
</div>
</div>

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
			} );
		</script>
