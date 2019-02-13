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
	    <script type="text/javascript">
	    	var serverUrl = '<?php echo URL; ?>';
	    	var vendors = JSON.parse('<?php echo json_encode($this->vendors);?>')
	    	var items = JSON.parse('<?php echo json_encode($this->items);?>')
	    	var parts_no = JSON.parse('<?php echo json_encode($this->parts_no);?>')
	    	var quotation = JSON.parse('<?php echo json_encode($this->quotations);?>')
	    </script>
	    <style>
	    #create_block{
	    	display: none;
	    }
		</style>
	</head>
  	<body>
<div class="container nir_con">

	 <div class="my_whitecard quo_i"  id="create_block">
		<div class="nir_title">
			<h3>Quotation create</h3>
		</div>
		<div class="row">
			<div class="col-md-5">
				<table>
					<tr>
						<td>Quotation Number:</td>
						<td>Quo 001</td>
					</tr>
					<tr>
						<td>Vendor Name:</td>
						<td>
							<select class="form-control" id="vendor_selectr">
								<?php foreach ($this->vendors as $vendor) {?>
									<option value="<?=$vendor['FullAddress']?>"><?=$vendor['VendorName']?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Vendor Address:</td>
						<td>
							<textarea id="vendor_address" class="form-control"></textarea>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-3">
				<table>
					<tr>
						<td>Date:</td>
						<td>
							<input type="date" class="form-control" value="<?= date('Y-m-d')?>" id="date_id"/>	
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<table>
					<tr>
						<td>Due Date:</td>
						<td>
							<input type="date" class="form-control" value="<?= date('Y-m-d')?>" id="due_date_id"/>	
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<table id="item_table">
					<tr data-id="1">
						<td>Select item</td>
						<td>
							<p>
								<select class="form-control">
									<?php foreach ($this->items as $item) {?>
										<option><?=$item['ItemName']?></option>
									<?php }?>
								</select>
							</p>
						</td>
					</tr>
					<tr data-id="2">
						<td></td>
						<td>
							<p>
								<select class="form-control">
									<?php foreach ($this->items as $item) {?>
										<option><?=$item['ItemName']?></option>
									<?php }?>
								</select>
							</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-3">
				<table id="parts_select">
					<tr data-id="1">
						<td>Parts no.:</td>
						<td>
							<p class="item_table_sel">
								<select class="form-control">
									<?php foreach ($this->parts_no as $item) {?>
										<option><?=$item['PartsNo']?></option>
									<?php }?>
								</select>
								<button class="sub_btn" type="button" data-id="1">-</button>
							</p>
						</td>
					</tr>
					<tr data-id="2">
						<td>Parts no.:</td>
						<td>
							<p class="item_table_sel">
								<select class="form-control">
									<?php foreach ($this->parts_no as $item) {?>
										<option><?=$item['PartsNo']?></option>
									<?php }?>
								</select>
								<button class="sub_btn" type="button" data-id="2">-</button>
							</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-12 ad_btn_block">
				<button class="ad_btn" id="ad_btn" type="button">+</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="my_submit_btn">
					<ul>
						<li><button type="button" class="btn btn-default nir_sub" id="send_btn">Send </button></li>
						<li><button type="button" class="btn btn-default nir_sub bg_red cancel-btn">Cancel</button></li>
					</ul>
				</div>
			</div>
		</div>
		
		
	</div> 
	<div class="my_whitecard quo_i" id="quotation_table">
		<div class="nir_title">
			<h3>Quotation Pending for Approval</h3>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4>Manager Account</h4>
			</div>
			<div class="col-md-6">
				<a href="file:///home/hovo/Desktop/account_related_files/compare/Compare.html" class="btn btn-default nir_sub pull-right">Compare </a>
			</div>
		</div>
		
		
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="scroll_table">
				  <table class="table table-bordered ven_table">
					<thead>
					  <tr>
						<th>Quotation no</th>
						<th>Vendor Name</th>
						<th>Req Date</th>
						<th>Due Date</th>
						<th>Response Date </th>
						<th>Total Cost</th>
						<th>Status</th>
						<th>Action</th>
						
						
					  </tr>
					</thead>
					<tbody>
					<?php foreach($this->quotations as $quotation) {?>
					  	<tr data-id="<?=$quotation['id']?>" >
							<td><?=$quotation['QuotationNumber']?></td>
							<td><?=$quotation['VendorName']?></td>
							<td><?=$quotation['VendorAddress']?></td>
							<td><?=$quotation['date']?></td>
							<td><?=$quotation['dueDate']?></td>
							<td><?=$quotation['total_cost']?></td>
							<td><?=$quotation['status']?></td>
							<td><button type="button" class="btn btn-default nir_sub edit_quotation" >Edit </button></td>
						</tr>
					  <?php }?>
					 
					  <!--tr class="bottom_text">
						<td colspan="14">Total Price :</td>
						<td colspan="2">300</td>
					  </tr>
					   <tr class="bottom_text">
						<td colspan="14">Tax:</td>
						<td colspan="2"></td>
					  </tr>
					   <tr class="bottom_text">
						<td colspan="14">Discount  :</td>
						<td colspan="2"></td>
					  </tr>
					   <tr class="bottom_text">
						<td colspan="14">Final Amount :</td>
						<td colspan="2"></td>
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
						<li><button type="button" class="btn btn-default nir_sub">Send </button></li>
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

	    	//--- create quotation -------->//
	    	var create_block = document.getElementById('create_block');
	    	var quotation_table = document.getElementById('quotation_table');
	    	var vendor_selectr = document.getElementById('vendor_selectr');
	    	var vendor_address = document.getElementById('vendor_address');
	    	var item_table = document.getElementById('item_table');
	    	var parts_select = document.getElementById('parts_select');
	    	var ad_btn = document.getElementById('ad_btn');
	    	var minus_btn = document.querySelectorAll('.sub_btn');
	    	var send_btn = document.getElementById('send_btn');
	    	var item_table_sel = document.querySelector('.item_table_sel');
	    	var data_id = 3;
	    	vendor_selectr.onchange = function () {
	    		vendor_address.innerTEXT = vendor_selectr.options[vendor_selectr.selectedIndex].value
	    	}

	    	vendor_address.innerHTML = vendor_selectr.options[vendor_selectr.selectedIndex].value

	    	for(var i=0; i<minus_btn.length; i++) {
	    		minus_btn[i].onclick = function (e) {
	    			$(e.target).closest('tr').remove()
	    			$('#item_table tr[data-id='+$(e.target).closest('tr').attr('data-id')+']').remove()
	    		}
	    	}
	    	function append_item() {
	    		var tr = document.createElement('tr');
	    		tr.setAttribute('data-id',data_id) 
	    		var td1 = document.createElement('td');
	    		tr.append(td1);
	    		var td2 = document.createElement('td');
	    		var select = document.createElement('select');
	    		select.className = 'form-control';
	    		var option = "";
	    		for(var i=0; i< items.length; i++) {
	    			option = document.createElement('option');
	    			option.innerHTML =  items[i].ItemName;
	    			select.append(option);
	    			option = null;
	    		}
	    		td2.append(select)
	    		tr.append(td2)
	    		item_table.append(tr)
	    	}
	    	function append_delete_btn(td) {
	    		var buttons = document.createElement('button');
	    		buttons.setAttribute('data-id',data_id) 
	    		buttons.className = 'sub_btn';
	    		buttons.innerHTML = '-';
	    		buttons.onclick = function (e) {
	    			$(e.target).closest('tr').remove()
	    			$('#item_table tr[data-id='+$(e.target).closest('tr').attr('data-id')+']').remove()
	    		}
	    		td.append(buttons);
	    	}
	    	function append_parts_no() {
	    		var tr = document.createElement('tr');
	    		tr.setAttribute('data-id',data_id) 
	    		var td1 = document.createElement('td');
	    		td1.innerHTML = "Parts no.:";
	    		tr.append(td1);
	    		var td2 = document.createElement('td');
	    		var p = document.createElement('p');
	    		p.className = "item_table_sel";
	    		var select = document.createElement('select');
	    		select.className = 'form-control';
	    		var option = "";
	    		for(var i=0; i< parts_no.length; i++) {
	    			option = document.createElement('option');
	    			option.innerHTML =  parts_no[i].PartsNo;
	    			select.append(option);
	    			option = null;
	    		}
	    		p.append(select)
	    		append_delete_btn(p)
	    		td2.append(p)
	    		tr.append(td2)
	    		parts_select.append(tr)
	    	}
	    	
	    	ad_btn.onclick = function(){
	    		append_item();
	    		append_parts_no();
	    		data_id++
	    	}
	    	send_btn.onclick = function () {
	    		var VendorName = vendor_selectr.options[vendor_selectr.selectedIndex].innerHTML;
	    		var VendorAddress = vendor_address.innerHTML;
	    		var data = document.getElementById('date_id').value;
	    		var dueDate = document.getElementById('due_date_id').value;
	    		var ItemName = [];
	    		var PartsNos = [];
	    		var itemSelect = item_table.querySelectorAll('select')
	    		var partsNoSelect = item_table_sel.querySelectorAll('select')
	    		for(var i = 0; i < itemSelect.length; i++) {
	    			ItemName.push(itemSelect[i].options[itemSelect[i].selectedIndex].value);
	    		}
	    		for(var i = 0; i < partsNoSelect.length; i++) {
	    			PartsNos.push(partsNoSelect[i].options[partsNoSelect[i].selectedIndex].value);
	    		}
	    		QuotationNo = 1;

	    		var xhr,
	    		method = 'post',
				overrideMimeType = 'application/form-data',
				url=''+serverUrl+'quotation/add_quotation?QuotationNumber='+QuotationNo+'&VendorName='+VendorName+'&VendorAddress='+VendorAddress+'&data='+data+'&dueData='+data+'&itemName='+ItemName+'&partsNo='+PartsNos;
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
			var cancel_btn = document.querySelector('.cancel-btn');
			cancel_btn.onclick = function () {
				create_block.style.display = "none";
				quotation_table.style.display = "block";
			}
			//<--- create quotation ---------//

			//--- table quotation --------->//
			function fillIn (obj) {
				// var VendorName = vendor_selectr.options[vendor_selectr.selectedIndex].innerHTML;
	   //  		// vendor_address.innerHTML = obj.Vendo;
	    		document.getElementById('date_id').value = obj.date;
	    		document.getElementById('due_date_id').value = obj.dueDate;

	   //  		var itemSelect = item_table.querySelectorAll('select')
	   //  		var partsNoSelect = item_table_sel.querySelectorAll('select')
	   //  		obj.
	   //  		for(var i = 0; i < itemSelect.length; i++) {
	   //  			// itemSelect[i].options[itemSelect[i].selectedIndex].value; 
	   //  		}
	   //  		for(var i = 0; i < partsNoSelect.length; i++) {
	   //  			PartsNos.push(partsNoSelect[i].options[partsNoSelect[i].selectedIndex].value);
	   //  		}
	   //  		QuotationNo = 1;
			}
			var edit_quotation = document.querySelectorAll('.edit_quotation');
			for(var i = 0; i < edit_quotation.length; i++) {
				edit_quotation[i].onclick = function (e) {
					var dataId = e.target.parentNode.parentNode.getAttribute('data-id'); // this tr tag
					var select_quotation;
					for(var l = 0; l < quotation.length; l++ ) {
						if(quotation[l].id == dataId) {
							select_quotation = quotation[l];
							break;
						}
					}
					fillIn(select_quotation);
					create_block.style.display = "block";
					quotation_table.style.display = "none";
				}
			}
			
			//<--- table quotation ---------//
	    </script>
	    <style type="text/css">
	    	table {
	    		width: 100%;
	    	}
	    	select {
	    		min-width: 109px;
	    	}
	    	.sub_btn {
	    		margin-top: 10px;
	    	}
	    	#parts_select select {
	    		float: left;
	    		width: 200px;
	    	}
	    	#parts_select .sub_btn {
	    		float: right;
	    	}
	    	.item_table_sel {
	    		width: 260px;
	    	}
	    	.form-control {
	    		padding: 0px;
	    	}
	    	.ad_btn_block {
	    		text-align: right;
			    max-width: 65%;
			    margin-top: 20px;
	    	}
	    </style>
  	</body>
</html>