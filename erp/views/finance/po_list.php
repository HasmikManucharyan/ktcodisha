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
	    	input:focus{
	    		border:1px #57c059 solid;
	    		outline: none;
	    	}
	    	select{
	    		border:1px #57c059 solid;
	    		outline: none;
	    		background-color: #fff;
	    		color:#333;
	    	}
	    	#btnAdd:focus, #edit:focus, #view:focus, #generate_po:focus, #send:focus, #save:focus{
	    		background-color: #57c059;
	    		color:#fff;
	    		outline: none;
	    	}
	    </style>
	    <script type="text/javascript">
	    	var vendors = JSON.parse('<?php echo json_encode($this->vendors);?>')
	    	var pos = JSON.parse('<?php echo json_encode($this->pos);?>')
	    	var quotations = JSON.parse('<?php echo json_encode($this->quotations);?>')

	    </script>
  	</head>
  	<body>
		<div class="container nir_con" >
			<div class="my_whitecard quo_i" id="po_list">
				<div class="nir_title">
					<h3>PO Listing</h3>
				</div>
				<div class="row">
					<!--div class="col-md-6">
						<h4>Manager Account</h4>
					</div-->
					<div class="col-md-12">
						<button type="button" class="btn btn-default nir_sub pull-right" id="generate_po">Generate PO </button>
					</div>
				</div>
				
				
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="scroll_table">
						  <table class="table table-bordered ven_table">
							<thead>
							  <tr>
								<th>PO ID</th>
								<th>PO Number </th>
								<th>Created By</th>
								<th>Sent From</th>
								<th>Approver</th>
								<th>Vendor Name </th>
								<th>Item Ordered</th>
								<th>Total Cost </th>
								<th>Status </th>
								<th>Actions</th>
								
							  </tr>
							</thead>
							<tbody>
								<?php foreach ($this->pos as $po) {?>
							  <tr>
								<td><?=$po['id']?> </td>
								<td><?=$po['purchaseorderno']?></td>
								<td><?=$po->purchaseorderno?></td>
								<td><?=$po->purchaseorderno?></td>
								<td><?=$po->purchaseorderno?></td>
								<td><?=$po->purchaseorderno?></td>
								<td>10</td>
								<td>6000</td>
								<td>Pending</td>
								<td><button type="button" class="btn btn-default nir_sub" id="edit">Edit </button></td>
							  </tr>
							  
							  
							   <tr class="bottom_text">
								<td colspan="9">Sent to Vendo:</td>
								<td class="text-left">1527</td>
								
							  </tr>
							   <tr class="bottom_text">
								<td colspan="9">Vendor Approved:</td>
								<td><button type="button" class="btn btn-default nir_sub" id="view">View </button></td>
								
							  </tr>
							   <tr class="bottom_text">
								<td colspan="9">Vendor Rejected:</td>
								<td class="text-left">1527</td>
								
							  </tr>
							  
							
							 <?php }?>
							</tbody>
						  </table>
						  </div>
					</div>
				</div>
				<!--div class="row">
					<div class="col-md-6">
						<table>
							<tr>
								<td>Select final Vendor</td>
								<td><select class="nir_select form-control">
									<option>Aditya Motors</option>
									<option>Aditya Motors</option>
									<option>Aditya Motors</option>
								</select></td>
							</tr>
							
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<td>Quotation Number</td>
								<td><input class="nir_form" type="text" value="100" placeholder=""/></td>
							</tr>
							
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="my_submit_btn">
							<ul>
								<li><button type="button" class="btn btn-default nir_sub bg_org">Reject </button></li>
								<li><button type="button" class="btn btn-default nir_sub">Approve </button></li>
								<li><button type="button" class="btn btn-default nir_sub bg_red">Cancel</button></li>
							</ul>
						</div>
					</div>
				</div-->
				
				
			</div>
		</div>	
	<div class="my_whitecard quo_i" id="generate_po_block">
		<div class="nir_title">
			<h3>PO generation</h3>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<table >
					<tr>
						<td>PO no </td>
						<td><input class="nir_form" type="text" value="PO 10012" placeholder=""/></td>
					</tr>
					
					<tr>
						<td>Quotation No</td>
						<td>
							<select class="nir_select_new">
								<?php foreach($this->quotations as $quotation) {?>
									<option><?php echo $vendor['VendorName']; ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Vendor Name</td>
						<td>
							<select class="nir_select_new">
								<?php foreach($this->vendors as $vendor) {?>
								<option><?php echo $vendor['VendorName']; ?></option>
								<?php }?>
							</select>
							
						</td>
					</tr>
					
				</table>
			</div>
			<div class="col-md-4">
				<table>
					<tr>
						<td>PO Date</td>
						<td><input class="nir_form" type="date" value="" placeholder=""/></td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<table>
					<tr>
						<td>Due Date</td>
						<td><input class="nir_form" type="date" value="" placeholder=""/></td>
					</tr>
				</table>
			</div>
			<!--div class="col-md-12">
				<button type="button" class="btn btn-default nir_sub pull-right">Generate New Good Receipt Voucher</button>
			</div-->
		</div>
		
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="scroll_table" >
			
				<div id="addtable">
					<div>
				<table>
					<tr>
						<td>Item</td>
						<td>
							<select class="nir_select_new">
								<option>Select</option>
								<option>option</option>
							</select>
						</td>
						<td>Parts No</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>Unit</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>Qty</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>Cost</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>GST%</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>GST</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						</tr>
						<tr>
						<td>CGST%</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>CGST</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>SGST%</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>IGST%</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>IGST</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>Discount</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						<td>Total</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
						
					</tr>
				</table>
				<hr>
				</div>
				</div>
				
				<div class="text-right">
					<button type="button" onclick="addnewtable();" id="btnAdd" class="btn btn-default nir_sub ">+</button>
					<button type="button" onclick="removenewtable();"  class="btn btn-default nir_sub bg_red ">-</button>
				</div>
				</div>
			</div>
		</div>
		<hr>
		
	
		
		
		
		<div class="row">
			<div class="col-md-6">
				<table class="lef_td_width">
				
					<tr>
						<td>Approver</td>
						<td>
							<select class="nir_select_new">
								<option>Select</option>
								<option>option</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Send to:</td>
						<td>
							<select class="nir_select_new">
								<?php foreach($this->vendors as $vendor) {?>
								<option><?php echo $vendor['VendorName']; ?></option>
								<?php }?>
							</select>
							
						</td>
					</tr>
					
				</table>
			</div>
			<div class="col-md-6">
				<table>
					<tr>
						<td>Net Amount</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
					</tr>
					<tr>
						<td>Tax %</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
					</tr>
					<tr>
						<td>Discount</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><input class="nir_form" type="text" value="" placeholder=""/></td>
					</tr>
					
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
						<li><button type="button" class="btn btn-default nir_sub" id="send">Send </button></li>
						<li><button type="button" class="btn btn-default nir_sub" id="save">Save </button></li>
						<li><button type="button" class="btn btn-default nir_sub bg_red" id="cansel">Cancel</button></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		
		
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
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
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo URL?>public1/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL?>public1/js/bootstrap.min.js"></script>
	<script>
	var counter=1;
    function addnewtable()
	{   counter+=1; 
		var table='<div id="'+counter+'" ><table>'+
					'<tr>'+
						'<td>Item</td>'+
						'<td>'+
							'<select class="nir_select_new">'+
								'<option>Select</option>'+
								'<option>option</option>'+
							'</select>'+
						'</td>'+
						'<td>Parts No</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>Unit</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>Qty</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>Cost</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>GST%</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>GST</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'</tr>'+
						'<tr>'+
						'<td>CGST%</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>CGST</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>SGST%</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>IGST%</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>IGST</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>Discount</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						'<td>Total</td>'+
						'<td><input class="nir_form" type="text" value="" placeholder=""/></td>'+
						
					'</tr>'+
				'</table>	<hr></div>';
		$("#addtable").append(table);
	}
	function removenewtable()
	{
		if(counter!=1){
			$("#"+counter).remove();
			counter-=1;
		}
		
	}
	var generate_po = document.getElementById('generate_po');
	var generate_po_block = document.getElementById('generate_po_block');
	var po_list = document.getElementById('po_list');
	var cansel = document.getElementById('cansel');
	generate_po_block.style.display = 'none';
		generate_po.onclick = function () {
			generate_po_block.style.display = 'block';
			po_list.style.display = 'none';
		}
		cansel.onclick = function () {
			generate_po_block.style.display = 'none';
			po_list.style.display = 'block';
		}
	</script>
  	</body>
</html>