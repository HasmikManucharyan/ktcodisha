    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
     <link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet">
    

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
 <script src="<?php echo URL; ?>public/js/select2.min.js"></script>
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
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>Vehicle Master</strong></span>
<!--            <input type="button" id="btnAdd_vehiclemaster"  class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addVehicleMaster()" value="Add New Vehicle"> -->
         </div><br>
          <center> <input type="text" id="searchTxt_vehiclemaster" placeholder="Search"></center><br>
         <center>
             <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#vehicle">Vehicle</a></li>
                <li><a data-toggle="pill" href="#expenses">Expenses</a></li>
                <li><a data-toggle="pill" href="#income">Income</a></li>
             </ul>
         </center>
           <div class="container" id="floating-panel">
                <div class="col-md-12" style="margin-top: 50px;">
                  <div class="col-md-offset-1 col-md-5">
                    <div style="display: flex;">
                       <div class="box box2"><select selected="selected" name="vehicleno" id="vehicleno" value="" style="width:100%;">
                              <option value="0">Select Vehicle No</option>
                           </select></div>
                     </div>
                    </div>
                    
 
  
</div>
            </div>
           <div class="tab-content">
    <div id="vehicle" class="tab-pane fade in active">
      <br>
      <div class="panel-primary">
                     <div class="panel-heading" align="center">Vehicle Details</div>
                     <div class="panel-body">
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Party Name:</label>
                           <div class="col-xs-8" id="name1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DeviceIMIE">Owner Name:</label>
                           <div class="col-xs-8" id="uniqueid1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="groupid1">Engine No:</label>
                           <div class="col-xs-8" id="groupid1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="phone">Chesis No:</label>
                           <div class="col-xs-8" id="phone1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="contact">Device Id:</label>
                           <div class="col-xs-8" id="contact1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="model">IMIE No:</label>
                           <div class="col-xs-8" id="model1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">Driver Name:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">License No:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                          <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="category">Expiry Date:</label>
                           <div class="col-xs-8" id="category1">
                           </div>
                        </div>
                     </div>
                  </div>
    </div>
    <div id="expenses" class="tab-pane fade">
        <br>
      <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#compliances">Compliances</a></li>
                <li><a data-toggle="pill" href="#hsd">HSD</a></li>
                <li><a data-toggle="pill" href="#tyre">Tyre</a></li>
                <li><a data-toggle="pill" href="#maintainance">Maintainance</a></li>
             </ul>
    </div>
    <div id="income" class="tab-pane fade">
    <br>
        <h3>Trips</h3>
      
    </div>
    
  </div>
<!--
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
-->
         <div id="regForm_vehiclemaster" hidden style="">
            <span style="font-size:16px;"><strong>Add/Edit</strong></span>
            <form id="vehicle" role="form">
               <div class="col-md-12" style="margin-top: 50px;">
                  <div class="col-md-offset-1 col-md-5">
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title"><span style="color:red;">*</span> Vehicle No:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="VehicleNo" id="VehicleNo" placeholder="Enter Vehicle No"></div>
                     </div>
                     <span id="alertMsgTxt" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title"><span style="color:red;">*</span> Engine No:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="EngineNo" id="EngineNo" placeholder="Enter Engine No"></div>
                     </div>
                     <span id="alertMsgTxt1" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title"><span style="color:red;">*</span> Chesis No:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="ChesisNo" id="ChesisNo" placeholder="Enter Chesis No"></div>
                     </div>
                     <span id="alertMsgTxt2" style="color:red;"></span>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Model No:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="ModelNo" id="ModelNo" placeholder="Enter Model No"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">R/C Book(Y/N):</p>
                        </div>
                        <div class="box box2"><label><input type="radio"  id="RCYN" name="RCYN"  value="YES"  /> Yes</label><label><input type="radio"  id="RCYN" name="RCYN"  value="NO"  /> No</label></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Registration Date:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="RegDates" id="RegDates" placeholder="Enter Registration Date "></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Registration No:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="RegistrationNo" id="RegistrationNo" placeholder="Enter Registration No"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">vehicle Type:</p>
                        </div>
                        <div class="box box2">
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
                        <div class="box">
                           <p class="input_title">Vehicle Carrying Capacity: </p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="VehicleCarrying" id="VehicleCarrying" placeholder="Enter Vehicle Carrying Capacity"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Owner:</p>
                        </div>
                        <div class="box box2">
                           <select name="OwnerType" id="OwnerType" style="width:100%;">
                              <option value="">Select Owner</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Date of Purchase:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="DateofPurchase" id="DateofPurchase" placeholder="Enter Date of Purchase"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Financer Name:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="FinancerName" id="FinancerName" placeholder="Enter Financer Name"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">EMI Date:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="EMIDate" id="EMIDate" placeholder="Enter EMI Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">EMI Amount:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="EMIAmount" id="EMIAmount" placeholder="Enter EMI Amount"></div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">First EMI:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="FirstEMI" id="FirstEMI" placeholder="Enter First EMI"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Last EMI:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="LastEMI" id="LastEMI" placeholder="Enter Last EMI"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Insurance Expiry Date:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="InsuranceExpiryDate" id="InsuranceExpiryDate" placeholder="Enter Insurance Expiry Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Pollution Expiry:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="PollutionExpiry" id="PollutionExpiry" placeholder="Enter Pollution Expiry"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Fitness Expiry Date:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="FitnessExpiryDate" id="FitnessExpiryDate" placeholder="Enter Fitness Expiry Date"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Road Tax Expiry:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="RoadTaxExpiry" id="RoadTaxExpiry" placeholder="Enter Road Tax Expiry"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Permit Expiry:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="PermitExpiry" id="PermitExpiry" placeholder="Enter Permit Expiry"></div>
                     </div>
                     <input type="hidden" class="input_bar form-control" name="SensorSerial" id="SensorSerial">	
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title"><span style="color:red;">*</span> Device Name:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="name" id="name" placeholder="Enter Device name"></div>
                     </div>
                     <span id="alertMsgTxt3" style="color:red;"></span>  
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title"><span style="color:red;">*</span> IMIE / Unique Identifier:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="uniqueid" id="uniqueid" placeholder="Enter IMIE / Unique Identifier"></div>
                     </div>
                     <span id="alertMsgTxt4" style="color:red;"></span>     
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Group:</p>
                        </div>
                        <div class="box box2">
                           <select selected="selected" name="groupid" id="groupid" value="" style="width:100%;">
                              <option value="0">Select group</option>
                           </select>
                        </div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Phone:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="phone" id="phone" placeholder="Enter Phone Number"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Device Model:</p>
                        </div>
                        <div class="box box2">
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
                        <div class="box">
                           <p class="input_title">Contact:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="contact" id="contact" placeholder="Enter Contact Number"></div>
                     </div>
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Sensor:</p>
                        </div>
                        <div class="box box2">
                           <select selected="selected" name="category" id="category" value="" style="width:100%;">
                              <option value="default">Without Fuel Sensor</option>
                              <option value="truck">With Fuel Sensor</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input type="hidden" id="vid" name="vid" value="">
               <div style="text-align: center;">
                  <input type="button" class="btn btn-default sbmt_btn" name="submit" id="submitbtn" onclick="submitBtn()" value="Submit">
               </div>
            </form>
         </div>
         <div id="view_vehiclemaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <ul class="pager">
               <li><button type="button" id="prev">Previous</button></li>
               <li><a href="<?php echo URL; ?>master/view_vehiclemaster/?id=<?php echo $this->NextId; ?>">Next</a></li>
            </ul>
            <div class="table-responsive">
               <div class="col-md-12">
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
<script>
   
   var serverUrl="<?php echo URL; ?>";
   var data;
   var sensor;
   //alert(localStorage['id'])
//   var  table_vehiclemaster = document.getElementById("table_vehiclemaster");
//   var regForm_vehiclemaster = document.getElementById("regForm_vehiclemaster");
//   var view_vehiclemaster =document.getElementById("view_vehiclemaster");
//   var back_vehiclemaster= document.getElementById("btnAdd_vehiclemaster");
//   //var header_vehiclemaster = document.getElementById("heading_vehiclemaster");
//   var submit_vehiclemaster= document.getElementById("submitbtn"); 
   var otable_vehiclemaster, displayTable=[], txt;
   var fitness, insurance, permit, roadtax, pollution;
   
    var xhr7 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/vehiclemaster_details';
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr7.onreadystatechange = function () {
      //alert("request");
        if (xhr7.readyState === XMLHttpRequest.DONE && xhr7.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr7.responseText);
       vehicleno = document.getElementById("vehicleno");
        for(var i=0; i<data.length; i++){
          vehicleno.innerHTML = vehicleno.innerHTML +
          '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['name'] + '</option>';
        }
           
        }
    };
   
    xhr7.open(method, url, true);
    xhr7.send();
    
    
   var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/devices';
              // ADD THE URL OF THE FILE.
   //alert(url);
    xhr2.onreadystatechange = function () {
      //alert("request");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr2.responseText);
        SensorSerial = document.getElementById("SensorSerial");
        for(var i=0; i<data.length; i++){
          SensorSerial.innerHTML = SensorSerial.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
           
        }
    };
   
    xhr2.open(method, url, true);
    xhr2.send();
                                                      
     var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/groups';
        var GroupArr=[];
              // ADD THE URL OF THE FILE.
   //alert(url);
    xhr5.onreadystatechange = function () {
      //alert("request");
        if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr5.responseText);
       groupid = document.getElementById("groupid");
        for(var i=0; i<data.length; i++){
          groupid.innerHTML = groupid.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['name']+ '</option>';
             GroupArr[data[i]['id']]=data[i]['name'];
        }
           
        }
    };
   
    xhr5.open(method, url, true);
    xhr5.send(); 
    
      var partyArr = [];                                                 
      var xhr6 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/partymaster_details';
        
    xhr6.onreadystatechange = function () {
        if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
            var data = JSON.parse(xhr6.responseText);
            OwnerTypeTxt = document.getElementById("OwnerType");
            for(var i=0; i<data.length; i++){
              OwnerTypeTxt.innerHTML = OwnerTypeTxt.innerHTML +'<option value="' + data[i]['id'] + '">' + data[i]['PartyShortName'].toUpperCase() + '</option>';
              partyArr[data[i]['id']]=data[i]['PartyShortName'];    
            }
           
        }
    };
   
    xhr6.open(method, url, true);
    xhr6.send();
   
   function addVehicleMaster(){
       if(back_vehiclemaster.value == "Add New Vehicle"){
            data="";
            updateEditinfo(data);
            table_vehiclemaster.style.display="none";
            regForm_vehiclemaster.style.display = "block";
            view_vehiclemaster.style.display = "none";
            back_vehiclemaster.value="Back";
            header_vehiclemaster.value = "Add/Edit Vehiclemaster";
        }
        else{
           table_vehiclemaster.style.display="block";
           regForm_vehiclemaster.style.display = "none";
           view_vehiclemaster.style.display = "none";
           back_vehiclemaster.value ="Add New Vehicle";
           header_vehiclemaster.value = "Vehiclemaster";
        }
  }
   document.getElementById("submitbtn").addEventListener("click", function(event){
        event.preventDefault()
   });
    
    function submitBtn(){
     
        var VehicleNo = $("#VehicleNo").val(); 
        var EngineNo = $("#EngineNo").val();
        var SensorSerial = $("#SensorSerial").val();  
        var ChesisNo = $("#ChesisNo").val();
        var ModelNo = $("#ModelNo").val();
        var RCYN =$("input:radio[name=RCYN]:checked").val();
        var RegDates = $("#RegDates").val();
        var VehicleType = $("#VehicleType").val();
        var VehicleCarrying = $("#VehicleCarrying").val(); 
        var OwnerType = $("#OwnerType").val(); 
        var DateofPurchase = $("#DateofPurchase").val();
        var FinancerName = $("#FinancerName").val();  
        var EMIDate = $("#EMIDate").val(); 
        var EMIAmount = $("#EMIAmount").val();
        var FirstEMI = $("#FirstEMI").val();  
        var LastEMI = $("#LastEMI").val(); 
        var InsuranceExpiryDate = $("#InsuranceExpiryDate").val();
        var PollutionExpiry = $("#PollutionExpiry").val();  
        var FitnessExpiryDate = $("#FitnessExpiryDate").val(); 
        var RoadTaxExpiry = $("#RoadTaxExpiry").val();
        var PermitExpiry = $("#PermitExpiry").val();  
        var types=$("input:radio[name=type]:checked").val();
        var name = $("#name").val();
        var uniqueid = $("#uniqueid").val(); 
        var groupid = $("#groupid").val(); 
        var phone = $("#phone").val(); 
        var model = $("#model").val(); 
        var contact = $("#contact").val(); 
        var category = $("#category").val();
        var vid= $("#vid").val();
        var button= $("#submitbtn").val();
   if(VehicleNo!="" && uniqueid !="" && EngineNo!=""&&ChesisNo!="" && name!=""){
        if(button == "Submit"){
            var xhr1 = new XMLHttpRequest(), 
            method = 'POST',
            url = serverUrl+'master/add_vehiclemaster?name='+name+'&uniqueid='+uniqueid+'&groupid='+groupid+'&phone='+phone+'&model='+model+'&contact='+contact+'&category='+category+'&VehicleNo='+VehicleNo+'&EngineNo='+EngineNo+'&ChesisNo='+ChesisNo+'&ModelNo='+ModelNo+'&RCYN='+RCYN+'&RegDates='+RegDates+'&VehicleType='+VehicleType+'&VehicleCarrying='+VehicleCarrying+'&OwnerType='+OwnerType+'&DateofPurchase='+DateofPurchase+'&FinancerName='+FinancerName+'&EMIDate='+EMIDate+'&EMIAmount='+EMIAmount+'&FirstEMI='+FirstEMI+'&LastEMI='+LastEMI+'&InsuranceExpiryDate='+InsuranceExpiryDate+'&PollutionExpiry='+PollutionExpiry+'&FitnessExpiryDate='+FitnessExpiryDate+'&RoadTaxExpiry='+RoadTaxExpiry+'&PermitExpiry='+PermitExpiry+'&types='+types; 
    
              // ADD THE URL OF THE FILE.
   
    xhr1.onreadystatechange = function () {
      
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
             
            createTable();
             table_vehiclemaster.style.display = "block";
            regForm_vehiclemaster.style.display = "none";
             back_vehiclemaster.value="Add New Vehicle";
             $.notify("Vehice Added Successfully", "success"); 
              
        }
    };
   
    xhr1.open(method, url, true);
    xhr1.send();
   }else{
   
   var xhr1 = new XMLHttpRequest(), 
        method = 'POST',
        overrideMimeType = 'application/json',
        url =  serverUrl+'master/edit_update_vehiclemaster?id='+vid+'&VehicleNo='+VehicleNo+'&EngineNo='+EngineNo+'&ChesisNo='+ChesisNo+'&ModelNo='+ModelNo+'&RCYN='+RCYN+'&RegDates='+RegDates+'&VehicleType='+VehicleType+'&VehicleCarrying='+VehicleCarrying+'&OwnerType='+OwnerType+'&DateofPurchase='+DateofPurchase+'&FinancerName='+FinancerName+'&EMIDate='+EMIDate+'&SensorSerial='+SensorSerial+'&EMIAmount='+EMIAmount+'&FirstEMI='+FirstEMI+'&LastEMI='+LastEMI+'&InsuranceExpiryDate='+InsuranceExpiryDate+'&PollutionExpiry='+PollutionExpiry+'&FitnessExpiryDate='+FitnessExpiryDate+'&RoadTaxExpiry='+RoadTaxExpiry+'&PermitExpiry='+PermitExpiry+'&types='+types+'&name='+name+'&uniqueid='+uniqueid+'&groupid='+groupid+'&phone='+phone+'&model='+model+'&contact='+contact+'&category='+category+''; 
              // ADD THE URL OF THE FILE.
   
    xhr1.onreadystatechange = function () {
    
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
         
               createTable();
             regForm_vehiclemaster.style.display = "none";
            table_vehiclemaster.style.display = "block";
             back_vehiclemaster.value="Add New Vehicle";
             $.notify("Vehice Updated Successfully", "success"); 
           
        }
    };
   
    xhr1.open(method, url, true);
    xhr1.send();
    $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
     $("#alertMsgTxt2").text("");
     $("#alertMsgTxt3").text("");
     $("#alertMsgTxt4").text("");
   }
   }else{
   if(VehicleNo==""){
   $("#alertMsgTxt").text("Please Enter Vehicle Number");
   }
    else{
         $("#alertMsgTxt").text("");
        
    }
    if(EngineNo==""){
     $("#alertMsgTxt1").text("Please Enter Engine Number");
    }
    else{
        
         $("#alertMsgTxt1").text("");
    }
    if(ChesisNo==""){
     $("#alertMsgTxt2").text("Please Enter Chassis Number");
    }
    else{
        
         $("#alertMsgTxt2").text("");
    }
    if(name==""){
     $("#alertMsgTxt3").text("Please Enter Device Name");
    }
    else{
        
         $("#alertMsgTxt3").text("");
    }
    if(uniqueid==""){
        
        $("#alertMsgTxt4").text("Please Enter IMIE/Unique Id");
   //alert("error");
   }
    else{
        
         $("#alertMsgTxt4").text("");
    }
    //end validation
   return false;
   }
    }
   function okbtn(){
        table_vehiclemaster.style.display="block";
        regForm_vehiclemaster.style.display = "none";
        view_vehiclemaster.style.display = "none";
   }
   
   
   
   jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        if (a == null || a == "") {
            return 0;
        }
        var ukDatea = a.split('/');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },
   
    "date-uk-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
   
    "date-uk-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    },
    "veh-pre": function ( a ) {
        if (a == null || a == "") {
            return 0;
        }
        var ukDatea = a.split(' ');
        return (ukDatea[1]) * 1;
    },
   
    "veh-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
   
    "veh-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
   } );
   
   function formatState (state) {
   if (!state.id) { return state.text; }
   var $state = $(
   '<span ><img sytle="display: inline-block;" src="http://192.168.1.2/liveratrack/public/images/maps/model/' + state.element.value + '-G.png" /> ' + state.text + '</span>'
   );
   return $state;
   }
   $(document).ready(function(){
     
     $("#model").select2({
   templateResult: formatState
   	});
     $("#VehicleType").select2({
   	  
   	});
     $("#groupid").select2({
   	  
   	});
     $("#category").select2({
   	  
   	});
otable_vehiclemaster  = $('#example').DataTable( {
     
   "paging":   false,
   "aLengthMenu": [
       
                  ],
   columnDefs: [
       { type: 'veh', targets: 0 }
               ],
      dom: 'Bfrtip',
     buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
              ],
       initComplete : function() {
        $("#example_filter").detach().show();
       $('#searchTxt_vehiclemaster').on('input', function(){
            otable_vehiclemaster.search(this.value).draw();   
       });   
             UpdateInfo();
       },
  
     } );
   });                                                      
  
   function UpdateInfo(){
        createTable();
   }
   
   
   function getDateDifference(daten){
   
   var date1 = new Date();
   var date2 = new Date(daten);
   if(daten!='0000-00-00' && daten!=''){
   var timeDiff = (date2.getTime() - date1.getTime());
   //alert(timeDiff);
   var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
   return diffDays+" days";
   }else{
    return "N.A"; 
   }
   }
   function getDateDifferenceColor(daten){
   
   var date1 = new Date();
   var date2 = new Date(daten);
   var bgColor="palegreen";
   if(daten!='0000-00-00' && daten!=''){
   var timeDiff = (date2.getTime() - date1.getTime());
   //alert(timeDiff);
   var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
   if(diffDays<=7){
   
   bgColor="#FFE766";
   }
   if(diffDays<=2){
   
   bgColor="#FFE0E0";
   }
   
   return bgColor;
   }else{
    return ""; 
   }
   }
   
   
   function createTable(){
    var txt='';
    var tdVehicleNo="", tdTrackingDevice="", tdQR="", tdEngineNo="";
    var tdChesisNo="", tdOwner="", tdFitness="", tdInsurance="", tdPermit="", tdRoadTax="", tdPollution="", tdView="", tdEdit="", tdDelete="";
   displayTable= [];
    var xhr = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'master/vehiclemaster_details'; 
              // ADD THE URL OF THE FILE.
   
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            // PARSE JSON DATA.
            if(xhr.responseText){
   
              // alert(xhr.responseText);
               var data=JSON.parse(xhr.responseText);
               for(var i=0; i<data.length; i++){
                
              fitness=getDateDifference(data[i]['FitnessExpiryDate']);
                  insurance=getDateDifference(data[i]['InsuranceExpiryDate']);
                  permit=getDateDifference(data[i]['PermitExpiry']);
                  roadtax=getDateDifference(data[i]['RoadTaxExpiry']);
                  pollution=getDateDifference(data[i]['PollutionExpiry']);
   
     var str = data[i].VehicleNo;
     str = str.replace(/\s/g,'');
     var Vehicle = substr_replace(str," ",5,0);
   
          tdVehicleNo= '<tr style="height:20px;" role="row"><td>'+Vehicle+'</td>';
   	      tdTrackingDevice = '<td>'+data[i]['SensorSerial']+'</td>';
          tdQR = '<td><a href="'+serverUrl+'master/printIDCard?id='+data[i]['id']+'" target="_blank"><img src="'+serverUrl+'public/images/qrcode.png" width="15px"/></a></td>';
          tdEngineNo='<td>'+data[i]['EngineNo']+'</td>';
          tdChesisNo='<td>'+data[i]['ChesisNo']+'</td>';
          tdOwner='<td>'+partyArr[data[i]['OwnerType']]+'</td>';
          tdFitness='<td  style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['FitnessExpiryDate']) +';">'+fitness+'</td>';
          tdInsurance='<td style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['InsuranceExpiryDate']) +';">'+insurance+'</td>';
          tdPermit='<td style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['PermitExpiry']) +';">'+permit+'</td>';
          tdRoadTax='<td style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['RoadTaxExpiry']) +';">'+roadtax+'</td>';
          tdPollution='<td style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['PollutionExpiry']) +';">'+pollution+'</td>';
          tdView='<td><a href="#a" onclick="javascript: view('+data[i]['id']+',1)"> VIEW</a></td>';
          tdEdit='<td><a href="#a" onclick="javascript: view('+data[i]['id']+', 2)"> EDIT</button></td>';
          tdDelete='<td id="deleteClick"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete"> DELETE</a></td></tr>';
          txt = tdVehicleNo+tdTrackingDevice+tdQR+tdEngineNo+tdChesisNo+tdOwner+tdFitness+tdInsurance+tdPermit+tdRoadTax+tdPollution+tdView+tdEdit+tdDelete;
          displayTable[i]= txt;
         
               }
             
          scrollPos = $("#example").scrollTop();
          otable_vehiclemaster.clear().draw();
  for( i = 0; i < displayTable.length; i++ ) {
    otable_vehiclemaster.row.add($(displayTable[i]));
   }
     otable_vehiclemaster.draw();
  
            }
        }
    };
   
    xhr.open(method, url, true);
    xhr.send();
 }
   function view(id, data1){
   if(data1==1){
       
        updateinfo(id);
        view_vehiclemaster.style.display = "block";
        table_vehiclemasterstyle.display = "none";
        regForm_vehiclemaster.style.display = "none";
        back_vehiclemaster.value = "Back"
   

   }else{
          table_vehiclemasterstyle.display = "none";
          regForm_vehiclemaster.style.display = "block";
          view_vehiclemaster.style.display ="none"
          back_vehiclemaster.value = "Back";
          updateEditinfo(id);
   }
   }
   function updateEditinfo(mdata){
     $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
     $("#alertMsgTxt2").text("");
     $("#alertMsgTxt3").text("");
     $("#alertMsgTxt4").text("");
    
      if(mdata != ""){ 
    var xhr4 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/view_vehiclemaster?id='+mdata+''; 
              // ADD THE URL OF THE FILE.
   
    xhr4.onreadystatechange = function () {
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
            var data=JSON.parse(xhr4.responseText);
            document.getElementById("vid").value = mdata;
            document.getElementById("VehicleNo").value = data[0]['VehicleNo'];
            document.getElementById("EngineNo").value = data[0]['EngineNo'];
            document.getElementById("ChesisNo").value=data[0]['ChesisNo'];
            document.getElementById("ModelNo").value=data[0]['ModelNo'];
            $("input[name=RCYN][value=" + data[0]['RCYN'] + "]").attr('checked', 'checked');
            document.getElementById("RegDates").value=data[0]['RegDates'];
            document.getElementById("RegistrationNo").value=data[0]['RegistrationNo'];
            document.getElementById("VehicleCarrying").value=data[0]['VehicleCarrying'];
            $("#VehicleType").val(data[0]['VehicleType']);
            $("#OwnerType").val(data[0]['OwnerType']);
            document.getElementById("DateofPurchase").value=data[0]['DateofPurchase'];
            document.getElementById("SensorSerial").value=data[0]['SensorSerial'];
            document.getElementById("FinancerName").value=data[0]['FinancerName'];
            document.getElementById("EMIDate").value=data[0]['EMIDate'];
            document.getElementById("EMIAmount").value=data[0]['EMIAmount'];
            document.getElementById("FirstEMI").value=data[0]['FirstEMI'];
            document.getElementById("LastEMI").value=data[0]['LastEMI'];
            document.getElementById("InsuranceExpiryDate").value=data[0]['InsuranceExpiryDate'];
            document.getElementById("PollutionExpiry").value=data[0]['PollutionExpiry'];
            document.getElementById("FitnessExpiryDate").value=data[0]['FitnessExpiryDate'];
            document.getElementById("RoadTaxExpiry").value=data[0]['RoadTaxExpiry'];
            document.getElementById("PermitExpiry").value=data[0]['PermitExpiry'];
            document.getElementById("name").value=data[0]['name'];
            document.getElementById("uniqueid").value=data[0]['uniqueid'];
            $("#groupid").val(data[0]['groupid']);
            document.getElementById("model").value=data[0]['model'];
            document.getElementById("phone").value=data[0]['phone'];
            document.getElementById("contact").value=data[0]['contact'];
            $("#category").val(data[0]['category']);
            submit_vehiclemaster.value="Update";
          
        }
    };
   
    xhr4.open(method, url, true);
    xhr4.send();
      }else if(mdata == ""){
        
        document.getElementById("VehicleNo").value = "";
        document.getElementById("EngineNo").value = "";
        document.getElementById("ChesisNo").value="";
        document.getElementById("ModelNo").value= "";
        document.getElementsByName("RCYN").value="";
        document.getElementById("RegDates").value="";
        document.getElementById("RegistrationNo").value="";
        document.getElementById("VehicleCarrying").value="";
        document.getElementById("DateofPurchase").value="";
        document.getElementById("FinancerName").value="";
        document.getElementById("EMIDate").value="";
        document.getElementById("EMIAmount").value="";
        document.getElementById("FirstEMI").value="";
        document.getElementById("LastEMI").value="";
        document.getElementById("InsuranceExpiryDate").value="";
        document.getElementById("PollutionExpiry").value="";
        document.getElementById("FitnessExpiryDate").value="";
        document.getElementById("RoadTaxExpiry").value="";
        document.getElementById("PermitExpiry").value="";
        document.getElementsByName("type").value = "";
        document.getElementById("name").value = "";
        document.getElementById("uniqueid").value = Math.floor(Math.random() * 1000000);
        document.getElementById("groupid").value = "";
        document.getElementById("model").value = "";
        document.getElementById("contact").value = "";
        document.getElementById("category").value = "";
        submit_vehiclemaster.value="Submit";
      }
   
   }
                                                      
    
   function updateinfo(sdata){
      
        if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'master/view_vehiclemaster?id='+sdata+''; 
          
              // ADD THE URL OF THE FILE.
   
    xhr3.onreadystatechange = function () {
     
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
           
            document.getElementById("vehicleno").innerHTML= data[0]['VehicleNo'];
            document.getElementById("engineno").innerHTML=data[0]['EngineNo'];
            document.getElementById("chesisno").innerHTML=data[0]['ChesisNo'];
            document.getElementById("modelno").innerHTML=data[0]['ModelNo'];
            document.getElementById("rcbookno").innerHTML=data[0]['RcBookNo'];
            document.getElementById("regdates").innerHTML=data[0]['RegDates'];
            document.getElementById("registrationno").innerHTML=data[0]['RegistrationNo'];
            document.getElementById("vehicletype").innerHTML=data[0]['VehicleType'];
            document.getElementById("ownertypeso").innerHTML=data[0]['OwnerType'];
            document.getElementById("financername").innerHTML=data[0]['FinancerName'];
            document.getElementById("emidate").innerHTML=data[0]['EMIDate'];
            document.getElementById("emiamount").innerHTML=data[0]['EMIAmount'];
            document.getElementById("firstemi").innerHTML=data[0]['FirstEMI'];
            document.getElementById("lastemi").innerHTML=data[0]['LastEMI'];
            document.getElementById("insuranceexpirydate").innerHTML=data[0]['InsuranceExpiryDate'];
            document.getElementById("pollutionexpiry").innerHTML=data[0]['PollutionExpiry'];
            document.getElementById("fitnessexpirydate").innerHTML=data[0]['FitnessExpiryDate'];
            document.getElementById("roadtaxexpiry").innerHTML=data[0]['RoadTaxExpiry'];
            document.getElementById("permitexpiry").innerHTML=data[0]['PermitExpiry'];
            document.getElementById("ShortVehNo").innerHTML=data[0]['ShortVehNo'];
            document.getElementById("DateofPurchase").innerHTML=data[0]['DateofPurchase'];
            document.getElementById("name1").innerHTML=data[0]['name'];
            document.getElementById("uniqueid1").innerHTML=data[0]['uniqueid'];
            document.getElementById("groupid1").innerHTML=data[0]['groupid'];
            document.getElementById("model1").innerHTML=data[0]['model'];
            document.getElementById("phone1").innerHTML=data[0]['phone'];
            document.getElementById("contact1").innerHTML=data[0]['contact'];
            document.getElementById("category1").innerHTML=data[0]['category'];
          }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
     }
   
    function confirmDelete(id) {
            var delUrl=""+serverUrl+"master/delete_vehiclemaster/?"+id+"";
                  if (confirm("Are you sure you want to delete")) {
                          var xhr2 = new XMLHttpRequest(), 
                            method = 'GET',
                            overrideMimeType = 'application/json',
                            url = ''+serverUrl+'master/delete_vehiclemaster/'+id+''; 
  
    xhr2.onreadystatechange = function () {
      //alert("dsf");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
                createTable();
            }
    },
    xhr2.open(method, url, true);
    xhr2.send();
     }
   }
        function openNav() {
        document.getElementById("mySidenav").style.width = "210px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
   
    }  
    function masterDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
   }
   window.onclick = function(event) {
   if (!event.target.matches('.dropbtn')) {
   
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
   }
   }
   function reportDropdown() {
    document.getElementById("reportDropdown").classList.toggle("show");
   }
   window.onclick = function(event) {
   if (!event.target.matches('.dropbtn')) {
   
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
   }
   }
                                            
   
   
   function substr_replace (str, replace, start, length) {
   
   if (start < 0) { 
    start = start + str.length;
   }
   length = length !== undefined ? length : str.length;
   if (length < 0) {
    length = length + str.length - start;
   }
   return str.slice(0, start) + replace.substr(0, length) + replace.slice(length) + str.slice(start + length);
   }
                                                       
</script>

