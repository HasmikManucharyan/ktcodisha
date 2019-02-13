<style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
  </style>
  <div class="container">
	 <div class="row">		
		<div class="col-md-12">
  			<div class="account-box">
		 
 <span style="font-size:18px;"><strong>Diesel Details</strong></span>
<div class="pull-right">&nbsp;&nbsp;&nbsp;</div><a href="<?php echo URL; ?>fuel/add_diesel"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Diesel</button></a>
		  
  <br clear="all" />
<div class="or-box">
 </div>
 
	                            <div class="table-responsive">
                               
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               <th>Sl. No</th>
                                               <th>Date</th>
											   
											   <th>Open Oddo</th>
                                               <th>Close Oddo</th>
                                              
                                               <th></th>
                                               <th></th>
                                               <th></th>
                                               </tr></thead>
         <?php foreach($this->getDieselDetails AS $key=>$value){ ?>
              							<tr>
              
                     						   <td><?php 	echo $value['id']."<br>"?></td>
											   <td><?php	echo $value['datetime']."<br>"?></td>
                                              
                                               <td><?php	echo $value['OpenOddo']."<br>"?></td>
                                               <td><?php	echo $value['CloseOddo']."<br>"?></td>
                                               
                                             
                                               <td><a href="<?php echo URL; ?>fuel/add_diesel/?id=<?php echo $value['id']; ?>"><button class="btn btn-sm btn-info" type="button"><i class="fa fa-edit"></i> EDIT</button></a></td>
                                               <td><a href="<?php echo URL; ?>fuel/view_diesel/?id=<?php echo $value['id']; ?>"><button class="btn btn-sm btn-warning" type="button"><i class="fa fa-edit"></i> VIEW</button></a></td>
                                           		<td><a href="javascript:confirmDelete('delete_diesel/<?php echo $value['id'];?>')"> <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash-o"></i> DELETE</button></a></td>
                                        
                                            
											  <!-- <td><a href="<?php//echo URL; ?>vts/view_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php//echo URL; ?>vts/edit_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_devices/?id=<?php//echo $value['id'];?>&name=<?php//echo $value['name']; ?>&uniqueId=<?php//echo $value['uniqueId']; ?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>-->
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
					"iDisplayLength": 25,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: true
				} );
			} );
		</script>
