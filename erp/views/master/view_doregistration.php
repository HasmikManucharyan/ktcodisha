<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/doregistration">Do Registration >> </a>View</p>
<a href="<?php echo URL; ?>master/doregistration" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Do Registration</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>DoCode</td>
	  <td><?php echo $this->content[0]['DoCode']; ?></td>
	  </tr>
	  <tr>
	  <td>DoNoParty</td>
	  <td><?php echo $this->content[0]['DoNoParty']; ?></td>
	  </tr>
	  <tr>
        <td>PONo</td>
		 <td><?php echo $this->content[0]['PONo']; ?></td>
		</tr>
		<tr>
		<td>DateOfParty</td>
		<td><?php echo $this->content[0]['DateOfParty']; ?></td>
		</tr>
		<tr>
		<td>DoDate</td>
		<td><?php echo $this->content[0]['DoDate']; ?></td>
		</tr>
		<tr>
		<td>ExpireDate</td>
		<td><?php echo $this->content[0]['ExpireDate']; ?></td>
		</tr>
		<tr>
		<td>MinesName</td>
		<td><?php echo $this->content[0]['MinesName']; ?></td>
		</tr>
		<tr>
		<td>CoalGrade</td>
		<td><?php echo $this->content[0]['CoalGrade']; ?></td>
		</tr>
		<tr>
		<td>DoQty</td>
		<td><?php echo $this->content[0]['DoQty']; ?></td>
		</tr>
		<tr>
		<td>AllotmentQty</td>
		<td><?php echo $this->content[0]['AllotmentQty']; ?></td>
		</tr>
		<tr>
		<td>BiltyCommission</td>
		<td><?php echo $this->content[0]['BiltyCommission']; ?></td>
		</tr>
    </tbody>
  </table>
</div>