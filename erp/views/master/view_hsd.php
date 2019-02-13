<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/hsd">hsd >></a> View</p>
<a href="<?php echo URL; ?>master/hsd" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>HSD</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>diselratecode</td>
	  <td><?php echo $this->content[0]['diselratecode']; ?></td>
	  </tr>
	  <tr>
	  <td>itemtype</td>
	  <td><?php echo $this->content[0]['itemtype']; ?></td>
	  </tr>
	  <tr>
        <td>itemname</td>
		 <td><?php echo $this->content[0]['itemname']; ?></td>
		</tr>
		<tr>
		<td>fuelstation</td>
		<td><?php echo $this->content[0]['fuelstation']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
