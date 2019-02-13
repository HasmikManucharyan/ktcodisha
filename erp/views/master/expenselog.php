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
		 
 <span style="font-size:18px;"><strong>Expense Log</strong></span>
 <div class="pull-right">&nbsp;&nbsp;&nbsp;</div><?php if(Roles::handleRole("master/expense")>0){ ?><a href="<?php echo URL; ?>master/add_expenselog"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Expense</button></a>
		<?php } ?>  
  <br clear="all" />
<div class="or-box">
 </div>
 
	                            <div class="table-responsive">
                               
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               
                                               
                                               <th>Vehicle No</th>
                                               <th>Category</th>
                                               <th>Date</th>
											   <th>accounthead</th>
                                               <th>Service</th>
                                               <th>Workshop Name</th>
												<th>Estimate Amount</th>
                                                <?php if(Roles::handleRole("master/user")>0){ ?>
											   <th></th>
											  <?php } ?>
                                             </tr></thead>
				<?php foreach($this->allexpense AS $key=>$value){
						?>
								<tr>
										<td align="center"><?php echo $value['VehicleNo']."<br>"?></td>
                                        <td align="center"><?php echo $value['category']."<br>"?></td>
                                     	<td align="center"><?php echo $value['date']."<br>"?></td>
                                        <td align="center"><?php echo $value['accounthead']."<br>"?></td>
										<td align="center"><?php echo $value['service']."<br>"?></td>
                                        <td align="center"><?php echo $value['workshopname']."<br>"?></td>
										<td align="center"><?php echo $value['amount']."<br>"?></a>
								</td>
                                <?php if(Roles::handleRole("master/user")>0){ ?>
								<td>
                                		<a href="<?php echo URL; ?>master/view_expenselog/?id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a>
                                </td>
                                <?php } ?>
											 
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
