<br>
<p><a href="<?php echo URL; ?>master/">Master >></a>hsd </p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

    
            <a href="<?php echo URL; ?>master/edit_hsd"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
       
    <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					"PaginationType": "full_numbers"
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead>
											 <tr bgcolor="#cccccc" height="15px">
                                               <th>diselratecode</th>
                                               <th>itemtype</th>
                                               <th>itemname</th>
											   <th>fuelstation</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr>
											 </thead>
											 <?php 
					foreach($this->allHsd AS $key=>$value){
						?>
											 <tr>
                                               <td><?php	echo $value['diselratecode']."<br>"?></td>
											   <td><?php	echo $value['itemtype']."<br>"?></td>
											   <td><?php	echo $value['itemname']."<br>"?></td>
											   <td><?php	echo $value['fuelstation']."<br>"?></td>
											   
											 <td><a href="<?php echo URL; ?>master/view_hsd/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_hsd/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_hsd/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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