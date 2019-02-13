
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>vts">VTS</a></li>
   <li><a href="<?php echo URL; ?>vts/customer">customer</a></li>
   <li>view Customer</li>
<li class="pull-right"><a href="<?php echo URL; ?>vts/customer">Back</a></li>
</ul> 
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-heading">View Customer</div>
	                    <div class="panel-body table-responsive">  
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>name</th>
	  <td><?php echo $this->content['name']; ?></td>
	  <th>email</th>
	  <td><?php echo $this->content['email']; ?></td>
	  </tr>
	  <tr>
	  <th>Group Id</th>
	  <td><?php echo $this->content['groupId']; ?></td>
	  </tr>
	  </tbody>
	 </table>
</div>
</div>
</div>
</div>
</div>