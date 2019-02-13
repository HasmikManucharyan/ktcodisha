<!--

                                                    
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
-->

<script src="<?php echo URL; ?>public/js/datatables.min.js"></script>
<link href="<?php echo URL; ?>public/css/datatables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet" />
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

<div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
       <span style="font-size:18px;"><strong>Freight Rate Master</strong></span>
       <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addfreightratemaster()" value="Add New freightratemaster"> 
      <br clear="all" />
<div class="or-box">
    <center> <input type="text" id="searchTxt" placeholder="Search"></center><br>
 </div>
                                                    <div class="table-responsive" id="table">   
                                                       
                                                 <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0">
                                                    <thead>


    <tr>
        <th>Routecode</th>
        <th>Routename</th>
        <th>Month</th>
        <th>Year</th>
        <th>Rate</th>
        <th>Unit</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
 </thead>
</table>	
</div>
<div id="regForm" hidden>
    <from>
     <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> routecode:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="routecode" id="routecode" placeholder="Enter routecode" value="">
  </div>
  <span id="routecode_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> routename:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="routename" id="routename" placeholder="Enter routename" value="">
  </div>
  <span id="routename_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> month:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">   
      <div class='right-inner-addon date datepicker'> 
            <i class="fa fa-calendar" id="icondate"></i>
    		<input name='name' id='txtDate' value="" type="text" class="form-control date-picker"/>
  			
   		</div>
<!--	<input class="form-control" type="month" name="month" id="month" placeholder="Enter month" value="">-->
  </div>
  <span id="month_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> year:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="year" id="year" placeholder="Enter year" value="">
  </div>
  <span id="year_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> rate:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="rate" id="rate" placeholder="Enter rate" value="">
  </div>
  <span id="rate_alertMsgTxt" style="color:red;">
  </span>
</div><div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> unit:
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="unit" id="unit" placeholder="Enter unit" value="">
  </div>
  <span id="unit_alertMsgTxt" style="color:red;">
  </span>
</div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
<div style="padding-left:70px">
  <input type="hidden" id="vid">
  <input type="submit" name="submit" id="submitbtn" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
</div>
        </from>
</div>
                                                   


<div id="view" hidden>
<span style="font-size:14px;"><strong>View</strong></span>
														
<div class="table-responsive">  
<div class="col-md-12">

				<div class="panel-primary" >
										<div class="panel-heading" align="center">Freight Rate Details</div>
																<div class="panel-body">     <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="routecode_view">routecode</label>
												<div class="col-xs-8" id="routecode_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="routename_view">routename</label>
												<div class="col-xs-8" id="routename_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="month_view">month</label>
												<div class="col-xs-8" id="month_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="year_view">year</label>
												<div class="col-xs-8" id="year_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="rate_view">rate</label>
												<div class="col-xs-8" id="rate_view">
												
													</div>
											</div>
											   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="unit_view">unit</label>
												<div class="col-xs-8" id="unit_view">
												
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
    </div>
<script>  
var serverUrl="<?php echo URL; ?>";
var data;
var  x = document.getElementById("table");
var y = document.getElementById("regForm");
var back= document.getElementById("btnAdd");
var z =document.getElementById("view");
//var header = document.getElementById("heading");
var submit= document.getElementById("submitbtn"); 
var otable, displayTable=[], txt;
    var datefrom = document.getElementById("txtDate").value;
    function addfreightratemaster(){
	if(back.value == "Add New freightratemaster"){
		data="";
		updateEditinfo(data);
  
	x.style.display="none";

	y.style.display = "block";
	back.value="Back";
	z.style.display = "none";
	header.value = "Add/Edit freightratemaster"
	}
	else{
	   x.style.display="block";
	   y.style.display = "none";
	   z.style.display = "none";
	   back.value ="Add New freightratemaster";
		//header.value = "freightratemaster";
	}
}

document.getElementById("submitbtn").addEventListener("click", function(event){
event.preventDefault()
});
function submitBtn(){  var routecode = $("#routecode").val(); var routename = $("#routename").val(); var month = $("#month").val(); var year = $("#year").val(); var rate = $("#rate").val(); var unit = $("#unit").val();var button= $("#submitbtn").val();
	var vid=$("#vid").val();
	if( routecode!='' && routename!='' && month!='' && year!='' && rate!='' && unit!=''){
      if(button == "Submit"){
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            url = serverUrl+"master/add_freightratemaster?routecode="+routecode+"&routename="+routename+"&month="+month+"&year="+year+"&rate="+rate+"&unit="+unit+"";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
            createTable();
            x.style.display = "block";
			y.style.display = "none";
			z.style.display = "none";
            back.value="Add New freightratemaster";
            $.notify("freightratemaster Added Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
        xhr1.send();
      }
      else{
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            overrideMimeType = "application/json",
            url =  serverUrl+"master/edit_freightratemaster?id="+vid+"&routecode="+routecode+"&routename="+routename+"&month="+month+"&year="+year+"&rate="+rate+"&unit="+unit+"";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
            createTable();
            y.style.display = "none";
			x.style.display = "block";
			z.style.display = "none";
            back.value="Add New freightratemaster";
            $.notify("freightratemaster Updated Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
		xhr1.send();$("#routecode").text("");$("#routename").text("");$("#month").text("");$("#year").text("");$("#rate").text("");$("#unit").text("");
      }
    }
    else{

  if(routecode==""){
		 $("#routecode_alertMsgTxt").text("Please Enter routecode");
      }
      else{
	 $("#routecode_alertMsgTxt").text("");
	  }
	    if(routename==""){
		 $("#routename_alertMsgTxt").text("Please Enter routename");
      }
      else{
	 $("#routename_alertMsgTxt").text("");
	  }
	    if(month==""){
		 $("#month_alertMsgTxt").text("Please Enter month");
      }
      else{
	 $("#month_alertMsgTxt").text("");
	  }
	    if(year==""){
		 $("#year_alertMsgTxt").text("Please Enter year");
      }
      else{
	 $("#year_alertMsgTxt").text("");
	  }
	    if(rate==""){
		 $("#rate_alertMsgTxt").text("Please Enter rate");
      }
      else{
	 $("#rate_alertMsgTxt").text("");
	  }
	    if(unit==""){
		 $("#unit_alertMsgTxt").text("Please Enter unit");
      }
      else{
	 $("#unit_alertMsgTxt").text("");
	  }
	  return false;
    }
  } 
  $(document).ready(function(){
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
        url = ""+serverUrl+"master/getallfreightratemaster";
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        if(xhr.responseText){
          var data=JSON.parse(xhr.responseText);
		  for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var routecode ='<td>'+data[i]["routecode"]+'</td>';var routename ='<td>'+data[i]["routename"]+'</td>';var month ='<td>'+data[i]["month"]+'</td>';var year ='<td>'+data[i]["year"]+'</td>';var rate ='<td>'+data[i]["rate"]+'</td>';var unit ='<td>'+data[i]["unit"]+'</td>';txt = txt+routecode+routename+month+year+rate+unit;
			 txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
            displayTable[i]= txt;
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
	if(data==1){
  updateinfo(id);
  x.style.display = "none";
  z.style.display = "block";
  y.style.display = "none";
  back.value = "Back"

}else{
	x.style.display = "none";
	y.style.display = "block";
	z.style.display ="none"
	back.value = "Back";

updateEditinfo(id);
}
   

}

  function updateEditinfo(mdata){ $("#routecode_alertMsgTxt").text(""); $("#routename_alertMsgTxt").text(""); $("#month_alertMsgTxt").text(""); $("#year_alertMsgTxt").text(""); $("#rate_alertMsgTxt").text(""); $("#unit_alertMsgTxt").text("");
    if(mdata != ""){
      var xhr4 = new XMLHttpRequest(), 
          method = "GET",
          overrideMimeType = "application/json",
          url =   serverUrl+"master/view_freightratemaster?id="+mdata;
      xhr4.onreadystatechange = function () {
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
          var data=JSON.parse(xhr4.responseText);
		  document.getElementById("vid").value = mdata;document.getElementById("routecode").value = data[0]["routecode"];document.getElementById("routename").value = data[0]["routename"];document.getElementById("month").value = data[0]["month"];document.getElementById("year").value = data[0]["year"];document.getElementById("rate").value = data[0]["rate"];document.getElementById("unit").value = data[0]["unit"];submit.value="Update";
        }
      };
      xhr4.open(method, url, true);
      xhr4.send();
    }
	else if(mdata == ""){document.getElementById("routecode").value = "";document.getElementById("routename").value = "";document.getElementById("month").value = "";document.getElementById("year").value = "";document.getElementById("rate").value = "";document.getElementById("unit").value = "";
      submit.value="Submit";
    }
  }

  function updateinfo(sdata){
      
	if(sdata != null){
	var xhr3 = new XMLHttpRequest(), 
	method = "GET",
	overrideMimeType = "application/json",
	url = serverUrl+"master/view_freightratemaster?id="+sdata; 
xhr3.onreadystatechange = function () {

	if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
		var data= JSON.parse(xhr3.responseText);
		document.getElementById("routecode_view").innerHTML= data[0]["routecode"];document.getElementById("routename_view").innerHTML= data[0]["routename"];document.getElementById("month_view").innerHTML= data[0]["month"];document.getElementById("year_view").innerHTML= data[0]["year"];document.getElementById("rate_view").innerHTML= data[0]["rate"];document.getElementById("unit_view").innerHTML= data[0]["unit"];
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
          url = serverUrl+"master/delete_freightratemaster?id="+id;
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
