<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ERP Solution</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- <link rel="shortcut icon" href="<?php echo URL; ?>public1/images/favicon.ico"> -->

	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/datatables.min.css"/>
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?php echo URL; ?>public1/css/style1.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet">
    <style>
        .container {
  padding: 10px;
  margin: 10px;
}
    </style>
   <script>
      var serverUrl = '<?php echo URL; ?>';
        var traccarID = '<?php echo Session::get('traccarID'); ?>';
       var employeeID = '<?php echo Session::get('employeeID'); ?>';
    </script>
  
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/modernizr.js"></script>	
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/jquery.nicescroll.min.js"></script>	
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/menu.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/general.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/resize.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/initMenu.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/modal.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/markerwithlabel.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/maps.js"></script>
     <script src="<?php echo URL; ?>public/js/select2.min.js"></script>
</head>

<body>
	<div class="wrapper">
		
		<!-- Start Header -->
		<header class="header">
			<div class="dropdown">
				<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Map <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="action">
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
					<li>
						<label class="checkbox checkItem">
							<input type="checkbox" class="icheck"> <span>Account</span> 
						</label>
					</li>
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
					<li class="title">POL</li>
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
					<li>
						<label class="checkbox checkItem">
							<input type="checkbox" class="icheck"> <span>Account</span> 
						</label>
					</li>
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
					<li class="title">POL</li>
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
					<li class="title">POL</li>
					<li>
						<label id="checkedAll" class="checkbox">
							<input type="checkbox" class="icheck"> <span>All</span> 
						</label>
					</li>
				</ul>
			</div>
			
		<!-- Main Content ===========================================================-->
		
		<div class="container-fluid main-container">
			<div class="tool-menu clearfix tool-menu-bar">
			<div class="close-block">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<button type="button" class="navbar-toggle collapsed" >
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
			</button>
				
			</div>
            <div class="container" id="floating-panel">
                <div class="col-md-12" style="margin-top: 50px;">
                  <div class="col-md-offset-1 col-md-5">
                    <div style="display: flex;">
                       <div class="box box2"><select selected="selected" name="vehicleno" id="vehicleno" value="" style="width:100%;">
                              <option value="0">Select Vehicle No</option>
                           </select></div>
                     </div>
                    </div>
                    
 
  
</div>
            </div>
            <center>
             <div class="modal fade" id="fileUploadModal" role="dialog" style="width:70%;height:70%;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Vehiclemaster</h4>
        </div>
        <div class="modal-body">
           <center>
             <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#vehicle">Vehicle</a></li>
                 <li><a data-toggle="pill" href="#income">Income</a></li>
                <li><a data-toggle="pill" href="#expenses">Expenses</a></li>
                
             </ul>
         </center> 
                       <div class="tab-content">
    <div id="vehicle" class="tab-pane fade in active">
      <br>
      <div class="panel-primary">
                     <div class="panel-heading" align="center">Vehicle Details</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Party Name:</label>
                           <div class="col-xs-8" id="name1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Owner Name:</label>
                           <div class="col-xs-8" id="uniqueid1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="groupid1">Engine No:</label>
                           <div class="col-xs-8" id="groupid1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="phone">Chesis No:</label>
                           <div class="col-xs-8" id="phone1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="contact">Device Id:</label>
                           <div class="col-xs-8" id="contact1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="model">IMIE No:</label>
                           <div class="col-xs-8" id="model1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">Driver Name:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">License No:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                          <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">Expiry Date:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                     </div>
                  </div>
    </div>
    <div id="expenses" class="tab-pane fade">
        <br>
      <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#compliances">Compliances</a></li>
                <li><a data-toggle="pill" href="#hsd">HSD</a></li>
                <li><a data-toggle="pill" href="#tyre">Tyre</a></li>
                <li><a data-toggle="pill" href="#maintainance">Maintainance</a></li>
             </ul>
    </div>
    <div id="income" class="tab-pane fade">
    <br>
        <h3>Trips</h3>
      
    </div>
    
  </div>
            
            
<!--          <p><textarea id = "commentsUpload"class="form-control custom-control" rows="3" style="resize:none"></textarea></p>-->
        </div>
        <div class="modal-footer">
<!--          <button type="button" class="btn btn-default" onclick="submitXYX()" data-dismiss="modal">Submit</button>-->
        </div>
      </div>
    </div>
  </div>
            </center>
			<div id="map" class="map-block">
				<!-- <iframe  src="https://www.google.com/maps/embed?pb=" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<!-- <div id="map" style="width:100%; height:82%; margin-bottom:5px;">&nbsp; </div>-->

			</div>
			<div id="divMapLatLngt">
                   </div>
		</div>
		<!-- End Main Content ===========================================================-->
	</div>

<div id="modals">
	
</div>

	
	<!-- Modal Events---------------------->
	<div class="modal" id="events" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			
		</div>
	</div>

	<!-- Modal POL---------------------->
	<div class="modal fade" id="pol" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="myModalLabel">Edit extended date</h4>
					</div>
					<div>
						<select name="" class="form-control pull-right">
							<option value="option01">Option01</option>
							<option value="option01">Option01</option>
						</select>
					</div>
					<div class="close-block">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<div  class="title">
						<h2>Lorem ipsum dolor sit amet,</h2>
						<p> consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco .</p>
					</div>

					<div class="clearfix">
						<div class="add-block">
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/add.svg" alt=""></a>
							Add New line
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Search---------------------->
	<div class="modal fade" id="search" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="myModalLabel">Edit extended date</h4>
					</div>
					<div>
						<select name="" class="form-control pull-right">
							<option value="option01">Option01</option>
							<option value="option01">Option01</option>
						</select>
					</div>
					<div class="close-block">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<div  class="title">
						<h2>Lorem ipsum dolor sit amet,</h2>
						<p> consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco .</p>
					</div>

					<div class="clearfix">
						<div class="add-block">
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/add.svg" alt=""></a>
							Add New line
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal Help---------------------->
	<div class="modal fade" id="help" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="myModalLabel">Edit extended date</h4>
					</div>
					<div>
						<select name="" class="form-control pull-right">
							<option value="option01">Option01</option>
							<option value="option01">Option01</option>
						</select>
					</div>
					<div class="close-block">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<div  class="title">
						<h2>Lorem ipsum dolor sit amet,</h2>
						<p> consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco .</p>
					</div>

					<div class="clearfix">
						<div class="add-block">
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/add.svg" alt=""></a>
							Add New line
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal System---------------------->
	<div class="modal fade" id="system" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div>
						<h4 class="modal-title" id="myModalLabel">Edit extended date</h4>
					</div>
					<div>
						<select name="" class="form-control pull-right">
							<option value="option01">Option01</option>
							<option value="option01">Option01</option>
						</select>
					</div>
					<div class="close-block">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="modal-body">
					<div  class="title">
						<h2>Lorem ipsum dolor sit amet,</h2>
						<p> consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco .</p>
					</div>

					<div class="clearfix">
						<div class="add-block">
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/add.svg" alt=""></a>
							Add New line
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
					<div class="row">
						<div class="add-row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="product">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Opel">
								</div>
							</div>
							<a class="add-btn" href="#" title="Add"><img src="<?php echo URL; ?>public1/images/remove.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>
<div class="modal-min"></div>
</body>
</html>
