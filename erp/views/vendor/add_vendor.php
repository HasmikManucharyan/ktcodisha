<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quotation create</title>
    <!-- Bootstrap -->
    <link href="<?php echo URL; ?>public1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public1/css/style1.css" rel="stylesheet">
  </head>
  <body>

<div class="container nir_con">
	<div class="my_whitecard quo_i">
		<div class="nir_title">
			<h3>Add Vendor</h3>
		</div>
			<div class="row">
			<div class="col-md-6">
				<table>
					<tr>
						<td>Vendor Code</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="VendorCode" /></td>
					</tr>
					<tr>
						<td>Vendor Name</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="VendorName"/></td>
					</tr>
					<tr>
						<td>Vendor Contact Name</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="VendorContactName"/></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table>
						<tr>
						<td>Address</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="Address"/></td>
					
						<tr>
						<td>Mobile Number</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="MobileNumber"/></td>
					</tr>
						<tr>
						<td>Email Address</td>
						<td><input class="nir_form" type="text" value="" placeholder="" id="EmailAddress"/></td>
				</table>
			
			</div>
			<!--div class="col-md-12">
				<button type="button" class="btn btn-default nir_sub pull-right">Generate New Good Receipt Voucher</button>
			</div-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="my_submit_btn">
					<ul>
						<!--li><button type="button" class="btn btn-default nir_sub bg_org">Reject </button></li-->
						<li><button type="button" class="btn btn-default nir_sub" id="save_vendor_btn">Save </button></li>
						<!--li><button type="button" class="btn btn-default nir_sub bg_red">Cancel</button></li-->
					</ul>
				</div>
			</div>
		</div>
		<hr>
	
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="scroll_table">
				  <table class="table table-bordered ven_table">
					<thead>
					  <tr>
						<th>Sr No. </th>
						<th> Vendor Name</th>
						<th>Vendor Contact Name </th>
						<th>Mobile Number</th>
						<th colspan="3">Actions</th>
					
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>01</td>
						<td>Vendor 1</td>
						<td>Contact 1</td>
						<td>9861002233</td>
						
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						<td><button type="button" class="btn btn-default nir_sub">Edit </button></td>
						<td><button type="button" class="btn btn-default nir_sub bg_red">Delete </button></td>
					  </tr>
					  <tr>
						<td>02</td>
						<td>Vendor 1</td>
						<td>Contact 1</td>
						<td>9861002233</td>
						
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						<td><button type="button" class="btn btn-default nir_sub">Edit </button></td>
						<td><button type="button" class="btn btn-default nir_sub bg_red">Delete </button></td>
					  </tr>
					  <tr>
						<td>03</td>
						<td>Vendor 1</td>
						<td>Contact 1</td>
						<td>9861002233</td>
						
						<td><button type="button" class="btn btn-default nir_sub">View </button></td>
						<td><button type="button" class="btn btn-default nir_sub">Edit </button></td>
						<td><button type="button" class="btn btn-default nir_sub bg_red">Delete </button></td>
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
						<li><button type="button" class="btn btn-default nir_sub">Save </button></li>
						<li><button type="button" class="btn btn-default nir_sub bg_red">Cancel</button></li>
					</ul>
				</div>
			</div>
		</div-->
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo URL?>public1/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL?>public1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	var save_vendor_btn = document.getElementById('save_vendor_btn');
    	var VendorCode = document.getElementById('VendorCode');
    	var VendorName = document.getElementById('VendorName');
    	var VendorContactName = document.getElementById('VendorContactName');
    	var Address = document.getElementById('Address');
    	var MobileNumber = document.getElementById('MobileNumber');
    	var EmailAddress = document.getElementById('EmailAddress');


    	save_vendor_btn.onclick = function () {
    		var vc = VendorCode.value
    		var vn = VendorName.value
    		var vcn = VendorContactName.value
    		var va = Address.value
    		var vm = MobileNumber.value
    		var vea = EmailAddress.value
    		var xhr,
	    		method = 'post',
				overrideMimeType = 'application/form-data',
				url=''+serverUrl+'master/edit_submit_vendor?VendorCode='+vc+'&VendorName='+vn+'&VendorContactName='+vcn+'&FullAddress='+va+'&MobileNumber='+vm+'&EmailId='+vea
    		if (window.XMLHttpRequest) {
		         // code for IE7+, Firefox, Chrome, Opera, Safari
		        xhr = new XMLHttpRequest()
		    }
		    else {
		         // code for IE6, IE5
		        xhr = new ActiveXObject("Microsoft.XMLHTTP");
		    }
			xhr.open(method, url, true )
			xhr.setRequestHeader('Content-type', overrideMimeType);
			xhr.onreadystatechange = function () {
				if (xhr.readyState === xhr.DONE && xhr.status === 200) {
				   	console.log("yes")
				}
				
			};
			xhr.send();
    	}

    </script>
  </body>
</html>