<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Share Module with Employee</strong></span><a href="<?php echo URL; ?>dashboard"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
  <br clear="all" />
  <?php
   $authorised= array();
   
 foreach($this->userModules AS $key=>$value){ 
      array_push($authorised,$value['moduleId']);
      $moduleAccess[$value['moduleId']]=$value['moduleAccess'];
  }
  //print_r($moduleAccess);
  ?>

  <?php
  //print_r($this->allEmployees);
  ?>
  <form action="" method="post" name="f1">
  <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 form-group">
      <label class="control-label col-xs-12 col-md-12 col-sm-12 col-lg-12" for="name">Select Employee:</label>
      <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
        <select selected="selected" class="col-xs-12 col-md-12 col-sm-12 col-lg-12 form-control" name="employee" id="employee" onchange="javascript:document.f1.submit()">
        <option value="0">Select Employee</option>
   				<?php foreach($this->allEmployees AS $key=>$value){ ?>
                  <option value="<?php echo $value['employeeID']; ?>" <?php if($this->employee==$value['employeeID']) echo "selected=selected"; ?>><?php echo $value['username']; ?></option>
        		<?php } ?>
         </select>
       </div>
   </div>
        
 </form>
  <br clear="all" />
<div class="or-box">
 </div> 
 <style>
#employeesTable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#employeesTable td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#employeesTable tr:nth-child(even){background-color: #f2f2f2;}

#employeesTable tr:hover {background-color: #ddd;}

#employeesTable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
 <?php 
 //print_r($this->allModules);
 if($this->employee !="" or $this->employee !=0){

 //print_r($this->allUserdevices);allSubModules
 ?>
   <form action="" method="post">
   <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 form-group">
      <label class="col-xs-12 col-md-12 col-sm-12 col-lg-12" for="name">Check/Uncheck to Share Module</label>
      
      <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
      <table id="employeesTable">
          <?php foreach($this->allModules AS $key=>$value){ ?>

        <tr><td>
                                     <input type="checkbox" name="module[]" id =cb<?php echo $value['id']; ?> value="<?php echo $value['id']; ?>" onclick='handleClickSub(this);' <?php if(in_array($value['id'],$authorised)){ echo "checked=checked";} ?> />&nbsp;&nbsp;<strong><?php echo $value['module_name']; ?></strong>
      </td>
      <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",1);' >View ALL</a></td>
      <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",2);' >Entry ALL</a></td>
      <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",3);' >Exit ALL</a></td>
      <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",4);' >Del ALL</a></td>
      </tr>
<!--

-->
                            <?php } ?>
                            </table>
                            <br style="clear:both;"/>
      </div>
      </div>
      </form>
      <?php 
 }
	  //print_r($this->allUserdevices); ?>
      
<br clear="all" />
 </div>
 </div>
  </div>
</div>
 <script>

function SelectSubModules(pid){
   // alert("[id^='module_"+pid+"_']");
    $("input[type='checkbox'][name*='module_"+pid+"_']").trigger('click');   
    return false;                 
}

function SelectSubAccessModules(pid,id){
   // alert("[id^='module_"+pid+"_']");
   $("input[type='radio'][name*='moduleAccess_"+pid+"_']").filter("[value="+id+"]").trigger('click');
   // $("input[type='radio'][name*='moduleAccess_"+pid+"_'][value='2']").trigger('click');
   return false;                       
}

function handleClickSub(cb) {
     var employee = document.getElementById("employee").value;
     var employeeName = $("#employee option:selected").text();
  //alert("Clicked, new value = " + cb.checked +" "+cb.value+" customer= "+customer);
  var deviceAction;
  var notifyMe;
  if(cb.checked){
	  deviceAction="Added";
      notifyMe ="success";  
	  }else{
		  deviceAction="Removed"; 
		  notifyMe ="warn";
          }
         // SelectSubModules(cb.value);
  if (employee !=0){
   //   alert(employeeName + " => "+ cb.value);

  $.ajax({
url: "<?php echo URL; ?>master/shareModuleMob",
type: "GET",
data: {
moduleid : cb.value,
employeeid : employee,
deviceAction : deviceAction
},
dataType: "html",
success: function(myData) {
$.notify("Module "+deviceAction+ " added to "+employeeName, notifyMe);
		//alert("employee "+deviceAction +"  "+myData);	
	}	
});
  }
  return false;   
}

function handleClick(cb,moduleid) {
     var employee = document.getElementById("employee").value;
     var employeeName = $("#employee option:selected").text();
  //alert("Clicked, new value = " + cb.checked +" "+cb.value+" customer= "+customer);
  var deviceAction;
  var notifyMe;
  if(cb.checked){
	  deviceAction="Added";
	  notifyMe ="success";
	  }else{
		  deviceAction="Removed"; 
		  notifyMe ="warn";
		  }
  if (employee !=0){
   //  alert(employeeName + " "+moduleid + " => "+ cb.value);

  $.ajax({
url: "<?php echo URL; ?>master/shareModuleAccessMob",
type: "GET",
data: {
moduleid : moduleid,
employeeid : employee,
moduleAccess : cb.value,
deviceAction : deviceAction
},
dataType: "html",
success: function(myData) {
$.notify("Module "+deviceAction+ " added to "+employeeName, notifyMe);
		//alert("employee "+deviceAction +"  "+myData);	
	}	
});
  }
  return false;   
}
</script>