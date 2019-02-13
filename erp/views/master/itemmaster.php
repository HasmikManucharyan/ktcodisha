<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/itemmaster">Item Master</a></p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_itemmaster"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
        <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Item Code</th>
                                               <th>Item Type</th>
											   <th>Item Company</th>
											   <th>Item Name</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allItem AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['ItemCode']."<br>"?></td>
											   <td><?php	echo $value['ItemType']."<br>"?></td>
											   <td><?php	echo $value['ItemCompany']."<br>"?></td>
											   <td><?php	echo $value['ItemName']."<br>"?></td>
											    <td><a href="<?php echo URL; ?>master/view_itemmaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_itemmaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_itemmaster/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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