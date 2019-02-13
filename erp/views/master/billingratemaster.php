<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a>Billing Rate Master</p>
<a href="<?php echo URL; ?>master/workorder" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_billingratemaster"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
        <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Do Id</th>
                                               <th>Do Code</th>
											   <th>Party Name</th>
											   <th>Rout Name</th>
											   
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allBillingRate AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['DoId']."<br>"?></td>
											   <td><?php	echo $value['DoCode']."<br>"?></td>
											   <td><?php	echo $value['PartyName']."<br>"?></td>
											   <td><?php	echo $value['RoutName']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_billingrate/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_billingratemaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_billingrate/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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