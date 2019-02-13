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
  <span style="font-size:18px;"><strong>Daily Report</strong></span>
  <br clear="all" />
<div class="or-box">
 </div>
  <form action="<?php echo URL; ?>vts/dailySummary" method="POST">
    
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="date" value="<?php echo $this->from; ?>"/>
      </div>
    </div> 
	
	<div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
      <button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button>
      </div>
    </div>
	    <br clear="all"/>
	 </form>
     
     <br>
     <br>
     <br>
 <div class="table-responsive">  
	                            <div class="table-responsive">
                               
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr> 
                                                <th style="text-align:center">Vehicle</th>
                                                <th style="text-align:center">End</th>
                                                <th style="text-align:center">Start</th>
                                                <th style="text-align:center">Total</th>
                                                </tr>
                                             </thead>
                                             
                                             <tr>
                                             <td style='text-align:center'>".$Alldevices[$j]['name']."</td>
                                             <td style='text-align:center'>". round($TD/1000,1)."</td>
                                             <td style='text-align:center'>".round($SD/1000,1)."</td>
                                             <td style='text-align:center'>".round($Travelled/1000,1)."</td>
                                             </tr>
                                             <tr>
                                             <td style="text-align:center"></td>
                                             <td style="text-align:center"></td>
                                             <td style="text-align:center">Total</td>
                                             <td style="text-align:center">'.round($summary/1000,1).'</td>
                                             </tr>
			
				
                     </table>
                     </div>
</div>

</div>
</div>
</div>
