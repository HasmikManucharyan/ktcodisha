<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/usercontrol">User Control</a></p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_usercontrol"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
          <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Branch</th>
                                               <th>First Name</th>
											   <th>Last Name</th>
											   <th>User Name</th>
											   <th>Password</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allUserControl AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['Branch']."<br>"?></td>
											   <td><?php	echo $value['FirstName']."<br>"?></td>
											   <td><?php	echo $value['LastName']."<br>"?></td>
											   <td><?php	echo $value['UserName']."<br>"?></td>
											   <td><?php	echo $value['Password']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_usercontrol/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_usercontrol/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_usercontrol/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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