
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>vts">VTS</a></li>
   <li><a href="<?php echo URL; ?>vts/devices">Devices</a></li>
   <li>view Devices</li>

</ul> 
<div class="content">
	            <div class="container-fluid">
<p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a></p>
<div class="col-md-12">

			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Devices</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content['id']; ?></td>
	  <th>name</th>
	  <td><?php echo $this->content['name']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>uniqueid</th>
	  <td><?php echo $this->content['uniqueId']; ?></td>
	  <th>lastupdate</th>
	  <td><?php echo $this->content['lastUpdate']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>positionid</th>
	  <td><?php echo $this->content['positionid']; ?></td>
	  <th>groupid</th>
	  <td><?php echo $this->content['groupname']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>attributes</th>
	  <td><?php echo $this->content['attributes']; ?></td>
	  <th>phone</th>
	  <td><?php echo $this->content['phone']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>model</th>
	  <td><?php echo $this->content['model']; ?></td>
	  <th>contact</th>
	  <td><?php echo $this->content['contact']; ?></td>
	  </tr>
	   
	  <tr>
	  <th>category</th>
	  <td><?php echo $this->content['category']; ?></td>
	  <th></th>
	  <td></td>
	  </tr>
	 
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>