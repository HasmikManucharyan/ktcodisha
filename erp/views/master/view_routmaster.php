<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/routmaster">Rout Master >> </a>View</p>
<a href="<?php echo URL; ?>master/routmaster" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Rout Master</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>RoutCode</td>
	  <td><?php echo $this->content[0]['RoutCode']; ?></td>
	  </tr>
	  <tr>
	  <td>RoutName</td>
	  <td><?php echo $this->content[0]['RoutName']; ?></td>
	  </tr>
	  <tr>
        <td>DoPoNo</td>
		 <td><?php echo $this->content[0]['DoPoNo']; ?></td>
		</tr>
		<tr>
		<td>MaterialGrade</td>
		<td><?php echo $this->content[0]['MaterialGrade']; ?></td>
		</tr>
		<tr>
        <td>ShortageRate</td>
		<td><?php echo $this->content[0]['ShortageRate']; ?></td>
		</tr>
		<tr>
		<td>Deduct</td>
		<td><?php echo $this->content[0]['Deduct']; ?></td>
		</tr>
		<tr>
		<td>DriverTripComm</td>
		<td><?php echo $this->content[0]['DriverTripComm']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
