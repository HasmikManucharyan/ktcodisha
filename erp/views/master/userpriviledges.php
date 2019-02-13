<link rel="stylesheet" type="text/css" href="<?= URL?>public1/css/roles.css">

<!-- Ignite UI Required Combined CSS Files -->
<link href="http://cdn-na.infragistics.com/igniteui/2018.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
<link href="http://cdn-na.infragistics.com/igniteui/2018.2/latest/css/structure/infragistics.css" rel="stylesheet" />
<style>
        .containerTree {
            overflow: auto;
            width: 100%;
        }

    .containerTree h3 { margin-bottom: 5px; }

        #left {
            display: inline;
            float: left;
            width: 350px;
            margin-right: 30px;
      margin-bottom: 10px;
        }

        #right {
            float: left;
            width: 350px;
      margin-bottom: 10px;
        }

        #firstTree, #secondTree {
            font-size: 14px;
        }
        #menu_roles{
          min-height: 100px;
        }
        #child_menu, #paren_menu{
          overflow: visible;
        }

    @media screen and (max-width: 500px) {
        #left { width: 270px; }
      #right {
        width: 270px;
                clear: both;
            }
        }
    </style>
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <!-- Ignite UI Required Combined JavaScript Files -->
    <script src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/infragistics.core.js"></script>
    <script src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/infragistics.lob.js"></script>

<script type="text/javascript" src="<?= URL?>public1/js/roles.js"></script>
<script type="text/javascript" src="<?= URL?>public1/js/tree.js"></script>
<script type="text/javascript">
  var allRoles = [];
  var roles = JSON.parse('<?php echo json_encode($this->roles); ?>');
  var modules = JSON.parse('<?php echo json_encode($this->allModules); ?>');
  var allSubModules = JSON.parse('<?php echo json_encode($this->allSubModules); ?>');



  // console.log('modules',modules, 'allSubModules', allSubModules)
</script>
<div id="allRoles"></div>
<div class="container">
  <div class="row">
    <div id="roles">
    </div>
  </div>
</div>
<div class="col-md-2">
  <label>Add Roles</label>
  <select id="select_role" class="form-control">
  <?php foreach ($this->roles as $role) {?>
      <option value="<?=$role['id']?>"><?=$role['role_name']?></option>
  <?php }?>
  </select>
</div>
<div class="col-md-12">
  <div class="col-md-4" id="paren_menu"></div>
  <div class="col-md-4" id="child_menu"></div>
  <div class="col-md-4" id="menu_roles"></div>
</div>





<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="account-box">
        <span style="font-size:18px;">
          <strong>Share Module with Employee</strong>
        </span>
        <a href="<?php echo URL; ?>dashboard">
          <button id="btnAdd" type="button" class="btn btn-info pull-right">
            <i class="fa fa-angle-left"></i>
            Back
          </button>
        </a>
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
                  <option value="<?php echo $value['employeeID']; ?>" 
                    <?php if($this->employee==$value['employeeID']) echo "selected=selected"; ?>>
                    <?php echo $value['username']; ?>
                  </option>
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
        <tr>
          <td>
            <input type="checkbox" name="module[]" id =cb<?php echo $value['id']; ?> value="<?php echo $value['id']; ?>" onclick='handleClickSub(this);' <?php if(in_array($value['id'],$authorised)){ echo "checked=checked";} ?> />&nbsp;&nbsp;<strong><?php echo $value['module_name']; ?></strong>
          </td>
          <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",1);' >View ALL</a></td>
          <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",2);' >Entry ALL</a></td>
          <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",3);' >Exit ALL</a></td>
          <td><a href="#" onclick='SelectSubAccessModules("<?php echo $value['id']; ?>",4);' >Del ALL</a></td>
      </tr>
        <?php foreach($this->allSubModules AS $keys=>$values){ 
                if($value['id']==$values['pid']){
        ?>
          <tr>
            <td>                               
                <input type="checkbox" name="module_<?php echo $value['id']; ?>_[]" id =cb<?php echo $values['id']; ?> value="<?php echo $values['id']; ?>" onclick='handleClickSub(this);' <?php if(in_array($values['id'],$authorised)){ echo "checked=checked";} ?> />&nbsp;&nbsp;<?php echo $values['module_name']; ?>
            </td>
            <td>
              <input type="radio" id="mc_1_<?php echo $values['id']; ?>" name="moduleAccess_<?php echo $value['id']; ?>_<?php echo $values['id']; ?>[]" value="1" onclick='handleClick(this);' <?php if($moduleAccess[$values['id']]==1){ echo "checked=checked";} ?>> <label for="contactChoice1">View</label>
            </td>
            <td>
              <input type="radio" id="mc_2_<?php echo $values['id']; ?>" name="moduleAccess_<?php echo $value['id']; ?>_<?php echo $values['id']; ?>[]" value="2" onclick='handleClick(this,"<?php echo $values['id']; ?>");' <?php if($moduleAccess[$values['id']]==2){ echo "checked=checked";} ?>> <label for="contactChoice1">Entry</label>
            </td>
            <td>
              <input type="radio" id="mc_3_<?php echo $values['id']; ?>" name="moduleAccess_<?php echo $value['id']; ?>_<?php echo $values['id']; ?>[]" value="3" onclick='handleClick(this,"<?php echo $values['id']; ?>");' <?php if($moduleAccess[$values['id']]==3){ echo "checked=checked";} ?>> <label for="contactChoice1">Edit</label>
            </td>
            <td>
              <input type="radio" id="mc_4_<?php echo $values['id']; ?>" name="moduleAccess_<?php echo $value['id']; ?>_<?php echo $values['id']; ?>[]" value="4" onclick='handleClick(this,"<?php echo $values['id']; ?>");' <?php if($moduleAccess[$values['id']]==4){ echo "checked=checked";} ?>> <label for="contactChoice1">Del</label>
            </td>
          </tr>                     
          <?php 
                }
              } ?>
      <?php } ?>
        </table>
        <br style="clear:both;"/>
        </div>
      </div>
    </form>
<?php 
 }
	  //print_r($this->allUserdevices); 
 ?>
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
  if (cb.checked){
	  deviceAction="Added";
    notifyMe ="success";  
	} else {
		deviceAction="Removed"; 
		notifyMe ="warn";
  }
         // SelectSubModules(cb.value);
  if (employee !=0) {
 //   alert(employeeName + " => "+ cb.value);
    $.ajax({
      url: "<?php echo URL; ?>master/shareModule",
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
	} else {
		deviceAction="Removed"; 
		notifyMe ="warn";
	}
  if (employee !=0) {
   //  alert(employeeName + " "+moduleid + " => "+ cb.value);
    $.ajax({
      url: "<?php echo URL; ?>master/shareModuleAccess",
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
  for (var i=0; i<roles.length; i++) {
    allRoles.push(new Roles(roles[i].role_name, roles[i].id, []))
  }
  add_roles_form('#roles');
  var role_select = document.getElementById('select_role')
  role_select.onchange = function () {
    var id = this.value
    get_roles_module(id);
    
  }
</script>

    <script src="https://www.igniteui.com/data-files/hierarchical-files.js"></script>
