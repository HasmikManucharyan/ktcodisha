<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a>Rout Master</p>
<a href="<?php echo URL; ?>master/workorder" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_routmaster"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
        <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Rout Code</th>
                                               <th>Rout Name</th>
											   <th>Do/Po No</th>
											   <th>Material/Grade</th>
											   <th>Shortage Rate</th>
											   <th>Driver Trip Comm</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allRoutMaster AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['RoutCode']."<br>"?></td>
											   <td><?php	echo $value['RoutName']."<br>"?></td>
											   <td><?php	echo $value['DoPoNo']."<br>"?></td>
											   <td><?php	echo $value['MaterialGrade']."<br>"?></td>
											   <td><?php	echo $value['ShortageRate']."<br>"?></td>
											    <td><?php	echo $value['DriverTripComm']."<br>"?></td>
												<td><a href="<?php echo URL; ?>master/view_routmaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_routmaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_routmaster/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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