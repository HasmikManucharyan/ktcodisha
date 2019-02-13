<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >> </a><a href="<?php echo URL; ?>master/itemmaster">Item Master >> </a>View</p>
<a href="<?php echo URL; ?>master/itemmaster" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Item Master</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>ItemCode</td>
	  <td><?php echo $this->content[0]['ItemCode']; ?></td>
	  </tr>
	  <tr>
	  <td>ItemType</td>
	  <td><?php echo $this->content[0]['ItemType']; ?></td>
	  </tr>
	  <tr>
        <td>ItemCompany</td>
		 <td><?php echo $this->content[0]['ItemCompany']; ?></td>
		</tr>
		<tr>
		<td>CatagoryName</td>
		<td><?php echo $this->content[0]['CatagoryName']; ?></td>
		</tr>
		<tr>
	  <td>ItemName</td>
	  <td><?php echo $this->content[0]['ItemName']; ?></td>
	  </tr>
	  <tr>
	  <td>UnitName</td>
	  <td><?php echo $this->content[0]['UnitName']; ?></td>
	  </tr>
    </tbody>
  </table>
</div>
