<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/usercontrol">User Control >> </a>View</p>
<a href="<?php echo URL; ?>master/usercontrol" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>User Control</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>Branch</td>
	  <td><?php echo $this->content[0]['Branch']; ?></td>
	  </tr>
	  <tr>
	  <td>FirstName</td>
	  <td><?php echo $this->content[0]['FirstName']; ?></td>
	  </tr>
	  <tr>
        <td>LastName</td>
		 <td><?php echo $this->content[0]['LastName']; ?></td>
		</tr>
		<tr>
		<td>UserName</td>
		<td><?php echo $this->content[0]['UserName']; ?></td>
		</tr>
		<tr>
	  <td>Password</td>
	  <td><?php echo $this->content[0]['Password']; ?></td>
	  </tr>
	  <tr>
	  <td>ConfirmPassword</td>
	  <td><?php echo $this->content[0]['ConfirmPassword']; ?></td>
	  </tr>
	  <tr>
	  <td>MobileNumber</td>
	  <td><?php echo $this->content[0]['MobileNumber']; ?></td>
	  </tr>
	  <tr>
        <td>EmailId</td>
		 <td><?php echo $this->content[0]['EmailId']; ?></td>
		</tr>
		
    </tbody>
  </table>
  </div>
