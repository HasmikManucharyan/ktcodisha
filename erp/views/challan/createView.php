<div class="container">
	            <div class="row">
                 <div class="col-md-12">
                 <center>
View Page
<form action="">
<input type ="text" name="FunctionName" value ="<?php echo $this->FunctionName; ?>"	/>
<input type="textarea" name="FunctionInputs"  value="<?php echo $this->FunctionInputs; ?>"/>
<input type="submit" name="Submit" />
</form>
</center>
<br/>
<?php

$finputs = split(' ',$this->FunctionInputs);
//print_r($finputs);
//echo count($finputs);
$FI = "";

echo"<textarea style='width:1000px;height:350px;' id='textareaVIEW'>";
echo htmlspecialchars('<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
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
</script></head> 
<style>
table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
table.tdesign th {
background: #d9edf7;
color: #000;
padding: 2px;
border: 1px solid #ccc;
}
</style>


<div class="container">
<div class="row">		
<div class="col-md-12">
<div class="account-box">  
<div>
<span style="font-size:16px;">'.$this->FunctionName.'</span> 
</div>
<br>
<div style="margin-left:5px">
<input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:0px; margin-bottom:10px" onclick="add'.$this->FunctionName.'()" value="Add New '.$this->FunctionName.'">
</div> 
<br clear="all" />
<div class="or-box">
<center> <input type="text" id="searchTxt" placeholder="Search"></center><br>
</div>
<div class="table-responsive" id="table">');

echo htmlspecialchars('<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
<thead><tr>');
for($i=0;$i<count($finputs);$i++){
		echo htmlspecialchars('<th>'.$finputs[$i].'</th>');
}

	 echo htmlspecialchars('<th></th><th></th><th></th></tr></thead>
								 
</table>	

</div>');
echo htmlspecialchars(' <div id="regForm" hidden>');
for($i=0;$i<count($finputs);$i++){
echo htmlspecialchars('<div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
  <label class="control-label col-xs-12" for="email">
	<span style="color:red;">*
	</span> '.$finputs[$i].':
  </label>
  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
	<input class="form-control" type="text" name="'.$finputs[$i].'" id="'.$finputs[$i].'" placeholder="Enter '.$finputs[$i].'" value="">
  </div>
  <span id="'.$finputs[$i].'_alertMsgTxt" style="color:red;">
  </span>
</div>');
}
echo htmlspecialchars('<input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
<div style="padding-left:70px">
  <input type="hidden" id="vid">
  <input type="submit" name="submit" id="submitbtn" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
</div>
</div>');


echo htmlspecialchars('<div id="view" hidden>
<span style="font-size:14px;"><strong>View</strong></span>
														
<div class="table-responsive">  
<div class="col-md-12">

				<div class="panel-primary" >
										<div class="panel-heading" align="center">Diesel Rate Details</div>
																<div class="panel-body">  ');
																for($i=0;$i<count($finputs);$i++){
										
																	echo htmlspecialchars('   <div class="col-xs-6 form-group">
												<label class="control-label col-xs-4" for="'.$finputs[$i].'_view">'.$finputs[$i].'</label>
												<div class="col-xs-8" id="'.$finputs[$i].'_view">
												
													</div>
											</div>
											');
																}				
										echo htmlspecialchars('</div>
										</div>
											

					</div>     
	</div>
						  
</div>');
echo htmlspecialchars('<script>  
var serverUrl="<?php echo URL; ?>";
var data;
var  x = document.getElementById("table");
var y = document.getElementById("regForm");
var back= document.getElementById("btnAdd");
var z =document.getElementById("view");
var header = document.getElementById("heading");
var submit= document.getElementById("submitbtn"); 
var otable, displayTable=[], txt;');

echo htmlspecialchars('function add'.$this->FunctionName.'(){
	if(back.value == "Add New '.$this->FunctionName.'"){
		data="";
		updateEditinfo(data);
  
	x.style.display="none";

	y.style.display = "block";
	back.value="Back";
	z.style.display = "none";
	header.value = "Add/Edit '.$this->FunctionName.'"
	}
	else{
	   x.style.display="block";
	   y.style.display = "none";
	   z.style.display = "none";
	   back.value ="Add New '.$this->FunctionName.'";
		header.value = "'.$this->FunctionName.'";
	}
}

document.getElementById("submitbtn").addEventListener("click", function(event){
event.preventDefault()
});');


echo htmlspecialchars('
function submitBtn(){ ');
	$validationconditionTxt="";
	$queryString="";
	for($i=0;$i<count($finputs);$i++){

    echo htmlspecialchars(' var '.$finputs[$i].' = $("#'.$finputs[$i].'").val();');
   
	
	if($i<count($finputs)-1){
	$validationconditionTxt .= " ".$finputs[$i]."!='' &&";
	$queryString .= $finputs[$i].'="+'.$finputs[$i].'+"&';
	}else {
		$validationconditionTxt .= " ".$finputs[$i]."!=''";
		$queryString .= $finputs[$i].'="+'.$finputs[$i].'+"';
	}
	}
	echo htmlspecialchars('var button= $("#submitbtn").val();');
	echo htmlspecialchars('
	var vid=$("#vid").val();
	if('.$validationconditionTxt.'){
      if(button == "Submit"){
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            url = serverUrl+"hsd/add_'.$this->FunctionName.'?'.$queryString.'";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
            createTable();
            x.style.display = "block";
			y.style.display = "none";
			z.style.display = "none";
            back.value="Add New '.$this->FunctionName.'";
            $.notify("'.$this->FunctionName.' Added Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
        xhr1.send();
      }
      else{
        var xhr1 = new XMLHttpRequest(), 
            method = "POST",
            overrideMimeType = "application/json",
            url =  serverUrl+"hsd/edit_'.$this->FunctionName.'?id="+vid+"&'.$queryString.'";
        xhr1.onreadystatechange = function () {
          if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
            createTable();
            y.style.display = "none";
			x.style.display = "block";
			z.style.display = "none";
            back.value="Add New '.$this->FunctionName.'";
            $.notify("'.$this->FunctionName.' Updated Successfully", "success");
          }
        };
        xhr1.open(method, url, true);
		xhr1.send();');
		for($i=0;$i<count($finputs);$i++){
			echo htmlspecialchars('$("#'.$finputs[$i].'").text("");');
		}
		
		echo htmlspecialchars('
      }
    }
    else{

');

for($i=0;$i<count($finputs);$i++){
    echo htmlspecialchars('  if('.$finputs[$i].'==""){
		 $("#'.$finputs[$i].'_alertMsgTxt").text("Please Enter '.$finputs[$i].'");
      }
      else{
	 $("#'.$finputs[$i].'_alertMsgTxt").text("");
	  }
	  ');
	}
	  

   echo htmlspecialchars('return false;
    }
  } ');

  echo htmlspecialchars('
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
        url = ""+serverUrl+"hsd/getall'.$this->FunctionName.'";
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        if(xhr.responseText){
          var data=JSON.parse(xhr.responseText);
		  for(var i=0; i<data.length; i++){');
			
			echo htmlspecialchars('txt =\'<tr style="height:20px;" role="row">\';');
			$tempRes="";
			for($i=0;$i<count($finputs);$i++){
			
				//var $finputs[$i] = ''
				echo htmlspecialchars('var '.$finputs[$i].' =\'<td>\'+data[i]["'.$finputs[$i].'"]+\'</td>\';');
				if($i<count($finputs)-1){
					$tempRes .= $finputs[$i]."+";
				}else{
					$tempRes .= $finputs[$i].";";
				}
			}
			echo htmlspecialchars('txt = txt+'.$tempRes.'
			 txt =txt+\'<td><button type="button" onclick="javascript: view(\'+data[i][\'id\']+\',1)">VIEW</button></td><td><button type="button" onclick="javascript: view(\'+data[i][\'id\']+\',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete(\'+data[i][\'id\']+\');" id="delete">DELETE</button></td></tr>\';
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

  function updateEditinfo(mdata){');
	for($i=0;$i<count($finputs);$i++){
		echo htmlspecialchars(' $("#'.$finputs[$i].'_alertMsgTxt").text("");');
	}
	echo htmlspecialchars('
    if(mdata != ""){
      var xhr4 = new XMLHttpRequest(), 
          method = "GET",
          overrideMimeType = "application/json",
          url =   serverUrl+"hsd/view_'.$this->FunctionName.'?id="+mdata;
      xhr4.onreadystatechange = function () {
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
          var data=JSON.parse(xhr4.responseText);
		  document.getElementById("vid").value = mdata;');
		  for($i=0;$i<count($finputs);$i++){
			echo htmlspecialchars('document.getElementById("'.$finputs[$i].'").value = data[0]["'.$finputs[$i].'"];');
		}
          echo htmlspecialchars('submit.value="Update";
        }
      };
      xhr4.open(method, url, true);
      xhr4.send();
    }
	else if(mdata == ""){');
	  for($i=0;$i<count($finputs);$i++){
		echo htmlspecialchars('document.getElementById("'.$finputs[$i].'").value = "";');
	}
echo htmlspecialchars('
      submit.value="Submit";
    }
  }

  function updateinfo(sdata){
      
	if(sdata != null){
	var xhr3 = new XMLHttpRequest(), 
	method = "GET",
	overrideMimeType = "application/json",
	url = serverUrl+"hsd/view_'.$this->FunctionName.'?id="+sdata; 
xhr3.onreadystatechange = function () {

	if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
		var data= JSON.parse(xhr3.responseText);
		');
		for($i=0;$i<count($finputs);$i++){

	echo htmlspecialchars('document.getElementById("'.$finputs[$i].'_view").innerHTML= data[0]["'.$finputs[$i].'"];');
		}
	echo htmlspecialchars('
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
          url = serverUrl+"hsd/delete_'.$this->FunctionName.'?id="+id;
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
');

echo"</textarea>";
echo"<br/><button id='buttonVIEW'>Download View</button><br/><br/>";

echo"<textarea style='width:1000px;height:350px;' id='textareaCONTROLLER'>";

echo htmlspecialchars('
function '.$this->FunctionName.'(){
        	
       
	$this->view->render("hsd/'.$this->FunctionName.'");
	
}

function getall'.$this->FunctionName.'(){
 $this->view->all'.$this->FunctionName.' = $this->model->'.$this->FunctionName.'();
	echo json_encode($this->view->all'.$this->FunctionName.');
}

function view_'.$this->FunctionName.'() 
{
	
	$data = $_REQUEST;
	if($data["id"]=="")
		{
			$this->view->pick="";
			$this->view->data=$data;
		} 
	else 
		{
			$this->view->pick=$data["id"];
			$this->view->content= $this->model->view_'.$this->FunctionName.'($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_'.$this->FunctionName.'(){
	$id=$_REQUEST["id"];
	$this->model->delete_'.$this->FunctionName.'($id);
	
}

function add_'.$this->FunctionName.'(){
	$data = array( 
				"id" => null, ');
				for($i=0;$i<count($finputs);$i++){
					if($i<count($finputs)-1){
						$tempRes .= $finputs[$i]."+";
					echo htmlspecialchars('"'.$finputs[$i].'" => $_REQUEST["'.$finputs[$i].'"],');
					}else{
						echo htmlspecialchars('"'.$finputs[$i].'" => $_REQUEST["'.$finputs[$i].'"]');
					}
				}
				echo htmlspecialchars('
			   );
	$this->model->add_'.$this->FunctionName.'($data);
	
}

function edit_'.$this->FunctionName.'(){
	$arg=$_REQUEST["id"];
	$data = array( ');
			   
	for($i=0;$i<count($finputs);$i++){
		if($i<count($finputs)-1){
			$tempRes .= $finputs[$i]."+";
		echo htmlspecialchars('"'.$finputs[$i].'" => $_REQUEST["'.$finputs[$i].'"],');
		}else{
			echo htmlspecialchars('"'.$finputs[$i].'" => $_REQUEST["'.$finputs[$i].'"]');
		}
	}

				echo htmlspecialchars('
			   );
	$this->model->edit_'.$this->FunctionName.'($data,$arg);
}
');
echo"</textarea>";
echo"<br/><button id='buttonCONTROLLER'>Download CONTROLLER</button><br/><br/>";

echo"<textarea style='width:1000px;height:350px;' id='textareaMODEL'>";
echo htmlspecialchars('

public function '.$this->FunctionName.'()
{

   return $this->db->select("SELECT * FROM '.$this->FunctionName.' ");
	
   
}
public function view_'.$this->FunctionName.'($id){
	
	return $this->db->select("SELECT * FROM '.$this->FunctionName.' WHERE id=".$id." LIMIT 1");
}

public function delete_'.$this->FunctionName.'($id)   
{
	$this->db->delete(\''.$this->FunctionName.'\', "`id` = {$id}");
	//echo "delete $id";
}

public function add_'.$this->FunctionName.'($data){
	
	$this->db->insert(\''.$this->FunctionName.'\', $data);
}

public function edit_'.$this->FunctionName.'($data,$arg){
	$this->db->update(\''.$this->FunctionName.'\', $data,
			"`id` = $arg");
	
}

');
echo"</textarea>";
echo"<br/><button id='buttonMODEL'>Download MODEL</button><br/><br/>";
echo "<br/> <br/>for MODEL<br/>"	;
for($i=0;$i<count($finputs);$i++){
//echo $finputs[$i];
   $FI = $FI."&#36;".$finputs[$i]." = &#36;data['".$finputs[$i]."'];<br/>";
}
/**/
echo $FI;

/*
echo '&lt;soap:Body&gt;
				  &lt;'.$this->FunctionName.' xmlns="http://tempuri.org/"&gt;
					&lt;dtashinput&gt;&lt;![CDATA[
					&lt;table&gt;
					&lt;row&gt;';
					
*/					

echo "<br/> <br/>for SOAP<br/>"	;
					for($i=0;$i<count($finputs);$i++){
					
					echo "&lt;".strtolower($finputs[$i])."&gt;'&#36;".$finputs[$i]."'&lt;".strtolower($finputs[$i])."&gt;<br/>";
					}
					
					
					echo "<br/> <br/>for Forms<br/>"	;
						
				   for($i=0;$i<count($finputs);$i++){
					
					echo "&#36;".$finputs[$i]." = &#36;_REQUEST['".$finputs[$i]."']";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					}
					
					
					echo "<br/> <br/>for Form to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;_REQUEST['".$finputs[$i]."']";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					
					}
					echo ")";
					
					echo "<br/> <br/>for Data to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;".$finputs[$i];
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					
					}
					echo ")";
					
					echo "<br/> <br/>for DOM to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;doc->getElementsByTagName('".strtolower($finputs[$i])."')->item(0)->nodeValue";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					}
					echo ")";
					/*
echo '&lt;/row&gt;
					 &lt;/table&gt;
					 ]]&gt;
					&lt;/dtashinput&gt;
					&lt;transportercode&gt;ASH001&lt;/transportercode&gt;
					&lt;authorizationcode&gt;Org&lt;/authorizationcode&gt;
				  &lt;/VL_ASH_PushVehicleDetails&gt;
				&lt;/soap:Body&gt;';
				*/
 ?>

</div>
</div>
</div>
<script>
	$("#buttonVIEW").click(function() {
  // create `a` element
  $("<a />", {
      // if supported , set name of file
      download: "<?php echo $this->FunctionName; ?>_VIEW.txt",
      // set `href` to `objectURL` of `Blob` of `textarea` value
      href: URL.createObjectURL(
        new Blob([$("#textareaVIEW").val()], {
          type: "text/plain"
        }))
    })
    // append `a` element to `body`
    // call `click` on `DOM` element `a`
    .appendTo("body")[0].click();
    // remove appended `a` element after "Save File" dialog,
    // `window` regains `focus` 
    $(window).one("focus", function() {
      $("a").last().remove()
    })
})
$("#buttonCONTROLLER").click(function() {
  // create `a` element
  $("<a />", {
      // if supported , set name of file
      download: "<?php echo $this->FunctionName; ?>_CONTROLLER.txt",
      // set `href` to `objectURL` of `Blob` of `textarea` value
      href: URL.createObjectURL(
        new Blob([$("#textareaCONTROLLER").val()], {
          type: "text/plain"
        }))
    })
    // append `a` element to `body`
    // call `click` on `DOM` element `a`
    .appendTo("body")[0].click();
    // remove appended `a` element after "Save File" dialog,
    // `window` regains `focus` 
    $(window).one("focus", function() {
      $("a").last().remove()
    })
})
$("#buttonMODEL").click(function() {
  // create `a` element
  $("<a />", {
      // if supported , set name of file
      download: "<?php echo $this->FunctionName; ?>_MODEL.txt",
      // set `href` to `objectURL` of `Blob` of `textarea` value
      href: URL.createObjectURL(
        new Blob([$("#textareaMODEL").val()], {
          type: "text/plain"
        }))
    })
    // append `a` element to `body`
    // call `click` on `DOM` element `a`
    .appendTo("body")[0].click();
    // remove appended `a` element after "Save File" dialog,
    // `window` regains `focus` 
    $(window).one("focus", function() {
      $("a").last().remove()
    })
})
</script>