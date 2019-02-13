<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/billingratemaster">Billing Rate Master >> </a>View</p>
<a href="<?php echo URL; ?>master/billingratemaster" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Billing Rate Master</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>DoId</td>
	  <td><?php echo $this->content[0]['DoId']; ?></td>
	  </tr>
	  <tr>
	  <td>DoCode</td>
	  <td><?php echo $this->content[0]['DoCode']; ?></td>
	  </tr>
	  <tr>
        <td>PartyName</td>
		 <td><?php echo $this->content[0]['PartyName']; ?></td>
		</tr>
		<tr>
		<td>RoutName</td>
		<td><?php echo $this->content[0]['RoutName']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
