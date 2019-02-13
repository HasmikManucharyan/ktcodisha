
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js">
                                                                       </script>


                                                <style>
                                            

                                                    table.tdesign tr.odd { background-color:  whitesmoke; }
                                                  table.tdesign tr.even { background-color: white;  }	
                                                   table.tdesign th {
                                                          background: #d9edf7;
                                                          color: #000;
                                                          padding: 2px;
                                                          border: 1px solid #ccc;
                                                      }
                                                      table.tdesign td {
        padding: 1px;
        border: 1px solid #000;
	background: transparent;
	height:15px;
	white-space: nowrap; 
    }
                                                    </style>
                            
                                                  
                                                   
 <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
       <span style="font-size:18px;"><strong>Coal Challan</strong></span>
               <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:0px; margin-bottom:10px" onclick="addcoalchallan()" value="Add New coalchallan">
            <br clear="all" />
<div class="or-box">
    <center> <input type="text" id="searchTxt" placeholder="Search"></center><br>
 </div>
                                                    <div class="table-responsive" id="table">   
                                                       
                                                 <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
                                                    
                                             <thead><tr>
        <th>Slno</th>
        <th>TPNo</th>
        <th>TPdate</th>
        <th>PassBookNo</th>
        <th>AvibahanPassNo</th>
        <th>EINo</th>
        <th>EIDt</th>
        <th>GCV</th>
        <th>SOURCE</th>
        <th>BasicPrice</th>
        <th>IGST</th>
        <th>Partygrosswt</th>
        <th>Partytarewt</th>
        <th>ChQty</th>
        <th>VehNo</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</thead>
								 
</table>	

</div> 
      <div id="regForm" hidden>
<!--
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> id:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="id" id="id" placeholder="Enter id" value="">
  </div>
  <span id="id_alertMsgTxt" style="color:red;">
  </span>
</div>
-->
<!--
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> Slno:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	
  </div>
  <span id="Slno_alertMsgTxt" style="color:red;">
  </span>
</div>
-->
   <input class="form-control" type="hidden" name="Slno" id="Slno" placeholder="Enter Slno" value="">   
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> TPNo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="TPNo" id="TPNo" placeholder="Enter TPNo" value="">
  </div>
  <span id="TPNo_alertMsgTxt" style="color:red;">
  </span>
</div>
      
      <input class="form-control" type="hidden" name="TPdate" id="TPdate" placeholder="Enter TPdate" value="">
<!--
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> TPdate:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="TPdate" id="TPdate" placeholder="Enter TPdate" value="">
  </div>
  <span id="TPdate_alertMsgTxt" style="color:red;">
  </span>
</div>
-->
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> PassBookNo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="PassBookNo" id="PassBookNo" placeholder="Enter PassBookNo" value="">
  </div>
  <span id="PassBookNo_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> AvibahanPassNo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="AvibahanPassNo" id="AvibahanPassNo" placeholder="Enter AvibahanPassNo" value="">
  </div>
  <span id="AvibahanPassNo_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> EINo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="EINo" id="EINo" placeholder="Enter EINo" value="">
  </div>
  <span id="EINo_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> EIDt:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="date" name="EIDt" id="EIDt" placeholder="Enter EIDt" value="">
  </div>
  <span id="EIDt_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 GCV:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<select class="form-control" name="GCV" id="GCV" value="">
       <option value="">Select GCV</option>    
   <option value="GCV(G-9)">GCV(G-9)</option>    
   <option value="GCV(G-11)">GCV(G-11)</option>    
   <option value="GCV(G-12)">GCV(G-12)</option>    
   <option value="GCV(4001-4300)">GCV(4001-4300)</option>    
   <option value="GCV(5201-5500)">GCV(5201-5500)</option>
      </select>
  </div>
 
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 SOURCE:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<select class="form-control" name="SOURCE" id="SOURCE" value="">
      <option value="">Select Source</option>  
     <option value="GARE-PALMA(IV\5)">GARE-PALMA(IV\5)</option>  
     <option value="GARE-PALMA(IV\4)">GARE-PALMA(IV\4)</option>
      </select>
  </div>
  
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	BasicPrice:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="BasicPrice" id="BasicPrice" placeholder="Enter BasicPrice" value="">
  </div>
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 IGST:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="IGST" id="IGST" placeholder="Enter IGST" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 Partygrosswt:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Partygrosswt" id="Partygrosswt" placeholder="Enter Partygrosswt" value="" onblur="calculatenetwt()">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 Partytarewt:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Partytarewt" id="Partytarewt" placeholder="Enter Partytarewt" value="" onblur="calculatenetwt()">
  </div>
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 ChQty:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="ChQty" id="ChQty" placeholder="Enter ChQty" value="">
  </div>
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> VehNo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="VehNo" id="VehNo" placeholder="Enter VehNo" value="">
  </div>
  <span id="VehNo_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	FrChNo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="FrChNo" id="FrChNo" placeholder="Enter FrChNo" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 FrChDt:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="date" name="FrChDt" id="FrChDt" placeholder="Enter FrChDt" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 GENo:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="GENo" id="GENo" placeholder="Enter GENo" value="">
  </div>
 
</div>
     <input class="form-control" type="hidden" name="GEDate" id="GEDate" placeholder="Enter GEDate" value=""> 
<!--
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> GEDate:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="GEDate" id="GEDate" placeholder="Enter GEDate" value="">
  </div>
  <span id="GEDate_alertMsgTxt" style="color:red;">
  </span>
</div>
-->
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 CYRecDt:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="date" name="CYRecDt" id="CYRecDt" placeholder="Enter CYRecDt" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> Gross:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Gross" id="Gross" placeholder="Enter Gross" value="" onblur="calculatenetwt()">
  </div>
  <span id="Gross_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> Tare:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Tare" id="Tare" placeholder="Enter Tare" value="" onblur="calculatenetwt()">
  </div>
  <span id="Tare_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> Net:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Net" id="Net" placeholder="Enter Net" value="">
  </div>
  <span id="Net_alertMsgTxt" style="color:red;">
  </span>
</div>
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	GRNQY:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="GRNQY" id="GRNQY" placeholder="Enter GRNQY" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 TOLERANCE:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="TOLERANCE" id="TOLERANCE" placeholder="Enter TOLERANCE" value="">
  </div>
 
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 SHORTAGE:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="SHORTAGE" id="SHORTAGE" placeholder="Enter SHORTAGE" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 TRPQTY:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="TRPQTY" id="TRPQTY" placeholder="Enter TRPQTY" value="">
  </div>
  
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 Transporter:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="Transporter" id="Transporter" placeholder="Enter Transporter" value="">
  </div>
 
</div>
<!--
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	 status:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="status" id="status" placeholder="Enter status" value="">
  </div>
  
</div>
-->
      <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	partyname:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<select class="form-control" selected="selected" name="partyname" id="partyname" value="" style="width:100%;">
                              <option value="">Select Party</option>
                           </select>
  </div>
  
</div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
<div style="padding-left:70px">
  <input type="hidden" id="vid">
  <input type="submit" name="submit" id="submitbtn" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
</div>
</div>
<br>


                
     
           <div id="view" hidden>

											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Slno_view">Slno</label>
												<div class="col-xs-8" id="Slno_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="TPNo_view">TPNo</label>
												<div class="col-xs-8" id="TPNo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="TPdate_view">TPdate</label>
												<div class="col-xs-8" id="TPdate_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="PassBookNo_view">PassBookNo</label>
												<div class="col-xs-8" id="PassBookNo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="AvibahanPassNo_view">AvibahanPassNo</label>
												<div class="col-xs-8" id="AvibahanPassNo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="EINo_view">EINo</label>
												<div class="col-xs-8" id="EINo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="EIDt_view">EIDt</label>
												<div class="col-xs-8" id="EIDt_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="GCV_view">GCV</label>
												<div class="col-xs-8" id="GCV_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="SOURCE_view">SOURCE</label>
												<div class="col-xs-8" id="SOURCE_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="BasicPrice_view">BasicPrice</label>
												<div class="col-xs-8" id="BasicPrice_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="EDvalue/IGST_view">EDvalue/IGST</label>
												<div class="col-xs-8" id="EDvalue/IGST_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Partygrosswt_view">Partygrosswt</label>
												<div class="col-xs-8" id="Partygrosswt_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Partytarewt_view">Partytarewt</label>
												<div class="col-xs-8" id="Partytarewt_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="ChQty_view">ChQty</label>
												<div class="col-xs-8" id="ChQty_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="VehNo_view">VehNo</label>
												<div class="col-xs-8" id="VehNo_view">
												
													</div>
											</div>
                                                 <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="partyname_view">Party Name</label>
												<div class="col-xs-8" id="partyname_view">
												
													</div>
											</div>

											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="FrChNo_view">FrChNo</label>
												<div class="col-xs-8" id="FrChNo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="FrChDt_view">FrChDt</label>
												<div class="col-xs-8" id="FrChDt_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="GENo_view">GENo</label>
												<div class="col-xs-8" id="GENo_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="GEDate_view">GEDate</label>
												<div class="col-xs-8" id="GEDate_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="CYRecDt_view">CYRecDt</label>
												<div class="col-xs-8" id="CYRecDt_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Gross_view">Gross</label>
												<div class="col-xs-8" id="Gross_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Tare_view">Tare</label>
												<div class="col-xs-8" id="Tare_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Net_view">Net</label>
												<div class="col-xs-8" id="Net_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="GRNQY_view">GRNQY</label>
												<div class="col-xs-8" id="GRNQY_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="TOLERANCE_view">TOLERANCE</label>
												<div class="col-xs-8" id="TOLERANCE_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="SHORTAGE_view">SHORTAGE</label>
												<div class="col-xs-8" id="SHORTAGE_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="TRPQTY_view">TRPQTY</label>
												<div class="col-xs-8" id="TRPQTY_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="Transporter_view">Transporter</label>
												<div class="col-xs-8" id="Transporter_view">
												
													</div>
											</div>

											</div>
            </div>

</div>
</div>  
</div>
         
            
<!--
										</div>
											

					</div>     
	</div>
						  
</div>
-->
            <script>  
var serverUrl="<?php echo URL; ?>";
var data;
var  x = document.getElementById("table");
var y = document.getElementById("regForm");
var back= document.getElementById("btnAdd");
var z =document.getElementById("view");
                var coalsrno;
               
//            z.style.display = "none";
//var header = document.getElementById("heading");
var submit= document.getElementById("submitbtn"); 
var otable, displayTable=[], txt;function addcoalchallan(){
	if(back.value == "Add New coalchallan"){
		data="";
		updateEditinfo(data);
  
	x.style.display="none";

	y.style.display = "block";
	back.value="Back";
	z.style.display = "none";
        genserialNo();
//	header.value = "Add/Edit coalchallan"
	}
	else{
       
	   x.style.display="block";
	   y.style.display = "none";
	   z.style.display = "none";
	   back.value ="Add New coalchallan";
//		header.value = "coalchallan";
	}
}

document.getElementById("submitbtn").addEventListener("click", function(event){
event.preventDefault()
});
                
      var partyArr = [];                                                 
     var xhr6 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/partymaster_details';
         
              // ADD THE URL OF THE FILE.
   //alert(url);
    xhr6.onreadystatechange = function () {
      //alert("request");
        if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
       
        var data = JSON.parse(xhr6.responseText);
       partynameTxt = document.getElementById("partyname");
        for(var i=0; i<data.length; i++){
          
          partynameTxt.innerHTML = partynameTxt.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['PartyShortName'].toUpperCase() + '</option>';
            partyArr[data[i]['id']]=data[i]['PartyShortName'];
           // alert(OwnerTypeTxt.innerHTML);   
            
        }
           
        }
    };
   
    xhr6.open(method, url, true);
    xhr6.send();                
                
function submitBtn(){ 
    var Slno = $("#Slno").val(); var TPNo = $("#TPNo").val(); var TPdate = $("#TPdate").val(); var PassBookNo = $("#PassBookNo").val(); var AvibahanPassNo = $("#AvibahanPassNo").val(); var EINo = $("#EINo").val(); var EIDt = $("#EIDt").val(); var GCV = $("#GCV").val(); var SOURCE = $("#SOURCE").val(); var BasicPrice = $("#BasicPrice").val(); var IGST = $("#IGST").val(); var Partygrosswt = $("#Partygrosswt").val(); var Partytarewt = $("#Partytarewt").val(); var ChQty = $("#ChQty").val(); var VehNo = $("#VehNo").val();var FrChNo = $("#FrChNo").val(); var FrChDt = $("#FrChDt").val(); var GENo = $("#GENo").val(); var GEDate = $("#GEDate").val(); var CYRecDt = $("#CYRecDt").val(); var Gross = $("#Gross").val(); var Tare = $("#Tare").val(); var Net = $("#Net").val(); var GRNQY = $("#GRNQY").val(); var TOLERANCE = $("#TOLERANCE").val(); var SHORTAGE = $("#SHORTAGE").val(); var TRPQTY = $("#TRPQTY").val(); var Transporter = $("#Transporter").val();var partyname = $("#partyname").val(); 
    partyname = partyArr[partyname];
    
    var button= $("#submitbtn").val();

	var vid=$("#vid").val();
	if( TPNo!='' && PassBookNo!='' && AvibahanPassNo!='' && EINo!='' && EIDt!='' && VehNo!=''){
      if(button == "Submit"){
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            url = serverUrl+"challan/add_coalchallan?Slno="+coalsrno+"&TPNo="+TPNo+"&TPdate="+TPdate+"&PassBookNo="+PassBookNo+"&AvibahanPassNo="+AvibahanPassNo+"&EINo="+EINo+"&EIDt="+EIDt+"&GCV="+GCV+"&SOURCE="+SOURCE+"&BasicPrice="+BasicPrice+"&IGST="+IGST+"&Partygrosswt="+Partygrosswt+"&Partytarewt="+Partytarewt+"&ChQty="+ChQty+"&VehNo="+VehNo+"&FrChNo="+FrChNo+"&FrChDt="+FrChDt+"&GENo="+GENo+"&GEDate="+GEDate+"&CYRecDt="+CYRecDt+"&Gross="+Gross+"&Tare="+Tare+"&Net="+Net+"&GRNQY="+GRNQY+"&TOLERANCE="+TOLERANCE+"&SHORTAGE="+SHORTAGE+"&TRPQTY="+TRPQTY+"&Transporter="+Transporter+"&partyname="+partyname+"";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
             
            createTable();
            genserialNo();
            x.style.display = "block";
			y.style.display = "none";
			z.style.display = "none";
            back.value="Add New coalchallan";
            $.notify("coalchallan Added Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
        xhr1.send();
      }
      else{
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            overrideMimeType = "application/json",
            url =  serverUrl+"challan/edit_coalchallan?id="+vid+"&Slno="+Slno+"&TPNo="+TPNo+"&TPdate="+TPdate+"&PassBookNo="+PassBookNo+"&AvibahanPassNo="+AvibahanPassNo+"&EINo="+EINo+"&EIDt="+EIDt+"&GCV="+GCV+"&SOURCE="+SOURCE+"&BasicPrice="+BasicPrice+"&IGST="+IGST+"&Partygrosswt="+Partygrosswt+"&Partytarewt="+Partytarewt+"&ChQty="+ChQty+"&VehNo="+VehNo+"&FrChNo="+FrChNo+"&FrChDt="+FrChDt+"&GENo="+GENo+"&GEDate="+GEDate+"&CYRecDt="+CYRecDt+"&Gross="+Gross+"&Tare="+Tare+"&Net="+Net+"&GRNQY="+GRNQY+"&TOLERANCE="+TOLERANCE+"&SHORTAGE="+SHORTAGE+"&TRPQTY="+TRPQTY+"&Transporter="+Transporter+"&partyname="+partyname+"";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
            createTable();
            y.style.display = "none";
			x.style.display = "block";
			z.style.display = "none";
            back.value="Add New coalchallan";
            $.notify("coalchallan Updated Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
		xhr1.send();$("#Slno").text("");$("#TPNo").text("");$("#TPdate").text("");$("#PassBookNo").text("");$("#AvibahanPassNo").text("");$("#EINo").text("");$("#EIDt").text("");$("#VehNo").text("");
      }
    }
    else{

  
//	    if(Slno==""){
//		 $("#Slno_alertMsgTxt").text("Please Enter Slno");
//      }
//      else{
//	 $("#Slno_alertMsgTxt").text("");
//	  }
	    if(TPNo==""){
		 $("#TPNo_alertMsgTxt").text("Please Enter TPNo");
      }
      else{
	 $("#TPNo_alertMsgTxt").text("");
	  }
	    if(TPdate==""){
		 $("#TPdate_alertMsgTxt").text("Please Enter TPdate");
      }
      else{
	 $("#TPdate_alertMsgTxt").text("");
	  }
//	    if(PassBookNo==""){
//		 $("#PassBookNo_alertMsgTxt").text("Please Enter PassBookNo");
//      }
//      else{
//	 $("#PassBookNo_alertMsgTxt").text("");
//	  }
	    if(AvibahanPassNo==""){
		 $("#AvibahanPassNo_alertMsgTxt").text("Please Enter AvibahanPassNo");
      }
      else{
	 $("#AvibahanPassNo_alertMsgTxt").text("");
	  }
	    if(EINo==""){
		 $("#EINo_alertMsgTxt").text("Please Enter EINo");
      }
      else{
	 $("#EINo_alertMsgTxt").text("");
	  }
	    if(EIDt==""){
		 $("#EIDt_alertMsgTxt").text("Please Enter EIDt");
      }
      else{
	 $("#EIDt_alertMsgTxt").text("");
	  }
//	    if(GCV==""){
//		 $("#GCV_alertMsgTxt").text("Please Enter GCV");
//      }
//      else{
//	 $("#GCV_alertMsgTxt").text("");
//	  }
//	    if(SOURCE==""){
//		 $("#SOURCE_alertMsgTxt").text("Please Enter SOURCE");
//      }
//      else{
//	 $("#SOURCE_alertMsgTxt").text("");
//	  }
//	    if(BasicPrice==""){
//		 $("#BasicPrice_alertMsgTxt").text("Please Enter BasicPrice");
//      }
//      else{
//	 $("#BasicPrice_alertMsgTxt").text("");
//	  }
//	    if(IGST==""){
//		 $("#IGST_alertMsgTxt").text("Please Enter IGST");
//      }
//      else{
//	 $("#IGST_alertMsgTxt").text("");
//	  }
//	    if(Partygrosswt==""){
//		 $("#Partygrosswt_alertMsgTxt").text("Please Enter Partygrosswt");
//      }
//      else{
//	 $("#Partygrosswt_alertMsgTxt").text("");
//	  }
//	    if(Partytarewt==""){
//		 $("#Partytarewt_alertMsgTxt").text("Please Enter Partytarewt");
//      }
//      else{
//	 $("#Partytarewt_alertMsgTxt").text("");
//	  }
//	    if(ChQty==""){
//		 $("#ChQty_alertMsgTxt").text("Please Enter ChQty");
//      }
//      else{
//	 $("#ChQty_alertMsgTxt").text("");
//	  }
	    if(VehNo==""){
		 $("#VehNo_alertMsgTxt").text("Please Enter VehNo");
      }
      else{
	 $("#VehNo_alertMsgTxt").text("");
	  }
//	    if(FrChNo==""){
//		 $("#FrChNo_alertMsgTxt").text("Please Enter FrChNo");
//      }
//      else{
//	 $("#FrChNo_alertMsgTxt").text("");
//	  }
//	    if(FrChDt==""){
//		 $("#FrChDt_alertMsgTxt").text("Please Enter FrChDt");
//      }
//      else{
//	 $("#FrChDt_alertMsgTxt").text("");
//	  }
//	    if(GENo==""){
//		 $("#GENo_alertMsgTxt").text("Please Enter GENo");
//      }
//      else{
//	 $("#GENo_alertMsgTxt").text("");
//	  }
//	    if(GEDate==""){
//		 $("#GEDate_alertMsgTxt").text("Please Enter GEDate");
//      }
//      else{
//	 $("#GEDate_alertMsgTxt").text("");
//	  }
//	    if(CYRecDt==""){
//		 $("#CYRecDt_alertMsgTxt").text("Please Enter CYRecDt");
//      }
//      else{
//	 $("#CYRecDt_alertMsgTxt").text("");
//	  }
	    if(Gross==""){
		 $("#Gross_alertMsgTxt").text("Please Enter Gross");
      }
      else{
	 $("#Gross_alertMsgTxt").text("");
	  }
	    if(Tare==""){
		 $("#Tare_alertMsgTxt").text("Please Enter Tare");
      }
      else{
	 $("#Tare_alertMsgTxt").text("");
	  }
	    if(Net==""){
		 $("#Net_alertMsgTxt").text("Please Enter Net");
      }
      else{
	 $("#Net_alertMsgTxt").text("");
	  }
//	    if(GRNQY==""){
//		 $("#GRNQY_alertMsgTxt").text("Please Enter GRNQY");
//      }
//      else{
//	 $("#GRNQY_alertMsgTxt").text("");
//	  }
//	    if(TOLERANCE==""){
//		 $("#TOLERANCE_alertMsgTxt").text("Please Enter TOLERANCE");
//      }
//      else{
//	 $("#TOLERANCE_alertMsgTxt").text("");
//	  }
//	    if(SHORTAGE==""){
//		 $("#SHORTAGE_alertMsgTxt").text("Please Enter SHORTAGE");
//      }
//      else{
//	 $("#SHORTAGE_alertMsgTxt").text("");
//	  }
//	    if(TRPQTY==""){
//		 $("#TRPQTY_alertMsgTxt").text("Please Enter TRPQTY");
//      }
//      else{
//	 $("#TRPQTY_alertMsgTxt").text("");
//	  }
//	    if(Transporter==""){
//		 $("#Transporter_alertMsgTxt").text("Please Enter Transporter");
//      }
//      else{
//	 $("#Transporter_alertMsgTxt").text("");
//	  }
	  return false;
    }
  } 
  $(document).ready(function(){
//      $("#partyname").select2({
   	  
   	});
    otable  = $("#example").DataTable( {
      "paging":   false,
      "aLengthMenu": [
      ],
      initComplete : function() {
        $("#example_filter").detach().show();
        $("#searchTxt").on("input", function(){
          otable.search(this.value).draw();
        }
                          );
        UpdateInfo();
      }
      ,
    }
                                     );
 
                
  function UpdateInfo(){
    createTable();
  }

  function createTable(){
     
    var txt="";
    var tdName="", tdUserName="", tdEmail="", tdMobNo="";
    var tdView="", tdEdit="", tdDelete="";
    displayTable= [];
    var xhr = new XMLHttpRequest(), 
        method = "GET",
        overrideMimeType = "application/json",
        url = ""+serverUrl+"challan/getallcoalchallan";
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        if(xhr.responseText){
          var data=JSON.parse(xhr.responseText);
		  for(var i=0; i<data.length; i++){
              txt ='<tr style="height:20px;" role="row">';
              var Slno ='<td>'+data[i]["Slno"]+'</td>';
              var TPNo ='<td>'+data[i]["TPNo"]+'</td>';
              var TPdate ='<td>'+data[i]["TPdate"]+'</td>';
              var PassBookNo ='<td>'+data[i]["PassBookNo"]+'</td>';
              var AvibahanPassNo ='<td>'+data[i]["AvibahanPassNo"]+'</td>';
              var EINo ='<td>'+data[i]["EINo"]+'</td>';
              var EIDt ='<td>'+data[i]["EIDt"]+'</td>';
              var GCV ='<td>'+data[i]["GCV"]+'</td>';
              var SOURCE ='<td>'+data[i]["SOURCE"]+'</td>';
              var BasicPrice ='<td>'+data[i]["BasicPrice"]+'</td>';
              var IGST ='<td>'+data[i]["IGST"]+'</td>';
              var Partygrosswt ='<td>'+data[i]["Partygrosswt"]+'</td>';
              var Partytarewt ='<td>'+data[i]["Partytarewt"]+'</td>';
              var ChQty ='<td>'+data[i]["ChQty"]+'</td>';
              var VehNo ='<td>'+data[i]["VehNo"]+'</td>';
             txt = txt+Slno+TPNo+TPdate+PassBookNo+AvibahanPassNo+EINo+EIDt+GCV+SOURCE+BasicPrice+IGST+Partygrosswt+Partytarewt+ChQty+VehNo;
			 txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
            displayTable[i]= txt;
                                                  //alert(txt);
          }
     
          scrollPos = $("#example").scrollTop();
          otable.clear().draw();
          for( i = 0; i < displayTable.length; i++ ) {
            otable.row.add($(displayTable[i]));
          }
          otable.draw();
        }
      }
    };
    xhr.open(method, url, true);
    xhr.send();
  }
  function view(id,data){
     // alert(data);
      // alert(id);
	if(data==1){
         
  updateinfo(id);
         x.style.display = "none";
y.style.display = "none";
 z.style.display = "block";
  back.value = "Back";


}else{
	x.style.display = "none";
	y.style.display = "block";
	z.style.display ="none"
	back.value = "Back";

updateEditinfo(id);
}
   

}

  function updateEditinfo(mdata){ 
      
     // $("#Slno_alertMsgTxt").text(""); 
      $("#TPNo_alertMsgTxt").text(""); 
//      $("#TPdate_alertMsgTxt").text(""); 
      $("#PassBookNo_alertMsgTxt").text(""); 
      $("#AvibahanPassNo_alertMsgTxt").text(""); 
      $("#EINo_alertMsgTxt").text(""); 
      $("#EIDt_alertMsgTxt").text("");  
      $("#VehNo_alertMsgTxt").text("");
       $("#Gross_alertMsgTxt").text("");
       $("#Tare_alertMsgTxt").text("");
       $("#Net_alertMsgTxt").text("");
    if(mdata != ""){
      var xhr4 = new XMLHttpRequest(), 
          method = "GET",
          overrideMimeType = "application/json",
          url =   serverUrl+"challan/view_coalchallan?id="+mdata;
      xhr4.onreadystatechange = function () {
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
          var data=JSON.parse(xhr4.responseText);
		  document.getElementById("vid").value = mdata;
            document.getElementById("Slno").value = data[0]["Slno"];document.getElementById("TPNo").value = data[0]["TPNo"];document.getElementById("TPdate").value = data[0]["TPdate"];document.getElementById("PassBookNo").value = data[0]["PassBookNo"];document.getElementById("AvibahanPassNo").value = data[0]["AvibahanPassNo"];document.getElementById("EINo").value = data[0]["EINo"];document.getElementById("EIDt").value = data[0]["EIDt"];document.getElementById("GCV").value = data[0]["GCV"];document.getElementById("SOURCE").value = data[0]["SOURCE"];document.getElementById("BasicPrice").value = data[0]["BasicPrice"];document.getElementById("IGST").value = data[0]["IGST"];document.getElementById("Partygrosswt").value = data[0]["Partygrosswt"];document.getElementById("Partytarewt").value = data[0]["Partytarewt"];document.getElementById("ChQty").value = data[0]["ChQty"];document.getElementById("VehNo").value = data[0]["VehNo"];document.getElementById("FrChNo").value = data[0]["FrChNo"];document.getElementById("FrChDt").value = data[0]["FrChDt"];document.getElementById("GENo").value = data[0]["GENo"];document.getElementById("GEDate").value = data[0]["GEDate"];document.getElementById("CYRecDt").value = data[0]["CYRecDt"];document.getElementById("Gross").value = data[0]["Gross"];document.getElementById("Tare").value = data[0]["Tare"];document.getElementById("Net").value = data[0]["Net"];document.getElementById("GRNQY").value = data[0]["GRNQY"];document.getElementById("TOLERANCE").value = data[0]["TOLERANCE"];document.getElementById("SHORTAGE").value = data[0]["SHORTAGE"];document.getElementById("TRPQTY").value = data[0]["TRPQTY"];document.getElementById("Transporter").value = data[0]["Transporter"];document.getElementById("partyname").value = data[0]["partyname"];
            submit.value="Update";
        }
      };
      xhr4.open(method, url, true);
      xhr4.send();
    }
	else if(mdata == ""){document.getElementById("Slno").value = "";document.getElementById("TPNo").value = "";document.getElementById("TPdate").value = "";document.getElementById("PassBookNo").value = "";document.getElementById("AvibahanPassNo").value = "";document.getElementById("EINo").value = "";document.getElementById("EIDt").value = "";document.getElementById("GCV").value = "";document.getElementById("SOURCE").value = "";document.getElementById("BasicPrice").value = "";document.getElementById("IGST").value = "";document.getElementById("Partygrosswt").value = "";document.getElementById("Partytarewt").value = "";document.getElementById("ChQty").value = "";document.getElementById("VehNo").value = "";document.getElementById("FrChNo").value = "";document.getElementById("FrChDt").value = "";document.getElementById("GENo").value = "";document.getElementById("GEDate").value = "";document.getElementById("CYRecDt").value = "";document.getElementById("Gross").value = "";document.getElementById("Tare").value = "";document.getElementById("Net").value = "";document.getElementById("GRNQY").value = "";document.getElementById("TOLERANCE").value = "";document.getElementById("SHORTAGE").value = "";document.getElementById("TRPQTY").value = "";document.getElementById("Transporter").value = "";document.getElementById("partyname").value = "";
      submit.value="Submit";
    }
  }

   function updateinfo(sdata){
      
	if(sdata != null){
	var xhr3 = new XMLHttpRequest(), 
	method = "GET",
	overrideMimeType = "application/json",
	url = serverUrl+"challan/view_coalchallan?id="+sdata; 
xhr3.onreadystatechange = function () {

	if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
		var data= JSON.parse(xhr3.responseText);
        //alert(xhr3.responseText);
		document.getElementById("Slno_view").innerHTML= data[0]["Slno"];document.getElementById("TPNo_view").innerHTML= data[0]["TPNo"];document.getElementById("TPdate_view").innerHTML= data[0]["TPdate"];document.getElementById("PassBookNo_view").innerHTML= data[0]["PassBookNo"];document.getElementById("AvibahanPassNo_view").innerHTML= data[0]["AvibahanPassNo"];document.getElementById("EINo_view").innerHTML= data[0]["EINo"];document.getElementById("EIDt_view").innerHTML= data[0]["EIDt"];document.getElementById("GCV_view").innerHTML= data[0]["GCV"];document.getElementById("SOURCE_view").innerHTML= data[0]["SOURCE"];document.getElementById("BasicPrice_view").innerHTML= data[0]["BasicPrice"];document.getElementById("EDvalue/IGST_view").innerHTML= data[0]["EDvalue/IGST"];document.getElementById("Partygrosswt_view").innerHTML= data[0]["Partygrosswt"];document.getElementById("Partytarewt_view").innerHTML= data[0]["Partytarewt"];document.getElementById("ChQty_view").innerHTML= data[0]["ChQty"];document.getElementById("VehNo_view").innerHTML= data[0]["VehNo"];document.getElementById("FrChNo_view").innerHTML= data[0]["FrChNo"];document.getElementById("FrChDt_view").innerHTML= data[0]["FrChDt"];document.getElementById("GENo_view").innerHTML= data[0]["GENo"];document.getElementById("GEDate_view").innerHTML= data[0]["GEDate"];document.getElementById("CYRecDt_view").innerHTML= data[0]["CYRecDt"];document.getElementById("Gross_view").innerHTML= data[0]["Gross"];document.getElementById("Tare_view").innerHTML= data[0]["Tare"];document.getElementById("Net_view").innerHTML= data[0]["Net"];document.getElementById("GRNQY_view").innerHTML= data[0]["GRNQY"];document.getElementById("TOLERANCE_view").innerHTML= data[0]["TOLERANCE"];document.getElementById("SHORTAGE_view").innerHTML= data[0]["SHORTAGE"];document.getElementById("TRPQTY_view").innerHTML= data[0]["TRPQTY"];document.getElementById("Transporter_view").innerHTML= data[0]["Transporter"];document.getElementById("partyname_view").innerHTML= data[0]["partyname"];
	}
};
xhr3.open(method, url, true);
xhr3.send();
	}
					  }
//  document.getElementById("delete").addEventListener("click", function(event){
//    event.preventDefault()
//  }
//  );
  function confirmDelete(id) {
    if (confirm("Are you sure you want to delete?")) {
      var xhr2 = new XMLHttpRequest(), 
          method = "GET",
          overrideMimeType = "application/json",
          url = serverUrl+"challan/delete_coalchallan?id="+id;
      xhr2.onreadystatechange = function () {
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
          createTable();
        }
      }
        ,
        xhr2.open(method, url, true);
      xhr2.send();
    }
  }

function calculatenetwt(){
    var grosswt = document.getElementById("Gross").value;
    var tarewt = document.getElementById("Tare").value;
    var partygross = document.getElementById("Partygrosswt").value;
    var partytare = document.getElementById("Partytarewt").value;
     
    if(grosswt.trim()!="" && tarewt.trim()!=""){
        
        var net = grosswt - tarewt;
        net = net.toFixed(2);
        document.getElementById("Net").value = net;
    }
    
      if(partygross.trim()!="" && partytare.trim()!=""){
        
        var partynet = partygross - partytare;
        partynet = partynet.toFixed(2);
        document.getElementById("ChQty").value = partynet;
    }
    
}    
                
                function genserialNo(){
                    var xhr5 = new XMLHttpRequest(),
                        method = 'GET',        
                        overrideMimeType = 'application/json',  
                        url1 = ''+serverUrl+'challan/getLastCoalChallanSlNo';  
                    // ADD THE URL OF THE FILE.     
                    xhr5.onreadystatechange = function () {    
                        if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {    
                            var data=JSON.parse(xhr5.responseText);if(data != ""){          
                                var temp = data[0]['Slno'];
                                // var data1=temp.split("-");
                                coalsrno = +temp + 1;     
                            }                   
                            else{       
                                coalsrno = 1;    
                            }            
                        }                  
                    },    
                        xhr5.open(method, url1, true);
                    xhr5.send();
                }
                
</script>
