<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Vehicle Insurance Registration >> </a>View</p>
<a href="<?php echo URL; ?>master/vendor" class="btn btn-info" role="button">Back</a>


<div class="container">
 <center><h1>Vehicle Insurance Registration</h1></center>
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  <th>VendorCode</th>
	  <td><?php echo $this->content[0]['VendorCode']; ?></td>
	  </tr>

	  <tr>
	  <th>VendorName</th>
	  <td><?php echo $this->content[0]['VendorName']; ?></td>
	  <th>VendorShortName</th>
	  <td><?php echo $this->content[0]['VendorShortName']; ?></td>
	  </tr>
	  
		<tr>
		<th>FullAddress</th>
		<td><?php echo $this->content[0]['FullAddress']; ?></td>
		<th>CityName</th>
		<td><?php echo $this->content[0]['CityName']; ?></td>
		</tr>
		
		<tr>
		<th>StateName</th>
		<td><?php echo $this->content[0]['StateName']; ?></td>
		<th>ContactPerson</th>
		<td><?php echo $this->content[0]['ContactPerson']; ?></td>
		</tr>
		
		<tr>
		<th>PANNO</th>
		<td><?php echo $this->content[0]['PANNO']; ?></td>
		<th>TINNO</th>
		<td><?php echo $this->content[0]['TINNO']; ?></td>
		</tr>
		
		<tr>
		<th>MobileNo</th>
		<td><?php echo $this->content[0]['MobileNo']; ?></td>
		<th>Fax</th>
		<td><?php echo $this->content[0]['Fax']; ?></td>
		</tr>
		
		<tr>
		<th>EmailId</th>
		<td><?php echo $this->content[0]['EmailId']; ?></td>
		<th>SSTNO</th>
		<td><?php echo $this->content[0]['SSTNO']; ?></td>
		</tr>
		
		<tr>
		<th>CSTNO</th>
		<td><?php echo $this->content[0]['CSTNO']; ?></td>
		<th>BankName</th>
		<td><?php echo $this->content[0]['BankName']; ?></td>
		</tr>
		
		<tr>
		<th>BankAccNo</th>
		<td><?php echo $this->content[0]['BankAccNo']; ?></td>
		<th>IFCCode</th>
		<td><?php echo $this->content[0]['IFCCode']; ?></td>
		</tr>
		
	  <tr>
		<th>File Upload</th>
		
		<td>
		<?php foreach($this->contentFiles1 AS $key=>$value){ ?>
		<a href="<?php echo URL; ?>public/attachment/insurance/<?php echo $value['attachments']; ?>" target="blank"><?php echo $value['attachments']."<br>"?></a>
		<?php } ?>
		</td>
		
		<th>TrType</th>
		<td><?php echo $this->content[0]['TrType']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
