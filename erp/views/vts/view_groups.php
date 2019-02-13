
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>vts">VTS</a></li>
   <li><a href="<?php echo URL; ?>vts/groups">Groups</a></li>
    <li class="pull-right"><a href="<?php echo URL; ?>vts/groups">Back</a></li>
   <li>view Groups</li>

</ul> 
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-heading">View Groups</div>
	                    <div class="panel-body table-responsive">  
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content['id']; ?></td>
	  <th>attributes</th>
	  <td><?php echo $this->content['attributes']; ?></td>
	  </tr>
	  <tr>
	  <th>Name</th>
	  <td><?php echo $this->content['name']; ?></td>
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