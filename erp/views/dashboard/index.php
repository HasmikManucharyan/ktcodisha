<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>GPS Software</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/stylemap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/datatables.min.css"/>
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/navigation.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/detals.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/table.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/jquery.dataTables.min.css">
 	<script>
      	var serverUrl = '<?php echo URL; ?>';
        var traccarID = '<?php echo Session::get('traccarID'); ?>';
       	var employeeID = '<?php echo Session::get('employeeID'); ?>';
        var iconUrl = serverUrl + 'public/images/erp/';
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
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/markerclusterer.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/detals.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public1/js/maps.js"></script>
</head>

<body>
	<div class="wrapper">
		<!-- Start Header -->
		<header class="header">
			
		</header>
		<!-- End Header ======================================-->	






		<!-- Main Content ===========================================================-->
		
		<div class="container-fluid main-container">
			<div class="tool-menu-bar1 menu1">
				<img src="<?php echo URL; ?>public1/images/logo.png" class="logo">
				<!-- <div class="open-close">
					<button >
						<span class="first"></span>
						<span class="line"></span>
						<span class="before"></span>
					</button>
				</div> -->
				<div class="tool-menu-bar-child">
					<!-- <div class="tool-menu-bar-scrol tool-menu-bar-scrol-0">
						<div class="tool-menu-bar-scrol-button tool-menu-bar-scrol-button-0">
						</div>
					</div> -->
				</div>
				<div id="sub_menu_items" class="close_sub_menu">
					<ul class="sub_menu_ul"></ul>
				</div>
				<a href="<?php echo URL; ?>login/logout" class="button-style">Log out</a>
			</div>
			<div class="fix-data">
				<ul class="nav nav-tabs">
					<li style="background-color:palegreen"><a href="#a" data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Moving');">
						<span id="Dontxt">0</span> Move</a>
					</li>
					<li style="background-color:yellow"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Idle');">
						<span id="Dofftxt">0</span> Idle</a>
					</li>
					<li style="background-color:#FFE0E0"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Unreachable');">
						<span id="DNotRpttxt">0</span> Down</a>
					</li>
					<li style="background-color:lightblue"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('truck');">
						<span id="DFueltxt">0</span> Fuel</a>
					</li>
					<li class="new-row" ><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('');"><span id="allTottxt">0</span> All</a></li>
					<li class="text-show" ><a href="#a" data-toggle="tab"  >Text</a></li>
					<li class="map-show" ><a href="#a" data-toggle="tab"  >Map</a></li>
					<li class="map-text-show" ><a href="#a" data-toggle="tab"  >Map & Text</a></li>
					<li>
						<div id="new-search-area">
							<select id="selectSearch">
						<option value="">GROUP</option>

							</select> 
							<input type="text" id="search_input_top_bar" placeholder="Search..." />
							<div id="search_modal_data">
								<ul></ul>
							</div>
						</div> 
					</li>
				</ul>
			</div>
			
			<div id ="myTable" class="textcontent ui-resizable">
				<table id="tblData" class="table tablesorter tdesign dataTable no-footer row-border hover compact" style="border: solid #000 1px; width: 50%; border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="50%">
						<thead>
							<tr role="row" style="height:15px;" class="info">
							<th class="sorting_asc" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="SN: activate to sort column descending">SN</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">Group</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">STATUS</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">FUEL SENSOR</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1"  aria-sort="ascending" aria-label=": activate to sort column ascending">VEH NUM</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="Last Seen: activate to sort column ascending">LAST UPDATE</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">SITE NAME</th>
							<th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">ROUTE NAME</th>

							<th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE DATA</th>
							<th tabindex="0" aria-controls="tblData" rowspan="1" colspan="6" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">FUEL DATA</th>
							<th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE COMPLAINCE</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">MAP LOCATION</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">TRIP STATUS</th>
							</tr>
							<tr role="row" style="height:15px;" class="info">



							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">SPEED</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">MAX SPEED</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Idle Time(HH:MM:SS): activate to sort column ascending">IDLE TIME</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">ODOMETER</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">KM DRIVEN</th>

							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">INITIAL </th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">FILL</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending"> CONSUMED </th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">STOLEN  </th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">BALANCE </th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">KMPL</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">FITNESS</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">INSURANCE</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Permit: activate to sort column ascending">PERMIT</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">ROADTAX</th>
							<th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">POLLUTION</th>
							</tr>
						</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<div id="map" class="map-block">
			</div>
			<!-- <div id="divMapSite" > -->
				<!--<input type="button" id="viewVehicles" value="Centre" onClick="setBounds();" />
               	<input type="button" id="btnMapSiteSearch" value="Show Sites" onClick="createSiteMarker();" />
           	</div> -->
           <!-- 	<div id="divMapCluster" >
               	<input type="checkbox" id="chkCluster" checked />
               	Density Cluster
           </div> -->
			<div class="detals"></div>
			<div id="divMapLatLngt">
            </div>
		</div>
		<!-- End Main Content ===========================================================-->
	</div>

<div id="modals">
</div>
<div id="all-sub-menu">
</div>
	<!-- Modal Events---------------------->
	<div class="modal" id="events" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
		</div>
	</div>

	
<div class="modal-min"></div>
</body>
</html>
