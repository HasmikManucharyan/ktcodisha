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
            <span class="title_pra" style="font-size:18px;"><strong>partymaster</strong></span>
            <input type="button" id="btnAdd_partymaster"  class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addpartymaster()" value="Add New partymaster"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_partymaster" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_partymaster">
            
            <table id="example_partymaster" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>PartyCode</th>
                     
                     <th>PartyName</th>
                     
                     <th>PartyShortName</th>
                     
                     <th>FullAddress</th>
                     
                     <th>CityName</th>
                     
                     <th>StateName</th>
                     
                     <th>ContactPerson</th>
                     
                     <th>PANNO</th>
                     
                     <th>TINNO</th>
                     
                     <th>MobileNo</th>
                     
                     <th>TelePhone</th>
                     
                     <th>FAX</th>
                     
                     <th>EmailId</th>
                     
                     <th>SSTNO</th>
                     
                     <th>CSTNO</th>
                     
                     <th>BankName</th>
                     
                     <th>BankAccNo</th>
                     
                     <th>IFCCode</th>
                     
                     <th>TrType</th>
                     
                     <th>WorkingStatusYN</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_partymaster" hidden>
            
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> PartyCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""PartyCode"" id="PartyCode" placeholder="Enter PartyCode"></div>
                  </div>
                  <span id="alertMsgTxt_PartyCode" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> PartyName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""PartyName"" id="PartyName" placeholder="Enter PartyName"></div>
                  </div>
                  <span id="alertMsgTxt_PartyName" style="color:red;"></span>
               
            
           
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> PartyShortName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""PartyShortName"" id="PartyShortName" placeholder="Enter PartyShortName"></div>
                  </div>
                  <span id="alertMsgTxt_PartyShortName" style="color:red;"></span>
              
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> FullAddress :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""FullAddress"" id="FullAddress" placeholder="Enter FullAddress"></div>
                  </div>
                  <span id="alertMsgTxt_FullAddress" style="color:red;"></span>
               
            
           
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> CityName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""CityName"" id="CityName" placeholder="Enter CityName"></div>
                  </div>
                  <span id="alertMsgTxt_CityName" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> StateName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""StateName"" id="StateName" placeholder="Enter StateName"></div>
                  </div>
                  <span id="alertMsgTxt_StateName" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> ContactPerson :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""ContactPerson"" id="ContactPerson" placeholder="Enter ContactPerson"></div>
                  </div>
                  <span id="alertMsgTxt_ContactPerson" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> PANNO :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""PANNO"" id="PANNO" placeholder="Enter PANNO"></div>
                  </div>
                  <span id="alertMsgTxt_PANNO" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> TINNO :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""TINNO"" id="TINNO" placeholder="Enter TINNO"></div>
                  </div>
                  <span id="alertMsgTxt_TINNO" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> MobileNo :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""MobileNo"" id="MobileNo" placeholder="Enter MobileNo"></div>
                  </div>
                  <span id="alertMsgTxt_MobileNo" style="color:red;"></span>
               </div>
                
                <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> TelePhone :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""TelePhone"" id="TelePhone" placeholder="Enter TelePhone"></div>
                  </div>
                  <span id="alertMsgTxt_TelePhone" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> FAX :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""FAX"" id="FAX" placeholder="Enter FAX"></div>
                  </div>
                  <span id="alertMsgTxt_FAX" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> EmailId :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""EmailId"" id="EmailId" placeholder="Enter EmailId"></div>
                  </div>
                  <span id="alertMsgTxt_EmailId" style="color:red;"></span>
                
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> SSTNO :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""SSTNO"" id="SSTNO" placeholder="Enter SSTNO"></div>
                  </div>
                  <span id="alertMsgTxt_SSTNO" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> CSTNO :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""CSTNO"" id="CSTNO" placeholder="Enter CSTNO"></div>
                  </div>
                  <span id="alertMsgTxt_CSTNO" style="color:red;"></span>
               
                   <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> BankName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""BankName"" id="BankName" placeholder="Enter BankName"></div>
                  </div>
                  <span id="alertMsgTxt_BankName" style="color:red;"></span>
              
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> BankAccNo :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""BankAccNo"" id="BankAccNo" placeholder="Enter BankAccNo"></div>
                  </div>
                  <span id="alertMsgTxt_BankAccNo" style="color:red;"></span>
              
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> IFCCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""IFCCode"" id="IFCCode" placeholder="Enter IFCCode"></div>
                  </div>
                  <span id="alertMsgTxt_IFCCode" style="color:red;"></span>
              
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> TrType :</p>
                     </div>
                     <div class="box box2"><select selected="selected" class="form-control" name="TrType" id="TrType" value="">
          <option value="0">select ledger type</option>
		<option value="O">Other</option>
        <option value="P">Personal</option>
        <option value="F">Fuel Party</option>
         <option value="T">Transporter/Owner</option> 
        <option value="D">Driver</option>
           <option value="H">Helper</option>
        <option value="S">Staff</option>
           <option value="B">Billing party</option>
           <option value="SP">Spare Parts Dealer</option>
        </select></div>
                  </div>
                  <span id="alertMsgTxt_TrType" style="color:red;"></span>
              
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> WorkingStatusYN :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""WorkingStatusYN"" id="WorkingStatusYN" placeholder="Enter WorkingStatusYN"></div>
                  </div>
                  <span id="alertMsgTxt_WorkingStatusYN" style="color:red;"></span>
               </div>
            </div>
            <input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_partymaster" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_partymaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center">Diesel Rate Details</div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PartyCode_view">PartyCode</label>
                           <div class="col-xs-8" id="PartyCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PartyName_view">PartyName</label>
                           <div class="col-xs-8" id="PartyName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PartyShortName_view">PartyShortName</label>
                           <div class="col-xs-8" id="PartyShortName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FullAddress_view">FullAddress</label>
                           <div class="col-xs-8" id="FullAddress_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="CityName_view">CityName</label>
                           <div class="col-xs-8" id="CityName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="StateName_view">StateName</label>
                           <div class="col-xs-8" id="StateName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ContactPerson_view">ContactPerson</label>
                           <div class="col-xs-8" id="ContactPerson_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="PANNO_view">PANNO</label>
                           <div class="col-xs-8" id="PANNO_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="TINNO_view">TINNO</label>
                           <div class="col-xs-8" id="TINNO_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="MobileNo_view">MobileNo</label>
                           <div class="col-xs-8" id="MobileNo_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="TelePhone_view">TelePhone</label>
                           <div class="col-xs-8" id="TelePhone_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FAX_view">FAX</label>
                           <div class="col-xs-8" id="FAX_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="EmailId_view">EmailId</label>
                           <div class="col-xs-8" id="EmailId_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="SSTNO_view">SSTNO</label>
                           <div class="col-xs-8" id="SSTNO_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="CSTNO_view">CSTNO</label>
                           <div class="col-xs-8" id="CSTNO_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="BankName_view">BankName</label>
                           <div class="col-xs-8" id="BankName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="BankAccNo_view">BankAccNo</label>
                           <div class="col-xs-8" id="BankAccNo_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="IFCCode_view">IFCCode</label>
                           <div class="col-xs-8" id="IFCCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="TrType_view">TrType</label>
                           <div class="col-xs-8" id="TrType_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="WorkingStatusYN_view">WorkingStatusYN</label>
                           <div class="col-xs-8" id="WorkingStatusYN_view">
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
            var  table_partymaster = document.getElementById("table_partymaster");
            var regForm_partymaster = document.getElementById("regForm_partymaster");
            var view_partymaster = document.getElementById("view_partymaster");
            var back_partymaster = document.getElementById("btnAdd_partymaster");
            var submit_partymaster = document.getElementById("submitbtn_partymaster"); 
            var otable_partymaster, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;
                var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/devices';
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr5.onreadystatechange = function () {
      //alert("request");
        if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr5.responseText);
       SensorSerial = document.getElementById("SensorSerial");
        for(var i=0; i<data.length; i++){
          SensorSerial.innerHTML = SensorSerial.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
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
         
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr6.onreadystatechange = function () {
      //alert("request");
        if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr6.responseText);
       OwnerType = document.getElementById("OwnerType");
        for(var i=0; i<data.length; i++){
          OwnerType.innerHTML = OwnerType.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['PartyShortName'].toUpperCase() + '</option>';
            partyArr[data[i]['id']]=data[i]['PartyShortName'];
            
        }
           
        }
    };
   
    xhr6.open(method, url, true);
    xhr6.send();
             
             
             
             
             function addpartymaster(){
            if(back_partymaster.value == "Add New partymaster"){
            data="";
            updateEditinfo(data);
            
            table_partymaster.style.display="none";
             regForm_partymaster.style.display = "block";
             view_partymaster.style.display = "none";
            back_partymaster.value="Back";
            //header_partymaster.value = "Add/Edit partymaster"
            }
            else{
             table_partymaster.style.display="block";
             regForm_partymaster.style.display = "none";
             view_partymaster.style.display = "none";
             back_partymaster.value ="Add New partymaster";
            // header_partymaster.value = "partymaster";
            }
            }
            
            document.getElementById("submitbtn_partymaster").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var PartyCode = $("#PartyCode").val(); var PartyName = $("#PartyName").val(); var PartyShortName = $("#PartyShortName").val(); var FullAddress = $("#FullAddress").val(); var CityName = $("#CityName").val(); var StateName = $("#StateName").val(); var ContactPerson = $("#ContactPerson").val(); var PANNO = $("#PANNO").val(); var TINNO = $("#TINNO").val(); var MobileNo = $("#MobileNo").val(); var TelePhone = $("#TelePhone").val(); var FAX = $("#FAX").val(); var EmailId = $("#EmailId").val(); var SSTNO = $("#SSTNO").val(); var CSTNO = $("#CSTNO").val(); var BankName = $("#BankName").val(); var BankAccNo = $("#BankAccNo").val(); var IFCCode = $("#IFCCode").val(); var TrType = $("#TrType").val(); var WorkingStatusYN = $("#WorkingStatusYN").val();var button= $("#submitbtn_partymaster").val();
            var vid=$("#vid").val();
            if( PartyCode!='' && PartyName!='' && PartyShortName!='' && FullAddress!='' && CityName!='' && StateName!='' && ContactPerson!='' && PANNO!='' && TINNO!='' && MobileNo!='' && TelePhone!='' && FAX!='' && EmailId!='' && SSTNO!='' && CSTNO!='' && BankName!='' && BankAccNo!='' && IFCCode!='' && TrType!='' && WorkingStatusYN!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"master/add_partymaster?PartyCode="+PartyCode+"&PartyName="+PartyName+"&PartyShortName="+PartyShortName+"&FullAddress="+FullAddress+"&CityName="+CityName+"&StateName="+StateName+"&ContactPerson="+ContactPerson+"&PANNO="+PANNO+"&TINNO="+TINNO+"&MobileNo="+MobileNo+"&TelePhone="+TelePhone+"&FAX="+FAX+"&EmailId="+EmailId+"&SSTNO="+SSTNO+"&CSTNO="+CSTNO+"&BankName="+BankName+"&BankAccNo="+BankAccNo+"&IFCCode="+IFCCode+"&TrType="+TrType+"&WorkingStatusYN="+WorkingStatusYN+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_partymaster.style.display = "block";
            regForm_partymaster.style.display = "none";
            view_partymaster.style.display = "none";
                     back_partymaster.value="Add New partymaster";
                     $.notify("partymaster Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"master/update_partymaster?id="+vid+"&PartyCode="+PartyCode+"&PartyName="+PartyName+"&PartyShortName="+PartyShortName+"&FullAddress="+FullAddress+"&CityName="+CityName+"&StateName="+StateName+"&ContactPerson="+ContactPerson+"&PANNO="+PANNO+"&TINNO="+TINNO+"&MobileNo="+MobileNo+"&TelePhone="+TelePhone+"&FAX="+FAX+"&EmailId="+EmailId+"&SSTNO="+SSTNO+"&CSTNO="+CSTNO+"&BankName="+BankName+"&BankAccNo="+BankAccNo+"&IFCCode="+IFCCode+"&TrType="+TrType+"&WorkingStatusYN="+WorkingStatusYN+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_partymaster.style.display = "none";
            table_partymaster.style.display = "block";
            view_partymaster.style.display = "none";
                     back_partymaster.value="Add New partymaster";
                     $.notify("partymaster Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#PartyCode").text("");$("#PartyName").text("");$("#PartyShortName").text("");$("#FullAddress").text("");$("#CityName").text("");$("#StateName").text("");$("#ContactPerson").text("");$("#PANNO").text("");$("#TINNO").text("");$("#MobileNo").text("");$("#TelePhone").text("");$("#FAX").text("");$("#EmailId").text("");$("#SSTNO").text("");$("#CSTNO").text("");$("#BankName").text("");$("#BankAccNo").text("");$("#IFCCode").text("");$("#TrType").text("");$("#WorkingStatusYN").text("");
               }
             }
             else{
            
              if(PartyCode==""){
            $("#PartyCode_alertMsgTxt").text("Please Enter PartyCode");
               }
               else{
            $("#PartyCode_alertMsgTxt").text("");
            }
              if(PartyName==""){
            $("#PartyName_alertMsgTxt").text("Please Enter PartyName");
               }
               else{
            $("#PartyName_alertMsgTxt").text("");
            }
              if(PartyShortName==""){
            $("#PartyShortName_alertMsgTxt").text("Please Enter PartyShortName");
               }
               else{
            $("#PartyShortName_alertMsgTxt").text("");
            }
              if(FullAddress==""){
            $("#FullAddress_alertMsgTxt").text("Please Enter FullAddress");
               }
               else{
            $("#FullAddress_alertMsgTxt").text("");
            }
              if(CityName==""){
            $("#CityName_alertMsgTxt").text("Please Enter CityName");
               }
               else{
            $("#CityName_alertMsgTxt").text("");
            }
              if(StateName==""){
            $("#StateName_alertMsgTxt").text("Please Enter StateName");
               }
               else{
            $("#StateName_alertMsgTxt").text("");
            }
              if(ContactPerson==""){
            $("#ContactPerson_alertMsgTxt").text("Please Enter ContactPerson");
               }
               else{
            $("#ContactPerson_alertMsgTxt").text("");
            }
              if(PANNO==""){
            $("#PANNO_alertMsgTxt").text("Please Enter PANNO");
               }
               else{
            $("#PANNO_alertMsgTxt").text("");
            }
              if(TINNO==""){
            $("#TINNO_alertMsgTxt").text("Please Enter TINNO");
               }
               else{
            $("#TINNO_alertMsgTxt").text("");
            }
              if(MobileNo==""){
            $("#MobileNo_alertMsgTxt").text("Please Enter MobileNo");
               }
               else{
            $("#MobileNo_alertMsgTxt").text("");
            }
              if(TelePhone==""){
            $("#TelePhone_alertMsgTxt").text("Please Enter TelePhone");
               }
               else{
            $("#TelePhone_alertMsgTxt").text("");
            }
              if(FAX==""){
            $("#FAX_alertMsgTxt").text("Please Enter FAX");
               }
               else{
            $("#FAX_alertMsgTxt").text("");
            }
              if(EmailId==""){
            $("#EmailId_alertMsgTxt").text("Please Enter EmailId");
               }
               else{
            $("#EmailId_alertMsgTxt").text("");
            }
              if(SSTNO==""){
            $("#SSTNO_alertMsgTxt").text("Please Enter SSTNO");
               }
               else{
            $("#SSTNO_alertMsgTxt").text("");
            }
              if(CSTNO==""){
            $("#CSTNO_alertMsgTxt").text("Please Enter CSTNO");
               }
               else{
            $("#CSTNO_alertMsgTxt").text("");
            }
              if(BankName==""){
            $("#BankName_alertMsgTxt").text("Please Enter BankName");
               }
               else{
            $("#BankName_alertMsgTxt").text("");
            }
              if(BankAccNo==""){
            $("#BankAccNo_alertMsgTxt").text("Please Enter BankAccNo");
               }
               else{
            $("#BankAccNo_alertMsgTxt").text("");
            }
              if(IFCCode==""){
            $("#IFCCode_alertMsgTxt").text("Please Enter IFCCode");
               }
               else{
            $("#IFCCode_alertMsgTxt").text("");
            }
              if(TrType==""){
            $("#TrType_alertMsgTxt").text("Please Enter TrType");
               }
               else{
            $("#TrType_alertMsgTxt").text("");
            }
              if(WorkingStatusYN==""){
            $("#WorkingStatusYN_alertMsgTxt").text("Please Enter WorkingStatusYN");
               }
               else{
            $("#WorkingStatusYN_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_partymaster  = $("#example_partymaster").DataTable( {
               "paging":   false,
               "aLengthMenu": [
               ],
               dom: 'Bfrtip',
              buttons: [
                         'copyHtml5',
                         'excelHtml5',
                         'csvHtml5',
                         'pdfHtml5'
                       ],
               initComplete : function() {
                 $("#example_partymaster_filter").detach().show();
                 $("#searchTxt_partymaster").on("input", function(){
                   otable_partymaster.search(this.value).draw();
                 });
                 UpdateInfo();
               },
               
             });
            });
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
                 url = ""+serverUrl+"master/partymaster_details";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var PartyCode ='<td>'+data[i]["PartyCode"]+'</td>';var PartyName ='<td>'+data[i]["PartyName"]+'</td>';var PartyShortName ='<td>'+data[i]["PartyShortName"]+'</td>';var FullAddress ='<td>'+data[i]["FullAddress"]+'</td>';var CityName ='<td>'+data[i]["CityName"]+'</td>';var StateName ='<td>'+data[i]["StateName"]+'</td>';var ContactPerson ='<td>'+data[i]["ContactPerson"]+'</td>';var PANNO ='<td>'+data[i]["PANNO"]+'</td>';var TINNO ='<td>'+data[i]["TINNO"]+'</td>';var MobileNo ='<td>'+data[i]["MobileNo"]+'</td>';var TelePhone ='<td>'+data[i]["TelePhone"]+'</td>';var FAX ='<td>'+data[i]["FAX"]+'</td>';var EmailId ='<td>'+data[i]["EmailId"]+'</td>';var SSTNO ='<td>'+data[i]["SSTNO"]+'</td>';var CSTNO ='<td>'+data[i]["CSTNO"]+'</td>';var BankName ='<td>'+data[i]["BankName"]+'</td>';var BankAccNo ='<td>'+data[i]["BankAccNo"]+'</td>';var IFCCode ='<td>'+data[i]["IFCCode"]+'</td>';var TrType ='<td>'+data[i]["TrType"]+'</td>';var WorkingStatusYN ='<td>'+data[i]["WorkingStatusYN"]+'</td>';txt = txt+PartyCode+PartyName+PartyShortName+FullAddress+CityName+StateName+ContactPerson+PANNO+TINNO+MobileNo+TelePhone+FAX+EmailId+SSTNO+CSTNO+BankName+BankAccNo+IFCCode+TrType+WorkingStatusYN;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_partymaster").scrollTop();
                   otable_partymaster.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_partymaster.row.add($(displayTable[i]));
                   }
                   otable_partymaster.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_partymaster.style.display = "none";
            view_partymaster.style.display = "block";
            regForm_partymaster.style.display = "none";
            back_partymaster.value = "Back"
            
            }else{
            table_partymaster.style.display = "none";
            regForm_partymaster.style.display = "block";
            view_partymaster.style.display ="none"
            back_partymaster.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#PartyCode_alertMsgTxt").text(""); $("#PartyName_alertMsgTxt").text(""); $("#PartyShortName_alertMsgTxt").text(""); $("#FullAddress_alertMsgTxt").text(""); $("#CityName_alertMsgTxt").text(""); $("#StateName_alertMsgTxt").text(""); $("#ContactPerson_alertMsgTxt").text(""); $("#PANNO_alertMsgTxt").text(""); $("#TINNO_alertMsgTxt").text(""); $("#MobileNo_alertMsgTxt").text(""); $("#TelePhone_alertMsgTxt").text(""); $("#FAX_alertMsgTxt").text(""); $("#EmailId_alertMsgTxt").text(""); $("#SSTNO_alertMsgTxt").text(""); $("#CSTNO_alertMsgTxt").text(""); $("#BankName_alertMsgTxt").text(""); $("#BankAccNo_alertMsgTxt").text(""); $("#IFCCode_alertMsgTxt").text(""); $("#TrType_alertMsgTxt").text(""); $("#WorkingStatusYN_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"master/view_partymaster?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("PartyCode").value = data[0]["PartyCode"];document.getElementById("PartyName").value = data[0]["PartyName"];document.getElementById("PartyShortName").value = data[0]["PartyShortName"];document.getElementById("FullAddress").value = data[0]["FullAddress"];document.getElementById("CityName").value = data[0]["CityName"];document.getElementById("StateName").value = data[0]["StateName"];document.getElementById("ContactPerson").value = data[0]["ContactPerson"];document.getElementById("PANNO").value = data[0]["PANNO"];document.getElementById("TINNO").value = data[0]["TINNO"];document.getElementById("MobileNo").value = data[0]["MobileNo"];document.getElementById("TelePhone").value = data[0]["TelePhone"];document.getElementById("FAX").value = data[0]["FAX"];document.getElementById("EmailId").value = data[0]["EmailId"];document.getElementById("SSTNO").value = data[0]["SSTNO"];document.getElementById("CSTNO").value = data[0]["CSTNO"];document.getElementById("BankName").value = data[0]["BankName"];document.getElementById("BankAccNo").value = data[0]["BankAccNo"];document.getElementById("IFCCode").value = data[0]["IFCCode"];document.getElementById("TrType").value = data[0]["TrType"];document.getElementById("WorkingStatusYN").value = data[0]["WorkingStatusYN"];submit_partymaster.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("PartyCode").value = "";document.getElementById("PartyName").value = "";document.getElementById("PartyShortName").value = "";document.getElementById("FullAddress").value = "";document.getElementById("CityName").value = "";document.getElementById("StateName").value = "";document.getElementById("ContactPerson").value = "";document.getElementById("PANNO").value = "";document.getElementById("TINNO").value = "";document.getElementById("MobileNo").value = "";document.getElementById("TelePhone").value = "";document.getElementById("FAX").value = "";document.getElementById("EmailId").value = "";document.getElementById("SSTNO").value = "";document.getElementById("CSTNO").value = "";document.getElementById("BankName").value = "";document.getElementById("BankAccNo").value = "";document.getElementById("IFCCode").value = "";document.getElementById("TrType").value = "";document.getElementById("WorkingStatusYN").value = "";
               submit_partymaster.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"master/view_partymaster?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("PartyCode_view").innerHTML= data[0]["PartyCode"];document.getElementById("PartyName_view").innerHTML= data[0]["PartyName"];document.getElementById("PartyShortName_view").innerHTML= data[0]["PartyShortName"];document.getElementById("FullAddress_view").innerHTML= data[0]["FullAddress"];document.getElementById("CityName_view").innerHTML= data[0]["CityName"];document.getElementById("StateName_view").innerHTML= data[0]["StateName"];document.getElementById("ContactPerson_view").innerHTML= data[0]["ContactPerson"];document.getElementById("PANNO_view").innerHTML= data[0]["PANNO"];document.getElementById("TINNO_view").innerHTML= data[0]["TINNO"];document.getElementById("MobileNo_view").innerHTML= data[0]["MobileNo"];document.getElementById("TelePhone_view").innerHTML= data[0]["TelePhone"];document.getElementById("FAX_view").innerHTML= data[0]["FAX"];document.getElementById("EmailId_view").innerHTML= data[0]["EmailId"];document.getElementById("SSTNO_view").innerHTML= data[0]["SSTNO"];document.getElementById("CSTNO_view").innerHTML= data[0]["CSTNO"];document.getElementById("BankName_view").innerHTML= data[0]["BankName"];document.getElementById("BankAccNo_view").innerHTML= data[0]["BankAccNo"];document.getElementById("IFCCode_view").innerHTML= data[0]["IFCCode"];document.getElementById("TrType_view").innerHTML= data[0]["TrType"];document.getElementById("WorkingStatusYN_view").innerHTML= data[0]["WorkingStatusYN"];
            }
            };
            xhr3.open(method, url, true);
            xhr3.send();
            }
            		  }
            document.getElementById("delete").addEventListener("click", function(event){
             event.preventDefault()
            }
            );
            function confirmDelete(id) {
             if (confirm("Are you sure you want to delete?")) {
               var xhr2 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url = serverUrl+"master/delete_partymaster?id="+id;
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
            
         </script>
         