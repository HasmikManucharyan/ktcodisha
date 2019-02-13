    <div class="contact-heading" id="page1">
		   
		     <a href="<?php echo URL; ?>vts/devices"><button type="button" class="btn btn-primary">Devices</button></a>
			 <a href="<?php echo URL; ?>vts/events"><button type="button" class="btn btn-primary">Events</button></a>
			 <a href="<?php echo URL; ?>vts/geofences"><button type="button" class="btn btn-primary">Geofences</button></a>
			<a href="<?php echo URL; ?>vts/geofencetype"><button type="button" class="btn btn-primary">Geofence type</button></a>
			<div class="dropdown">
			<button type="button" class="btn btn-primary">Reports</button>
			<div class="dropdown-content">
				<a href="">Real Time Report</a>
				<a href="">summary</a>
				
			</div>
			</div> 
			
			 <a href="<?php echo URL; ?>vts/groups"><button type="button" class="btn btn-primary">Group</button></a>
		</div>
<p><a href="<?php echo URL; ?>vts/">vts >></a>events</p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>vts/edit_events"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>

 
          
   
	<script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>id</th>
											   <th>type</th>
                                               <th>servertime</th>
											   <th>deviceid</th>
											   <th>positionid</th>
											   <th>geofenceid</th>
											   <th>attributes</th>
											   <th>type_id</th>
											   
											  
                                             </tr></thead>
				<?php foreach($this->Allevents AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['id']."<br>"?></td>
											   <td><?php	echo $value['type']."<br>"?></td>
											   <td><?php	echo $value['servertime']."<br>"?></td>
											   <td><?php	echo $value['deviceid']."<br>"?></td>
											   <td><?php	echo $value['positionid']."<br>"?></td>
											   <td><?php	echo $value['geofenceid']."<br>"?></td>
											   <td><?php	echo $value['attributes']."<br>"?></td>
											   <td><?php	echo $value['type_id']."<br>"?></td>
											   
											   
											  <!-- <td><a href="<?php //echo URL; ?>vts/view_events/?id=<?php //echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php //echo URL; ?>vts/edit_events/?id=<?php //echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_events/<?php //echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>-->
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