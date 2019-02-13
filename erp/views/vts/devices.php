<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo URL; ?>public1/js/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="<?php echo URL; ?>public/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public1/css/devices.css">
<div class="container-fluid devices-block" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>devices</strong></span>
             <input type="button" id="btnBack" class="btn btn-info pull-right"  onclick="backfunction()" value="Back"> 
             <div style="margin-left:5px">
                <input type="button" id="btnShareCustomer"  class="btn btn-info"  onclick="shareCustomer()" value="Share Customer">
                <input type="button" id="btnShareUser"  class="btn btn-info"  onclick="shareUser()" value="Share User">
                <input type="button" id="btnGroup"  class="btn btn-info"  onclick="shareGroup()" value="Group">
            </div>
           
         </div>
         <br>
         <center> <input type="text" id="searchTxt_devices" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table">
            
            <table id="example_devices" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                    <tr>
                       <th>Device ID</th>
                       <th>Name</th>
                       <th>IMIE /Unique Identifier</th>
                       <th>SIM/Mob</th>
                       <th>Group</th>
                       <th>Last Update</th>
                        
                    </tr>
                </thead>
           </table>	
        </div>
                 
        <div id="user" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="col-md-offset-1 col-md-5">
                    <h3>Share Device With User</h3>
<!--                    <a href="#" onclick="SelectAllDevices()">Select All</a>-->
                        <div style="display: flex;">
                            <div class="box"><p class="input_title">Select User:</p></div>
                                <div class="box box2"><select selected="selected" id="selectuser" class="form-control" onchange="addUser()" style="width:100%;">
                                    <option value="">Select User</option>
                                </select>
		                        </div>
                         </div>  
                    </div>
              </div>
        </div>
         
         
        <div id="customer" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="col-md-offset-1 col-md-5">
                    <h3>Share Device With Customer</h3>
                        <div style="display: flex;">
                            <div class="box"><p class="input_title">Select Customer:</p></div>
                                <div class="box box2"><select selected="selectcustomer" id="selectcustomer" class="form-control" onchange="addCustomer()" style="width:100%;">
                                    <option value="">Select Customer</option>
                                </select>
		                        </div>
                        </div> 
                 </div>
            </div>
        </div>

        
        <div id="group" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="col-md-offset-1 col-md-5">
                    <h3>Assign Group to Devices</h3>
                        <div style="display: flex;">
                            <div class="box"><p class="input_title">Select Group:</p></div>
                                <div class="box box2"><select selected="selectgroup" id="selectgroup" class="form-control" onchange="addGroup()" style="width:100%;">
                                    <option value="">Select Group</option>
                                </select>
		                        </div>
                        </div>
                </div>
            </div>
        </div>
    
            
        <div id="checked" hidden>
          <div class="col-md-12" style="margin-top: 50px;">
              <div class="col-md-offset-1 col-md-5">
<!--              <input type="text" id="searchTxt1" placeholder="Search" style="margin-left:10px">-->
                <br>
                <div class="table-responsive fixed" id="table1" >
                  <table id="example1" class="cell-border tdesign" width="50%" cellspacing="0" style="padding:2px; margin-left:10px" >
                    <thead>
                      <tr>
                        <th>Devices</th>
                        <th></th>
                      </tr>
                    </thead>                                    
                  </table>	     
                </div>
                <div style="display: flex;">
                  <div class="box"><p class="input_title">Check/Uncheck to Share Device:</p></div>
                    <div class="box box2" id="selectcheckbox">
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
    var serverUrl = '<?php echo URL; ?>';
</script>
<script type="text/javascript" src="<?php echo URL; ?>public1/js/devices.js"></script>             