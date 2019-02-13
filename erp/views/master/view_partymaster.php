 <style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
  </style>

 <div class="container">
	  <div class="row">
                 <div class="col-md-12">
                        <div class="account-box">
  <span style="font-size:18px;"><strong>View party Master</strong></span><div class="pull-right">&nbsp;&nbsp;&nbsp;</div><a href="<?php echo URL; ?>master/partymaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
  <br clear="all" />
<div class="or-box">
 </div>
 <div class="table-responsive">  
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-heading"></div>
	                    <div class="panel-body table-responsive">  
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content[0]['id']; ?></td>
          <th>PartyCode</th>
	  <td><?php echo $this->content[0]['PartyCode']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>PartyName</th>
	  <td><?php echo $this->content[0]['PartyName']; ?></td>
          <th>PartyShortName</th>
		 <td><?php echo $this->content[0]['PartyShortName']; ?></td>
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
            <th>TelePhone</th>
		<td><?php echo $this->content[0]['TelePhone']; ?></td>
		</tr>
		
		<tr>
		<th>Fax</th>
		<td><?php echo $this->content[0]['Fax']; ?></td>
            <th>EmailId</th>
		<td><?php echo $this->content[0]['EmailId']; ?></td>
		</tr>
		
		<tr>
		<th>SSTNO</th>
		<td><?php echo $this->content[0]['SSTNO']; ?></td>
            <th>CSTNO</th>
		<td><?php echo $this->content[0]['CSTNO']; ?></td>
		</tr>
		
		<tr>
		<th>BankName</th>
		<td><?php echo $this->content[0]['BankName']; ?></td>
            <th>BankAccNo</th>
		<td><?php echo $this->content[0]['BankAccNo']; ?></td>
		</tr>
		
		<tr>
		<th>IFCCode</th>
		<td><?php echo $this->content[0]['IFCCode']; ?></td>
        <th>TrType</th>
		<td><?php echo $this->content[0]['TrType']; ?></td>
		</tr>
	
		<tr>
		<th>WorkingStatusYN</th>
		<td><?php echo $this->content[0]['WorkingStatusYN']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
    </div>
     </div>
                            </div>
                     </div>
          </div>
     </div>
</div>

