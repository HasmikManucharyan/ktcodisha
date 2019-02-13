<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li>Vehicle Insurance Registration</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/vehicle">Back</a></li>
</ul> 
	<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-body">Vehicle Insurance Registration <a href="<?php echo URL; ?>master/edit_vehicleinsuranceregistration"><button id="btnAdd" type="button" class="btn btn-info pull-right">Add New Record</button></a>
	                            </div>
	                            <div class="panel-body table-responsive">
		<table id="example" class="cell-border" width="100%" cellspacing="0">
                                               <thead><tr>
                                               <th>Vehicle Code</th>
                                               <th>Vehicle No</th>
											   <th>Vehicle Type</th>
											   <th>InsuranceNo</th>
											   <th>InsuranceValue</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allInsuranceDetails AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['VehicleCode']."<br>"?></td>
											   <td><?php	echo $value['VehicleNo']."<br>"?></td>
											   <td><?php	echo $value['VehicleType']."<br>"?></td>
											   <td><?php	echo $value['InsuranceNo']."<br>"?></td>
											   <td><?php	echo $value['InsuranceValue']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_vehicleinsurance/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_vehicleinsuranceregistration/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_vehicleinsurance/<?php echo $value['id'];?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>
											   </tr>
											
					<?php } ?>
</table>	
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
//$('#example_filter').next('input').val("test");

$( document ).ready(function() {
  $('#example_filter label input[type=text]').val('<?php echo $_GET['VehicleNo']; ?>').trigger($.Event("keyup", { keyCode: 13 }));

//alert("ok");
});
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




