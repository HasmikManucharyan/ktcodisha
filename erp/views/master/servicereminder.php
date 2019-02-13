<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/servicereminder">Service Reminder</a></p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_servicereminder"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
         <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Service Id</th>
                                               <th>Vehicle No</th>
											   <th>Engine Oil Service Due</th>
											   <th>Axel Oil Service Due</th>
											   <th>Gear Oil Service Due</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allService AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['ServiceId']."<br>"?></td>
											   <td><?php	echo $value['VehicleNo']."<br>"?></td>
											   <td><?php	echo $value['EngineOilServiceDue']."<br>"?></td>
											   <td><?php	echo $value['AxelOilServiceDue']."<br>"?></td>
											   <td><?php	echo $value['GearOilServiceDue']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_servicereminder/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_servicereminder/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_servicereminder/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
											   </tr>
											
					<?php } ?>
</table>	

            <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>	