<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/employee">Employee >></a>View Salary Master</p>
<a href="<?php echo URL; ?>master/employee" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Salary Master</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>SalaryCode</td>
	  <td><?php echo $this->content[0]['SalaryCode']; ?></td>
	  </tr>
	  <tr>
	  <td>Date</td>
	  <td><?php echo $this->content[0]['Date']; ?></td>
	  </tr>
	  <tr>
        <td>EmployeeName</td>
		 <td><?php echo $this->content[0]['EmployeeName']; ?></td>
		</tr>
		<tr>
		<td>EmployeeCode</td>
		<td><?php echo $this->content[0]['EmployeeCode']; ?></td>
		</tr>
		<tr>
        <td>DateOfJoin</td>
		<td><?php echo $this->content[0]['DateOfJoin']; ?></td>
		</tr>
		<tr>
		<td>BasicSalary</td>
		<td><?php echo $this->content[0]['BasicSalary']; ?></td>
		</tr>
		<tr>
		<td>Housing</td>
		<td><?php echo $this->content[0]['Housing']; ?></td>
		</tr>
		<tr>
		<td>Food</td>
		<td><?php echo $this->content[0]['Food']; ?></td>
		</tr>
		<tr>
		<td>OtherAllowance</td>
		<td><?php echo $this->content[0]['OtherAllowance']; ?></td>
		</tr>
		<tr>
		<td>Total</td>
		<td><?php echo $this->content[0]['Total']; ?></td>
		</tr>
		<tr>
		<td>EffectFrom</td>
		<td><?php echo $this->content[0]['EffectFrom']; ?></td>
		</tr>
		<tr>
		<td>EffectTo</td>
		<td><?php echo $this->content[0]['EffectTo']; ?></td>
		</tr>
    </tbody>
  </table>
</div>