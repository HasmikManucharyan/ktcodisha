
<br>
<br>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_partymaster"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>

   
	<script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Party Name</th>
                                               <th>Party Code</th>
											   <th>Contact Person</th>
											   <th>PANNO</th>
											   <th>Mobile No</th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allPartyMaster AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['PartyName']?></td>
											   <td><?php	echo $value['PartyCode']?></td>
											   <td><?php	echo $value['ContactPerson']?></td>
											   <td><?php	echo $value['PANNO']?></td>
											   <td><?php	echo $value['MobileNo']?></td>
											   <td><a href="<?php echo URL; ?>master/edit_partymaster/?PartyCode=<?php echo $value['PartyCode']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_partymaster/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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





