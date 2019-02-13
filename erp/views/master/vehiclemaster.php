<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public1/css/stylemap.css" rel="stylesheet">
<link href="<?php echo URL; ?>public1/css/vehiclemaster.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo URL; ?>public1/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="<?php echo URL; ?>public/js/select2.min.js"></script>

<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content vehiclemaster">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>Vehicle Master</strong></span>
            <input type="button" id="btnAdd_vehiclemaster"  class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addVehicleMaster()" value="Add New Vehicle"> 
         </div><br>
          <center> <input type="text" id="searchTxt_vehiclemaster" placeholder="Search"></center><br>
         
         <div class="table-responsive" id="table_vehiclemaster">
            <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
               <thead>
                  <tr role="row" style="height:15px;" class="info">
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">Vehicle No</th>
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">GPS Device</th>
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">QR</th>
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1"  aria-sort="ascending" aria-label=": activate to sort column ascending">Engine No</th>
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="Last Seen: activate to sort column ascending">Chassis No</th>
                     <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">Owner</th>
                     <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE COMPLAINCE</th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending"></th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending"></th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending"></th>
                  </tr>
                  <tr role="row" style="height:15px;" class="info">
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">FITNESS</th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">INSURANCE</th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Permit: activate to sort column ascending">PERMIT</th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">ROADTAX</th>
                     <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">POLLUTION</th>
                  </tr>
               </thead>
            </table>
         </div>
         <div id="regForm_vehiclemaster" hidden style="">
            <span style="font-size:16px;"><strong>Add/Edit</strong></span>
            <form id="vehicle" role="form">
               <div class="col-md-42" style="margin-top: 50px;">
                  <div class="col-md-offset-1 col-md-5">
                     <div style="display: flex;" >
                        <div class="box col-md-4">
                           <p class="input_title"><span style="color:red;">*</span> Vehicle No:</p>
                        </div>
                        <div class="box box2  col-md-4"><input class="input_bar form-control" type="text" name="VehicleNo" id="VehicleNo" placeholder="Enter Vehicle No"></div>
                     </div>
                     <span id="alertMsgTxt" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title"><span style="color:red;">*</span> Engine No:</p>
                        </div>
                        <div class="box box2  col-md-4"><input class="input_bar form-control" type="text" name="EngineNo" id="EngineNo" placeholder="Enter Engine No"></div>
                     </div>
                     <span id="alertMsgTxt1" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title"><span style="color:red;">*</span> Chesis No:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="ChesisNo" id="ChesisNo" placeholder="Enter Chesis No"></div>
                     </div>
                     <span id="alertMsgTxt2" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Model No:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="ModelNo" id="ModelNo" placeholder="Enter Model No"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">R/C Book(Y/N):</p>
                        </div>
                        <div class="box box2 col-md-4"><label><input type="radio"  id="RCYN" name="RCYN"  value="YES"  /> Yes</label><label><input type="radio"  id="RCYN" name="RCYN"  value="NO"  /> No</label></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Registration Date:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="RegDates" id="RegDates" placeholder="Enter Registration Date "></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Registration No:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="RegistrationNo" id="RegistrationNo" placeholder="Enter Registration No"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">vehicle Type:</p>
                        </div>
                        <div class="box box2 col-md-4">
                           <select name="VehicleType" id="VehicleType" style="width:100%;">
                              <option value="2 Wheeler">2 Wheeler</option>
                              <option value="3 Wheeler">3 Wheeler</option>
                              <option value="4 Wheeler">4 Wheeler</option>
                              <option value="6 Wheeler">6 Wheeler</option>
                              <option value="10 Wheeler">10 Wheeler</option>
                              <option value="12 Wheeler">12 Wheeler</option>
                              <option value="14 Wheeler">14 Wheeler</option>
                              <option value="16 Wheeler">16 Wheeler</option>
                              <option value="18 Wheeler">18 Wheeler</option>
                              <option value="20 Wheeler">20 Wheeler</option>
                              <option value="22 Wheeler">22 Wheeler</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Vehicle Carrying Capacity: </p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="VehicleCarrying" id="VehicleCarrying" placeholder="Enter Vehicle Carrying Capacity"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Owner:</p>
                        </div>
                        <div class="box box2 col-md-4">
                           <select name="OwnerType" id="OwnerType" style="width:100%;">
                              <option value="">Select Owner</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Date of Purchase:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="DateofPurchase" id="DateofPurchase" placeholder="Enter Date of Purchase"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Financer Name:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="FinancerName" id="FinancerName" placeholder="Enter Financer Name"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">EMI Date:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="EMIDate" id="EMIDate" placeholder="Enter EMI Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">EMI Amount:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="EMIAmount" id="EMIAmount" placeholder="Enter EMI Amount"></div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">First EMI:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="FirstEMI" id="FirstEMI" placeholder="Enter First EMI"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Last EMI:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="LastEMI" id="LastEMI" placeholder="Enter Last EMI"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Insurance Expiry Date:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="InsuranceExpiryDate" id="InsuranceExpiryDate" placeholder="Enter Insurance Expiry Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Pollution Expiry:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="PollutionExpiry" id="PollutionExpiry" placeholder="Enter Pollution Expiry"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Fitness Expiry Date:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="FitnessExpiryDate" id="FitnessExpiryDate" placeholder="Enter Fitness Expiry Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Road Tax Expiry:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="RoadTaxExpiry" id="RoadTaxExpiry" placeholder="Enter Road Tax Expiry"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Permit Expiry:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="date" name="PermitExpiry" id="PermitExpiry" placeholder="Enter Permit Expiry"></div>
                     </div>
                     <input type="hidden" class="input_bar form-control" name="SensorSerial" id="SensorSerial">	
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title"><span style="color:red;">*</span> Device Name:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="name" id="name" placeholder="Enter Device name"></div>
                     </div>
                     <span id="alertMsgTxt3" style="color:red;"></span>  
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title"><span style="color:red;">*</span> IMIE / Unique Identifier:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="uniqueid" id="uniqueid" placeholder="Enter IMIE / Unique Identifier"></div>
                     </div>
                     <span id="alertMsgTxt4" style="color:red;"></span>     
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Group:</p>
                        </div>
                        <div class="box box2 col-md-4">
                           <select selected="selected" name="groupid" id="groupid" value="" style="width:100%;">
                              <option value="0">Select group</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Phone:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="phone" id="phone" placeholder="Enter Phone Number"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Device Model:</p>
                        </div>
                        <div class="box box2 col-md-4">
                           <select selected="selected" name="model" id="model" value="" style="width:100%;">
                              <option value="">Choose Device Model</option>
                              <option value="Truck">Truck</option>
                              <option value="Bike">Bike</option>
                              <option value="Car">Car</option>
                              <option value="Loader">Loader</option>
                              <option value="Oil-tanker">Oil-Tanker</option>
                              <option value="Person">Person</option>
                              <option value="Truck-dumper">Truck-dumper</option>
                              <option value="TukTuk">Tuk-tuk</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Contact:</p>
                        </div>
                        <div class="box box2 col-md-4"><input class="input_bar form-control" type="text" name="contact" id="contact" placeholder="Enter Contact Number"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box col-md-4">
                           <p class="input_title">Sensor:</p>
                        </div>
                        <div class="box box2 col-md-4">
                           <select selected="selected" name="category" id="category" value="" style="width:100%;">
                              <option value="default">Without Fuel Sensor</option>
                              <option value="truck">With Fuel Sensor</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input type="hidden" id="vid" name="vid" value="">
               <div style="text-align: center; margin-top:20px;" class="col-md-12">
                  <input type="button" class="btn btn-default sbmt_btn" name="submit" id="submitbtn" onclick="submitBtn()" value="Submit">
               </div>
            </form>
         </div>
         <div id="view_vehiclemaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <ul class="pager">
               <li><a  href="#" onclick="updateinfo()" id="prev">Previous</a></li>
               <li><a href="#" onclick="updateinfo()" id="next">Next</a></li>
            </ul>
            <div class="table-responsive">
               <div class="col-md-42">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center">RTO Details</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="VehicleNo">Vehicle Number:</label>
                           <div class="col-xs-8" id="vehicleno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="EngineNo">EngineNo:</label>
                           <div class="col-xs-8" id="engineno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ChesisNo">ChesisNo:</label>
                           <div class="col-xs-8" id="chesisno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ModelNo">Model No:</label>
                           <div class="col-xs-8" id="modelno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="RCBookNo">RCBookNo:</label>
                           <div class="col-xs-8" id="rcbookno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-6" for="RegDate">RegDate:</label>
                           <div class="col-xs-6" id="regdates">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="RegistrationNo">RegistrationNo:</label>
                           <div class="col-xs-8" id="registrationno">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="VehicleType">VehicleType:</label>
                           <div class="col-xs-8" id="vehicletype">
                           </div>
                        </div>
                        
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="OwnerTypeSO">OwnerTypeSO:</label>
                           <div class="col-xs-8" id="ownertypeso">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ShortVehNo">ShortVehNo:</label>
                           <div class="col-xs-8" id="ShortVehNo">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel-primary">
                     <div class="panel-heading" align="center">Vehicle Finance Details</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FinancerName">FinancerName:</label>
                           <div class="col-xs-8" id="financername">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="EMIDate">EMI Date:</label>
                           <div class="col-xs-8" id="emidate">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="EMIAmount">EMI Amount:</label>
                           <div class="col-xs-12 col-md-8 col-sm-6 col-lg-6" id="emiamount">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FirstEMI">First EMI:</label>
                           <div class="col-xs-8" id="firstemi">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="LastEMI">Last EMI:</label>
                           <div class="col-xs-8" id="lastemi">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel-primary">
                     <div class="panel-heading" align="center">Vehicle Compliances</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="InsuranceExpiryDate">Insurance Expiry:</label>
                           <div class="col-xs-8" id="insuranceexpirydate">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PollutionExpiry">Pollution Expiry:</label>
                           <div class="col-xs-8" id="pollutionexpiry">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FitnessExpiryDate">Fitness Expiry:</label>
                           <div class="col-xs-8" id="fitnessexpirydate">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="RoadTaxExpiry">Road Tax Expiry:</label>
                           <div class="col-xs-8" id="roadtaxexpiry">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PermitExpiry">Permit Expiry:</label>
                           <div class="col-xs-8" id="permitexpiry">
                           </div>
                        </div>
                       
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DateofPurchase">DateofPurchase:</label>
                           <div class="col-xs-8" id="DateofPurchase">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel-primary">
                     <div class="panel-heading" align="center">Vehicle Tracking Details</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Device Name:</label>
                           <div class="col-xs-8" id="name1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Device IMIE:</label>
                           <div class="col-xs-8" id="uniqueid1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="groupid1">Group:</label>
                           <div class="col-xs-8" id="groupid1">
                           </div>
                        </div>
                        <div class="col-xs-12 col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                           <label class="control-label col-xs-4" for="phone">Phone:</label>
                           <div class="col-xs-8" id="phone1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="contact">Contact:</label>
                           <div class="col-xs-8" id="contact1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="model">Model:</label>
                           <div class="col-xs-8" id="model1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">Category:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   var serverUrl="<?php echo URL; ?>";
</script>
<script type="text/javascript" src="<?php echo URL?>public1/js/vehiclemaster.js"></script>
