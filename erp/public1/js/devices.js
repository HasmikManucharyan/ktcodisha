  var x= document.getElementById("table");
  var y = document.getElementById("user");
  var z = document.getElementById("customer");
  var w = document.getElementById("checked");
  var v = document.getElementById("group");
  var back = document.getElementById("btnBack");
  // var search = document.getElementById("searchTxt");
           back.style.display = "none";

      function confirmDelete(delUrl) {
        if (confirm("Are you sure you want to delete")) {
        //  document.location = delUrl;
        }
      }
      
     
     var otable_devices, displayTable = [],otable1, displayTable1 = [];
     var selectuser =document.getElementById("selectuser");
     var selectcustomer = document.getElementById("selectcustomer");
     var selectgroup = document.getElementById("selectgroup");

    function backfunction(){
     // alert("hkjh")
      //window.location.href = "devices.html"
       createTable()
       x.style.display="block";
       y.style.display="none";
       z.style.display="none";
       w.style.display = "none";
       back.style.display = "none";
        // search.style.display = "none";
       

    }
     var xhr4 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/allusers';

   xhr4.onreadystatechange = function () {
      //alert("request");
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr4.responseText);
       // selectuser = document.getElementById("selectuser");
        for(var i=0; i<data.length; i++){
          selectuser.innerHTML = selectuser.innerHTML +
                    '<option value="' + data[i]['admin_id'] + '">' + data[i]['username'] + '</option>';
        }
           
        }
    };
   
    xhr4.open(method, url, true);
    xhr4.send();

  var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/AllCustomer';

   xhr3.onreadystatechange = function () {
      //alert("request");
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
        //  alert(xhr3.responseText);   
        var data = JSON.parse(xhr3.responseText);
        selectcustomer = document.getElementById("selectcustomer");
        for(var i=0; i<data.length; i++){
          selectcustomer.innerHTML = selectcustomer.innerHTML +
                    '<option value="' + data[i]['traccarID'] + '">' + data[i]['fname'] + '</option>';
        }
           
        }
    };
   
    xhr3.open(method, url, true);
    xhr3.send();


    var xhr7 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/groups';
        var GroupArr=[];
   xhr7.onreadystatechange = function () {
      //alert("request");
        if (xhr7.readyState === XMLHttpRequest.DONE && xhr7.status === 200) {
        //  alert(xhr3.responseText);   
        var data = JSON.parse(xhr7.responseText);
        selectgroup = document.getElementById("selectgroup");
        for(var i=0; i<data.length; i++){
          selectgroup.innerHTML = selectgroup.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
                    GroupArr[data[i]['id']]=data[i]['name'];
        }
           
        }
    };
   
    xhr7.open(method, url, true);
    xhr7.send();

function shareGroup(){
  $('#searchTxt_devices').hide();
  selectgroup.value = "";
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  w.style.display = "none";
  v.style.display = "block";
  back.style.display ="block";
  // search.style.display = "none";
}

function shareUser(){
  $('#searchTxt_devices').hide();
  selectuser.value="";
  x.style.display = "none";
  y.style.display = "block";
  z.style.display = "none";
  w.style.display = "none";
  v.style.display = "none";
  back.style.display ="block";
  // search.style.display = "none";
}

            
function shareCustomer(){
  $('#searchTxt_devices').hide();
  selectcustomer.value= "";
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "block";
  w.style.display = "none";
  v.style.display = "none";
  back.style.display = "block";
  // search.style.display = "none";
}  
     // addUser();
      
  //var customerValue;
       
       function addUser(){
        var userValue =  $("#selectuser").val(); 
        selectcustomer.value = "";
        selectgroup.value = "";
        if(userValue != ""){
          x.style.display = "none";
          y.style.display = "block";
          z.style.direction = "none";
          w.style.display = "block";
          v.style.display = "none";
          getDevice(userValue);
        } else {
          w.style.display = "none";
        }
       }

       function addCustomer(){
        var customerValue = $("#selectcustomer").val();
        selectuser.value = "";
        selectgroup.value = "";

        //alert(customerValue)
        if(customerValue != ""){
        x.style.display = "none";
       y.style.display = "none";
       z.style.direction = "block";
       w.style.display = "block";
       v.style.display = "none";
       getDevice(customerValue);
       }else{
          
            w.style.display = "none";
       }
       }
       function addGroup(){
       //  alert(selectgroup.value)
        var groupValue = $("#selectgroup").val();
        selectuser.value = "";
        selectcustomer.value = "";

        //alert(customerValue)
        if(groupValue != ""){
        x.style.display = "none";
       y.style.display = "none";
       z.style.direction = "none";
       w.style.display = "block";
       v.style.display = "block";
       getDevice(groupValue);
       }else{
          
            w.style.display = "none";
       }

       }

 
     function getDevice(value){
//      selectcheckbox= document.getElementById("selectcheckbox");
//      selectcheckbox.innerHTML = "";
         otable1.clear().draw();
    displayTable1 = [];
      var usercustomer = document.getElementsByName("usercustomer");
      usercustomer.value = "";
      //alert(selectcustomer.value)
      
      
      var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/devices';

   xhr2.onreadystatechange = function () {
      //alert("request");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
            var data = JSON.parse(xhr2.responseText);
      createTable1(data);
      // if(mdata == selectuser.value){}
        //  alert(xhr2.responseText);   
//        var data = JSON.parse(xhr2.responseText);
       // selectcheckbox= document.getElementById("selectcheckbox");
//        for(var i=0; i<data.length; i++){
//          selectcheckbox.innerHTML = selectcheckbox.innerHTML +
//                    '<input onclick="functionClick(this)" type="checkbox" name="usercustomer" id="' + data[i]['id'] + '" value="' + data[i]['name'] + '">' + data[i]['name'] +'</input><br>';
//           
//        }  
if(value == selectuser.value) {
//alert(value);
   var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/getAllOurUserdevices?user='+selectuser.value+'';

  xhr5.onreadystatechange = function () {
    if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
      if(xhr5.responseText) {
        var data1 = JSON.parse(xhr5.responseText);
        for(var j=0; j< data1.length; j++) {
          for(var k=0; k<usercustomer.length; k++) {
            if(usercustomer[k].value == data1[j]['name']) {
              usercustomer[k].checked = true;
            }
          }
        }
      }
    }
  };
   
    xhr5.open(method, url, true);
    xhr5.send();

} else if(value == selectcustomer.value){
  //alert("afds")

  var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/getAllUserdevices?customer='+selectcustomer.value+'';

  xhr5.onreadystatechange = function () {
    if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
      if(xhr5.responseText){
      var data1 = JSON.parse(xhr5.responseText);
        for(var j=0; j<data1.length; j++){
          for(var k=0; k<usercustomer.length; k++){
            if(usercustomer[k].value == data1[j]['name']) {
              usercustomer[k].checked = true;
            }
          }
        }
      }
    }
  };
   
    xhr5.open(method, url, true);
    xhr5.send();

} else if(value == selectgroup.value){
  var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/alldevicegroups?group='+selectgroup.value+'';

   xhr5.onreadystatechange = function () {
    //alert("request");
    if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
    // alert(xhr5.responseText);   
      if(xhr5.responseText){
        var data1 = JSON.parse(xhr5.responseText);
        for(var j=0; j<data1.length; j++){
          for(var k=0; k<usercustomer.length; k++){
            if(usercustomer[k].value == data1[j]['name']){
              usercustomer[k].checked = true;
            }
          }
        }
      }
    }
  };
   
  xhr5.open(method, url, true);
  xhr5.send();

}
}
};
   
  xhr2.open(method, url, true);
  xhr2.send();
   

}
      
     

      
$(document).ready(function() {
  $("#selectuser").select2({
	});
  $("#selectcustomer").select2({
	});
  $("#selectgroup").select2({
	});
  
  otable_devices = $('#example_devices').DataTable({
          "paging":   false,
          "aLengthMenu": [
            
          ],
         initComplete: function() {
                        $("#example_devices_filter").detach().show();
                        $('#searchTxt').on('input', function(){
                          otable_devices.search(this.value).draw();   
                        });  
                        UpdateInfo();
                      },
          });
                      
  otable1 = $('#example1').DataTable( {
              "paging":   false,
            "aLengthMenu": [
              
            ],
            initComplete : function() {
                            $("#example_devices_filter").detach().show();
                            $('#searchTxt').on('input', function(){
                              otable1.search(this.value).draw();   
                            });   
//                      
                       //UpdateInfo();
                    },
            });
});


function functionClick(cb){
  var customer = selectcustomer.value;
  var user = selectuser.value;
  var group = selectgroup.value;
  if(customer > 0) {
    var deviceAction;
    var notifyMe;
    if(cb.checked){
      deviceAction="Added";
      notifyMe ="success";
    } else {
      deviceAction="Removed"; 
      notifyMe ="warn";
    }
      // if (customer !=0){
    var xhr6 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'vts/sharedDevice?userid='+customer+'&deviceid='+cb.id+'&deviceAction='+deviceAction+'';
  xhr6.onreadystatechange = function() {
    if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
      $.notify("Device"+deviceAction, notifyMe);
    }
  };
   
  xhr6.open(method, url, true);
  xhr6.send();

  } else if(user != "" ){
    var deviceAction;
    var notifyMe;
    if(cb.checked){
      deviceAction="Added";
      notifyMe ="success";
    } else {
      deviceAction="Removed"; 
      notifyMe ="warn";
    }
   
  var xhr6 = new XMLHttpRequest(), 
    method = 'GET',
    overrideMimeType = 'application/json',
    url =   ''+serverUrl+'vts/sharedDeviceuser?userid='+user+'&deviceid='+cb.id+'&deviceAction='+deviceAction+'';
  xhr6.onreadystatechange = function() {
    if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
      $.notify("Device"+deviceAction, notifyMe);
    }
  };
 
  xhr6.open(method, url, true);
  xhr6.send();

  } else if(group != "") {
    var deviceAction;
    var notifyMe;
    if(cb.checked) {
      deviceAction="Added";
      notifyMe ="success";
    } else {
      deviceAction="Removed"; 
      notifyMe ="warn";
    }
    // if (customer !=0){
    var xhr6 = new XMLHttpRequest(), 
      method = 'GET',
      overrideMimeType = 'application/json',
      url =   ''+serverUrl+'vts/updateDeviceGroup?groupid='+group+'&id='+cb.id+'&deviceAction='+deviceAction+'';
    xhr6.onreadystatechange = function () {
      if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
      $.notify("Device"+deviceAction, notifyMe);
    }
  };
 
  xhr6.open(method, url, true);
  xhr6.send();


  }
}              

function UpdateInfo(){
	createTable();
} 

function createTable(){
  $('#searchTxt_devices').show();
  var data ;
  var txt='';
  var tdDeviceId="", tdName="", tdUniqueId="", tdMob="";
  var tdGroup="", tdLastUpdate="";
  var xhr = new XMLHttpRequest(), 
      method = 'GET',
      overrideMimeType = 'application/json',
      url=''+serverUrl+'master/devices';
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      if(xhr.responseText){
        var data=JSON.parse(xhr.responseText);
        for(var i=0; i<data.length; i++) {
         
          tdDeviceId= '<tr  role="row"><td>'+data[i]['id']+'</td>';
          tdName = '<td>'+data[i]['name']+'</td>';
          tdUniqueId = '<td>'+data[i]['uniqueid']+'</td>';
          tdMob='<td>'+data[i]['phone']+'</td>';
          tdGroup='<td>'+GroupArr[data[i]['groupid']]+'</td>';
          tdLastUpdate='<td>'+data[i]['lastupdate']+'</td>';
  //          tdEdit='<td><a href="#a" onclick="javascript:view('+data[i]['id']+')"> EDIT</a></td>';
  //          tdDelete='<td><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+')">DELETE</a></td></tr>';
  //         
          txt = tdDeviceId+tdName+tdUniqueId+tdMob+tdGroup+tdLastUpdate;
          displayTable[i]= txt;
        }
        scrollPos = $("#example_devices").scrollTop();
        otable_devices.clear().draw();
        for( i = 0; i < displayTable.length; i++ ) {
          otable_devices.row.add($(displayTable[i]));
        }
        otable_devices.draw();
      }
    }
  };
 
  xhr.open(method, url, true);
  xhr.send();     
}  
             
function createTable1(data){
  displayTable1 = [];
  var txt='';
  var tdName="", tdCheckBox="";
  for(var i=0; i<data.length; i++){
            
// if(data[i]['model'] == ""){
//      model = 0;
// }else if(data[i]['model'] == "GT 06" ){
//     model = 1;
// }
//model = 1;
    tdName = '<tr style="height:20px;width:40px" role="row"><td >'+data[i]['name']+'</td>';
    tdCheckBox = '<td><input onclick="functionClick(this)" type="checkbox" name="usercustomer" id="' + data[i]['id'] + '" value="' + data[i]['name'] + '"></td></tr>'; 
         // tdEdit='<td><a href="#a" onclick="javascript:view('+data[i]['id']+')"> EDIT</a></td>';
          //tdDelete='<td><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+')">DELETE</a></td></tr>';
    txt = tdName+tdCheckBox;
    displayTable1[i]= txt;
  }
  scrollPos = $("#example1").scrollTop();
     //alert(displayTable1.length);
  for(i = 0; i < displayTable1.length; i++) {
    otable1.row.add($(displayTable1[i]));
  }
  otable1.draw();

}
function SelectAllDevices(){
  $("input[type='checkbox'][name='usercustomer']").trigger('click');   
  return false;                 
}