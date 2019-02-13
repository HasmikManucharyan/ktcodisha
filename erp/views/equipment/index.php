<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quotation create</title>

    <!-- Bootstrap -->
    <link href="<?php echo URL?>public1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL?>public1/css/style1.css" rel="stylesheet">
    <style type="text/css">
    	#equipment_add_block {
    		display: none;
    	}
    </style>
    <script type="text/javascript">
    	var allVendor = JSON.parse('<?php echo json_encode($this->vendor);?>')
    	var supervisor = JSON.parse('<?php echo json_encode($this->supervisor);?>')
    	console.log('supervisor',supervisor);
    </script>
  </head>
  <body>
<div class="container nir_con">

	<div class="my_whitecard quo_i" id="equipment_list">
		<div class="nir_title">
			<h3>Equipment Listing Page</h3>
		</div>
		
		
		
		<div class="row">
			<div class="col-md-6">
				 <div class="button-group">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Select Type <span class="caret"></span></button>
			<ul class="dropdown-menu">
			  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp; All</a></li>
			  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp; Rent</a></li>
			  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp; Own</a></li>
			</ul>
			  </div>
			  
			  
			  
			</div>
			<div class="col-md-6 text-right">
				<button type="button" class="btn btn-default nir_sub" id="add_equipment">Add Equipment</button>
				<a href="master/vendor" class="btn btn-default nir_sub" >Add Equipment Vendor</a>
				<button type="button" class="btn btn-default nir_sub" id="issue">Issue</button>
			</div>
		</div>
		
		
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="scroll_table">
				  <table class="table table-bordered ven_table">
					<thead>
					  <tr>
						<th>Sr No. </th>
						<th> Name</th>
						<th>Type</th>
						<th>In Stock</th>
						<th>Issued</th>
						<th>Available</th>
						<th>Site ocation </th>
						<th colspan="2">Actions</th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>01</td>
						<td>Crane</td>
						<td>Own</td>
						<td>50</td>
						<td>2</td>
						<td>48</td>
						<td>Jsg ­ Sundargarh road</td>
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						<td><button type="button" class="btn btn-default nir_sub">Edit </button></td>
					  </tr>
					  <tr>
						<td>02</td>
						<td>Grab</td>
						<td>Rented</td>
						<td>4</td>
						<td>3</td>
						<td>1</td>
						<td>Sambalpur Road</td>
						<td></td>
						<td></td>
					  </tr>
					  
					   <!--tr class="bottom_text">
						<td colspan="9">Sent to Vendo:</td>
						<td class="text-left">1527</td>
						
					  </tr>
					   <tr class="bottom_text">
						<td colspan="9">Vendor Approved:</td>
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						
					  </tr>
					   <tr class="bottom_text">
						<td colspan="9">Vendor Rejected:</td>
						<td class="text-left">1527</td>
						
					  </tr-->
					  
					
					 
					</tbody>
				  </table>
				  </div>
			</div>
		</div>
		
		<!--div class="row">
			<div class="col-md-12">
				<div class="my_submit_btn">
					<ul>
						<li><button type="button" class="btn btn-default nir_sub bg_org">Reject </button></li>
						<li><button type="button" class="btn btn-default nir_sub">Send For Approval </button></li>
						<li><button type="button" class="btn btn-default nir_sub bg_red">Cancel</button></li>
					</ul>
				</div>
			</div>
		</div-->
		<!-- Modal -->
		<div id="equipmentModal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Note:</h4>
			  </div>
			  <div class="modal-body">
				<textarea class="nir_textarea" placeholder="Note enter here"></textarea>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default nir_sub pull-left">Confirm</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>

	<div class="my_whitecard quo_i" id="equipment_add_block">
		<div class="nir_title">
			<h3>Add Equipment</h3>
		</div>
		<div class="row">
			<div class="col-md-6">
				<table>
					<tr>
						<td>Code:</td>
						<td><input class="nir_form" type="text" value="Eq 001" placeholder="" id="code" /></td>
					</tr>
					<tr>
						<td>*Equipment Name</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="" /></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="" /></td>
					</tr>
					<tr>
						<td>*Quantity</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="" /></td>
					</tr>
					<tr>
						<td>*Type</td>
						<td>
							<table class="radio_inline">
								<tr>
									<td style="text-align:left;">
										<input class="nir_form" type="checkbox" value="" placeholder="" id="Own"/> 
										Own
									</td>
									<td><input class="nir_form" type="checkbox" value="" placeholder="" id="Rent" />Rent</td>
						
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>Vendor Name</td>
						<td><select class="nir_select_new" id="vendor_select">
							<?php foreach ($this->vendor as $vendor) {?>
								<option><?=$vendor['VendorName']?></option>
							<?php } ?>
							</select>
							
								
							</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="button" class="btn btn-default nir_sub pull-right">+ </button>
						</td>
					</tr>
						<tr>
						<td>Vendor Contact Person</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="VendorContactPerson"/></td>
					</tr>
						<tr>
						<td>Mobile Number</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="MobileNumber"/></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table>
						<tr>
						<td>Hourly cost per eqipmen</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id=""/></td>
					</tr>
						<tr>
						<td>Equiment Hired from</td>
						<td><input class="nir_form" type="time" value="" placeholder="" id=""/></td>
					</tr>
					</tr>
						<tr>
						<td> To</td>
						<td><input class="nir_form" type="time" value="" placeholder="" id=""/></td>
					</tr>
						<tr>
						<td>Rented Hours</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id=""/></td>
					</tr>
						<tr>
						<td>Total cost</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="" /></td>
					</tr>
						<tr>
						<td>Site Location</td>
						<td>
							<select class="nir_select_new" id="">
								<option>select</option>
								<option>option</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Supervisor</td>
						<td>
							<select class="nir_select_new" id="">
							<?php foreach ($this->supervisor as $supervisor) {?>
								<option><?=$supervisor['name']?></option>
							<?php } ?>
							</select>
						</td>
					</tr>
				</table>
			<p>( Total Time in hr * Equipment Quantity) . Hourly cost of euqipment is editable. </p>
			</div>
			<!--div class="col-md-12">
				<button type="button" class="btn btn-default nir_sub pull-right">Generate New Good Receipt Voucher</button>
			</div-->
		</div>
		<div class="clearfix"></div>
		<!--div class="row">
			<div class="col-md-12">
				<div class="scroll_table">
				  <table class="table table-bordered ven_table">
					<thead>
					  <tr>
						<th>Sr No. </th>
						<th> Name</th>
						<th>Type</th>
						<th>In Stock</th>
						<th>Issued</th>
						<th>Available</th>
						<th>Site ocation </th>
						<th colspan="2">Actions</th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>01</td>
						<td>Crane</td>
						<td>Own</td>
						<td>50</td>
						<td>2</td>
						<td>48</td>
						<td>Jsg ­ Sundargarh road</td>
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						<td><button type="button" class="btn btn-default nir_sub">Edit </button></td>
					  </tr>
					  <tr>
						<td>02</td>
						<td>Grab</td>
						<td>Rented</td>
						<td>4</td>
						<td>3</td>
						<td>1</td>
						<td>Sambalpur Road</td>
						<td></td>
						<td></td>
					  </tr>
					  
					   <tr class="bottom_text">
						<td colspan="9">Sent to Vendo:</td>
						<td class="text-left">1527</td>
						
					  </tr>
					   <tr class="bottom_text">
						<td colspan="9">Vendor Approved:</td>
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						
					  </tr>
					   <tr class="bottom_text">
						<td colspan="9">Vendor Rejected:</td>
						<td class="text-left">1527</td>
						
					  </tr>
					  
					
					 
					</tbody>
				  </table>
				  </div>
			</div>
		</div-->
		<div class="row">
			<div class="col-md-12">
				<div class="my_submit_btn">
					<ul>
						<!--li><button type="button" class="btn btn-default nir_sub bg_org">Reject </button></li-->
						<li><button type="button" class="btn btn-default nir_sub" id="save_btn">Save </button></li>
						<li><button type="button" class="btn btn-default nir_sub bg_red" id="form_cancel_btn">Cancel</button></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo URL?>public1/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL?>public1/js/bootstrap.min.js"></script>
    <script>
		var options = [];
		$( '.dropdown-menu a' ).on( 'click', function( event ) {
		   	var $target = $( event.currentTarget ),
		       val = $target.attr( 'data-value' ),
		       $inp = $target.find( 'input' ),
		       idx;
		   	if ( ( idx = options.indexOf( val ) ) > -1 ) {
		      options.splice( idx, 1 );
		      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
		   	} else {
		      options.push( val );
		      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
		   	}
		   	$( event.target ).blur();
		   	console.log( options );
		   	return false;
		});
		var add_equipment = document.getElementById('add_equipment');
		var issue = document.getElementById('issue');
		var equipment_list = document.getElementById('equipment_list');
		var equipment_add_block = document.getElementById('equipment_add_block');
		var form_cancel_btn = document.getElementById('form_cancel_btn');
		var save_btn = document.getElementById('save_btn');
		var vendor_select = document.getElementById('vendor_select');
		var VendorContactPerson = document.getElementById('VendorContactPerson');
		var MobileNumber = document.getElementById('MobileNumber');
		var Own = document.getElementById('Own');
		var Rent = document.getElementById('Rent');

		add_equipment.onclick = function () { 
			equipment_list.style.display = 'none';
			equipment_add_block.style.display = 'block';
		 	console.log("add_equipment") 	

		}
		issue.onclick = function () {
		 	console.log("issue") 	
		}
		form_cancel_btn.onclick = function () {
			equipment_list.style.display = 'block';
			equipment_add_block.style.display = 'none';
		}
		save_btn.onclick = function () {

		}
		vendor_select.onchange = function () {
			VendorContactPerson.value = allVendor[vendor_select.selectedIndex].ContactPerson;
			MobileNumber.value = allVendor[vendor_select.selectedIndex].MobileNo;
		}
		VendorContactPerson.value = allVendor[vendor_select.selectedIndex].ContactPerson;
		MobileNumber.value = allVendor[vendor_select.selectedIndex].MobileNo;

		Own.onchange = function () {
			Rent.checked = !Own.checked
		}
		Rent.onchange = function () {
			Own.checked = !Rent.checked
		}
	  </script>
  </body>
</html>