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
  <div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>Activity Log</strong></span> 
         </div>
<!--          <center> <input type="text" id="searchTxt" placeholder="Search"></center><br>-->
         <div class="table-responsive" id="table">
            <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
        										<thead><tr>
                                               
                                               <th>Time</th>
											   
											   <th>Activity</th>
											  
                                               </tr></thead>
             
                                               
				<?php foreach($this->allActivity AS $key=>$value){ ?>
               
           
                        				<tr>
                                        
                                               
											   <td><?php	echo $value['time']."<br>"?></td>
											   <td><?php	echo $value['operations']."<br>"?></td>
											  
                                              
                                          
                                            
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