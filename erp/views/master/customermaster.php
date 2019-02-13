 <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
  <li>Customer Master</li>
<li class="pull-right"><a href="<?php echo URL; ?>master/vehicle">Back</a></li>
</ul> 
 <div class="content">
	            <div class="container-fluid">
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-body">Customer Master<a href="<?php echo URL; ?>master/edit_customermaster"><button id="btnAdd" type="button" class="btn btn-info pull-right">Add New Record</button></a></div>
	                    <div class="panel-body table-responsive">  
	                   
		<table id="example" class="cell-border" width="100%" cellspacing="0">
		
                                             <thead><tr>
                                               
                                               
                                               <th>Name</th>
                                               <th>Address</th>
						<th>Contact</th>
										<th>Workorder No</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
				<?php foreach($this->allcustomer AS $key=>$value){
						?>
											 <tr>
                                               
											   
											   <td align="center"><?php	echo $value['name']."<br>" ?></td>
											   <td align="center"><?php	echo $value['address']."<br>"?></td>
											   <td align="center"><?php	echo $value['contact']."<br>"?></td>
<td align="center"><?php	echo $value['workorderno']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_customermaster/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_customermaster/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_customermaster/<?php echo $value['id'];?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>
											   </tr>
											
					<?php } ?>
</table>	
</div>
</div>
</div>

</div>
</div>
           <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
<script>

			$(document).ready(function() {
				$('#example').dataTable( {
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: true
				} );
			} );
		</script>