<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/expiryalert">Expiry Alert</a></p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_expiryalert"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
        <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Alert Code</th>
                                               <th>No Of Insurance Alert Days</th>
											   <th>No Of Fitness Alert Days</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allExpiryAlert AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['AlertCode']."<br>"?></td>
											   <td><?php	echo $value['NoOfInsuranceAlertDays']."<br>"?></td>
											   <td><?php	echo $value['NoOfFitnessAlertDays']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_expiryalert/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_expiryalert/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_expiryalert/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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