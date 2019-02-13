<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/employee">employee</a></p>
<a href="<?php echo URL; ?>master" class="btn btn-info" role="button">Back</a>

            <a href="<?php echo URL; ?>master/edit_salarymaster"><button id="btnAdd" type="button" class="gj-button pull-right">Add New Record</button></a>
               <script>
			$(document).ready(function() {
				$('#example').dataTable( {
					
				} );
			} );
		</script>
		<table width="100%" cellspacing="1" cellpadding="3" id="example" class="display table table-bordered">
		
                                             <thead><tr bgcolor="#cccccc" height="15px">
                                               
                                               <th>Salary Code</th>
                                               <th>Date</th>
											   <th>Employee Name</th>
											   <th>Employee Code</th>
											   <th>Date Of Join</th>
											   <th>Basic Salary</th>
											   <th></th>
											   <th></th>
											   <th></th>
                                             </tr></thead>
											 <?php 
					foreach($this->allSalary AS $key=>$value){
						?>
											 <tr>
                                               
											   <td><?php	echo $value['SalaryCode']."<br>"?></td>
											   <td><?php	echo $value['Date']."<br>"?></td>
											   <td><?php	echo $value['EmployeeName']."<br>"?></td>
											   <td><?php	echo $value['EmployeeCode']."<br>"?></td>
											   <td><?php	echo $value['DateOfJoin']."<br>"?></td>
											   <td><?php	echo $value['BasicSalary']."<br>"?></td>
											   <td><a href="<?php echo URL; ?>master/view_salarymaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">View</a></td>
											   <td><a href="<?php echo URL; ?>master/edit_salarymaster/?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_salarymaster/<?php echo $value['id'];?>')" class="btn btn-info" role="button">Delete</a></td>
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