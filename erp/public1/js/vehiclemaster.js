   var data;
   var sensor;
   var  table_vehiclemaster = document.getElementById("table_vehiclemaster");
   var regForm_vehiclemaster = document.getElementById("regForm_vehiclemaster");
   var view_vehiclemaster =document.getElementById("view_vehiclemaster");
   var back_vehiclemaster= document.getElementById("btnAdd_vehiclemaster");
   var header_vehiclemaster = document.getElementById("heading_vehiclemaster");
   var submit_vehiclemaster= document.getElementById("submitbtn"); 
   var otable_vehiclemaster, displayTable=[], txt;
   var fitness, insurance, permit, roadtax, pollution;
   
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
         
              // ADD THE URL OF THE FILE.
   //alert(url);
    xhr6.onreadystatechange = function () {
      //alert("request");
        if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
       
        var data = JSON.parse(xhr6.responseText);
       OwnerTypeTxt = document.getElementById("OwnerType");
        for(var i=0; i<data.length; i++){
          
          OwnerTypeTxt.innerHTML = OwnerTypeTxt.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['PartyShortName'].toUpperCase() + '</option>';
            partyArr[data[i]['id']]=data[i]['PartyShortName'];
           // alert(OwnerTypeTxt.innerHTML);   
            
        }
           
        }
    };
   
    xhr6.open(method, url, true);
    xhr6.send();
   
   function addVehicleMaster(){
        if(back_vehiclemaster.value == "Add New Vehicle"){
               $('#searchTxt_vehiclemaster').hide()
            data="";
            updateEditinfo(data);
  
        table_vehiclemaster.style.display="none";
        
        regForm_vehiclemaster.style.display = "block";
        view_vehiclemaster.style.display = "none";
        back_vehiclemaster.value="Back";
        header_vehiclemaster? header_vehiclemaster.value = "Add/Edit Vehiclemaster" : ""
        } else {
          $('#searchTxt_vehiclemaster').show()
           table_vehiclemaster.style.display="block";
           regForm_vehiclemaster.style.display = "none";
           view_vehiclemaster.style.display = "none";
           back_vehiclemaster.value ="Add New Vehicle";
           header_vehiclemaster? header_vehiclemaster.value = "Vehiclemaster" : ''
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
      var types=$("input:radio[name=RCYN]:checked").val();
      var name = $("#name").val();
      var uniqueid = $("#uniqueid").val(); 
      var groupid = $("#groupid").val(); 
      var phone = $("#phone").val(); 
      var model = $("#model").val(); 
      var contact = $("#contact").val(); 
      var category = $("#category option:selected" ).text();
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
         } else {
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
   } else {
     if(VehicleNo==""){
        $("#alertMsgTxt").text("Please Enter Vehicle Number");
     } else {
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
  $('#searchTxt_vehiclemaster').show();
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
      
                  tdVehicleNo= '<tr style="height:20px;" role="row"><td tabindex="0" >'+Vehicle+'</td>';
         	      tdTrackingDevice = '<td tabindex="0">'+data[i]['SensorSerial']+'</td>';
                  tdQR = '<td tabindex="0" ><a href="'+serverUrl+'master/printIDCard?id='+data[i]['id']+'" target="_blank"><img src="'+serverUrl+'public/images/qrcode.png" width="15px"/></a></td>';
                  tdEngineNo='<td tabindex="0" >'+data[i]['EngineNo']+'</td>';
                  tdChesisNo='<td tabindex="0" >'+data[i]['ChesisNo']+'</td>';
                  tdOwner='<td tabindex="0" >'+partyArr[data[i]['OwnerType']]+'</td>';
                  tdFitness='<td tabindex="0" style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['FitnessExpiryDate']) +';">'+fitness+'</td>';
                  tdInsurance='<td tabindex="0" style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['InsuranceExpiryDate']) +';">'+insurance+'</td>';
                  tdPermit='<td tabindex="0" style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['PermitExpiry']) +';">'+permit+'</td>';
                  tdRoadTax='<td tabindex="0" style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['RoadTaxExpiry']) +';">'+roadtax+'</td>';
                  tdPollution='<td tabindex="0" style="text-align:center;background-color:'+getDateDifferenceColor(data[i]['PollutionExpiry']) +';">'+pollution+'</td>';
                  tdView='<td style="background-color: #5bc0de"><a href="#a" onclick="javascript: view('+data[i]['id']+',1)"> VIEW</a></td>';
                  tdEdit='<td style="background-color:#c2eaf7"><a href="#a" onclick="javascript: view('+data[i]['id']+', 2)"> EDIT</button></td>';
                  tdDelete='<td id="deleteClick" style="background-color:#dab2b2"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete"> DELETE</a></td></tr>';
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
    $('#searchTxt_vehiclemaster').hide()
      if(data1==1) {
         updateinfo(id);
         view_vehiclemaster.style.display = "block";
         table_vehiclemaster.style.display = "none";
         regForm_vehiclemaster.style.display = "none";
         back_vehiclemaster.value = "Back"
      } else {
         table_vehiclemaster.style.display = "none";
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
            console.log(data)
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