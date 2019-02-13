<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>">Master</a></li>
  <li><a href="<?php echo URL; ?>master/expenselog">Expense Log</a></li>
  <li>View</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/expenselog">Back</a></li>
</ul> 
<div class="container">
 <div class="container-fluid">
<p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a></p>
<div class="col-md-12">

			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Expense</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
 
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>VehicleNo</th>
	  <td><?php echo $this->content['VehicleNo']; ?></td>
      <th>service</th>
	  <td><?php echo $this->content['service']; ?></td>
	  </tr>
      
	  <tr>
      <th>workshopname</th>
	  <td><?php echo $this->content[0]['workshopname']; ?></td>
      <th>estimateamount</th>
	  <td><?php echo $this->content[0]['estimateamount']; ?></td>
	  </tr>
	 
		<tr>
		<th>maintenancedate</th>
		<td><?php echo $this->content[0]['maintenancedate']; ?></td>
        <th>expensetotal</th>
		<td><?php echo $this->content[0]['expensetotal']; ?></td>
		</tr>
        
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
