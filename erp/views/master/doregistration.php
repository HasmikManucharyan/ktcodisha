<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a>Do Registration</p>
<a href="<?php echo URL; ?>master/workorder" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_doregistration"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
        <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Do Code</th>
                                               <th>Do No/Party</th>
											   <th>P.O No</th>
											   <th>Date Of Party</th>
											   <th>Do Date</th>
											   <th>Do Qty</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allDoRegistration AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['DoCode']."<br>"?></td>
											   <td><?php	echo $value['DoNoParty']."<br>"?></td>
											   <td><?php	echo $value['PONo']."<br>"?></td>
											   <td><?php	echo $value['DateOfParty']."<br>"?></td>
											   <td><?php	echo $value['DoDate']."<br>"?></td>
											   <td><?php	echo $value['DoQty']."<br>"?></td>
											    <td><a href="<?php echo URL; ?>master/view_doregistration/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_doregistration/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_doregistration/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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