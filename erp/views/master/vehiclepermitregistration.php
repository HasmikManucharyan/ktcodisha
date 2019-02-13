 <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
   <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li>Vehicle Permit Registration</li>
 <li class="pull-right"><a href="<?php echo URL; ?>master/vehicle">Back</a></li>
</ul> 
<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-body">Vehicle Master<a href="<?php echo URL; ?>master/edit_vehiclepermitregistration"><button id="btnAdd" type="button" class="btn btn-info pull-right">Add New Record</button></a>
	                            </div>
	                            <div class="panel-body table-responsive">
		<table id="example" class="cell-border" width="100%" cellspacing="0">
		
                                             <thead><tr>
                                               <th>Entry Date</th>
											   <th>Vehicle No</th>
											   <th>Vehicle Type</th>
                                               <th>Vehicle Code</th> 
											   <th>Permit No</th>
											   <th>Permit Start</th>
											   <th>Permit Expiry</th>
											   <th>Permit Amount</th>
											  
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allPermitRegistration AS $key=>$value){
						?>
											 <tr>
                                               <td><?php	echo $value['EntryDate']."<br>"?></td>
											   <td><?php	echo $value['VehicleNo']."<br>"?></td>
											    <td><?php	echo $value['vehicleType']."<br>"?></td>
											   <td><?php	echo $value['VehicleCode']."<br>"?></td>
											   <td><?php	echo $value['PermitNo']."<br>"?></td>
											   <td><?php	echo $value['PermitStart']."<br>"?></td>
											   <td><?php	echo $value['PermitExpiry']."<br>"?></td>
											   <td><?php	echo $value['PermitAmmount']."<br>"?></td>
											    <td><a href="<?php echo URL; ?>master/view_vehiclepermit/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_vehiclepermitregistration/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_vehiclepermit/<?php echo $value['id'];?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>
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




