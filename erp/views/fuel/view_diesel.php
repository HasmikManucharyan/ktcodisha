
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
  <span style="font-size:18px;"><strong>View Diesel Details</strong></span><div class="pull-right">&nbsp;&nbsp;&nbsp;</div><a href="<?php echo URL; ?>fuel"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
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
	  <th>Vehicle No</th>
      
	 <!-- <td><?php echo $this->mydevice[$this->content[0]['deviceid']]; ?></td>
      <th>Driver Name</th>
	  <td><?php echo $this->mydriver[$this->content[0]['driverid']]; ?></td>
	  </tr>
	  <tr>
	  <th>Challan no</th>
	  <td><?php echo $this->content[0]['challanno']; ?></td>
	  <th>Date</th>
	  <td><?php echo $this->content[0]['datetime']; ?></td>
	  </tr>
	   <tr>
	  <th>QTY</th>
	  <td><?php echo $this->content[0]['qty']; ?></td>
	  <th>Fill/Issue</th>
	  <td><?php echo $this->content[0]['fillissue']; ?></td>
	  </tr>-->
	  <tr>
	  <th>Open Oddometer</th>
	  <td><?php echo $this->content[0]['OpenOddo']; ?></td>
	  <th>Close Oddometer</th>
	  <td><?php echo $this->content[0]['CloseOddo']; ?></td>
	  </tr>	
      <!--<tr>
	  <th>Open Meter</th>
	  <td><?php echo $this->content[0]['OpenMeter']; ?></td>
	  <th>Close Meter</th>
	  <td><?php echo $this->content[0]['CloseMeter']; ?></td>
	  </tr>	-->
    </tbody>
  </table>
</div>
</div>



<br>
</div>

</div>