<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>">Master</a></li>
  <li><a href="<?php echo URL; ?>master/customermaster">Customer master</a></li>
  <li>View</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/customermaster">Back</a></li>
</ul> 
<div class="container">
 <div class="container-fluid">
<p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a></p>
<div class="col-md-12">

			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Customer Master</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
 
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>Name</th>
	  <td><?php echo $this->content['name']; ?></td>
      <th>Address</th>
	  <td><?php echo $this->content['address']; ?></td>
	  </tr>
      
	  <tr>
      <th>Contact</th>
	  <td><?php echo $this->content[0]['contact']; ?></td>
      <th>Work Order No</th>
	  <td><?php echo $this->content[0]['workorderno']; ?></td>
	  </tr>
	 
		<tr>
		<th>Rate</th>
		<td><?php echo $this->content[0]['rate']; ?></td>
        <th>Rate</th>
		<td><?php echo $this->content[0]['rate']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
