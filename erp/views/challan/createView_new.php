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
   echo htmlspecialchars('<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
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
            <span class="title_pra" style="font-size:18px;"><strong>'.$this->FunctionName.'</strong></span>
            <input type="button" id="btnAdd_'.$this->FunctionName.'"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="add'.$this->FunctionName.'()" value="Add New '.$this->FunctionName.'"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_'.$this->FunctionName.'" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_'.$this->FunctionName.'">
            ');
            echo htmlspecialchars('
            <table id="example_'.$this->FunctionName.'" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     ');
                     for($i=0;$i<count($finputs);$i++){
                     echo htmlspecialchars('
                     <th>'.$finputs[$i].'</th>
                     ');
                     }
                     echo htmlspecialchars('
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
         ');
         echo htmlspecialchars(' 
         <div id="regForm_'.$this->FunctionName.'" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            ');
            for($i=0;$i<count($finputs);$i++){
            echo htmlspecialchars('
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> '.$finputs[$i].' :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name="'.$finputs[$i].'" id="'.$finputs[$i].'" placeholder="Enter '.$finputs[$i].'"></div>
                  </div>
                  <span id="alertMsgTxt_'.$finputs[$i].'" style="color:red;"></span>
               
            ');
            }
            echo htmlspecialchars('</div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_'.$this->FunctionName.'" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         ');
         echo htmlspecialchars('
         <div id="view_'.$this->FunctionName.'" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                        ');
                        for($i=0;$i<count($finputs);$i++){
                        echo htmlspecialchars('   
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="'.$finputs[$i].'_view">'.$finputs[$i].'</label>
                           <div class="col-xs-8" id="'.$finputs[$i].'_view">
                           </div>
                        </div>
                        ');
                        }
                        echo htmlspecialchars('
                     </div>
                  </div>
               </div>
            </div>
         </div>
         ');
         echo htmlspecialchars('<script>
            var serverUrl="<?php echo URL; ?>";
            var data;
            var sensor;
            var  table_'.$this->FunctionName.' = document.getElementById("table_'.$this->FunctionName.'");
            var regForm_'.$this->FunctionName.' = document.getElementById("regForm_'.$this->FunctionName.'");
            var view_'.$this->FunctionName.' = document.getElementById("view_'.$this->FunctionName.'");
            var back_'.$this->FunctionName.' = document.getElementById("btnAdd_'.$this->FunctionName.'");
            var submit_'.$this->FunctionName.' = document.getElementById("submitbtn_'.$this->FunctionName.'"); 
            var otable_'.$this->FunctionName.', displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;');
            
            
            echo htmlspecialchars('function add'.$this->FunctionName.'(){
            if(back_'.$this->FunctionName.'.value == "Add New '.$this->FunctionName.'"){
            data="";
            updateEditinfo(data);
            
            table_'.$this->FunctionName.'.style.display="none";
             regForm_'.$this->FunctionName.'.style.display = "block";
             view_'.$this->FunctionName.'.style.display = "none";
            back_'.$this->FunctionName.'.value="Back";
            header_'.$this->FunctionName.'.value = "Add/Edit '.$this->FunctionName.'"
            }
            else{
             table_'.$this->FunctionName.'.style.display="block";
             regForm_'.$this->FunctionName.'.style.display = "none";
             view_'.$this->FunctionName.'.style.display = "none";
             back_'.$this->FunctionName.'.value ="Add New '.$this->FunctionName.'";
             header_'.$this->FunctionName.'.value = "'.$this->FunctionName.'";
            }
            }
            
            document.getElementById("submitbtn_'.$this->FunctionName.'").addEventListener("click", function(event){
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
            echo htmlspecialchars('var button= $("#submitbtn_'.$this->FunctionName.'").val();');
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
                     table_'.$this->FunctionName.'.style.display = "block";
            regForm_'.$this->FunctionName.'.style.display = "none";
            view_'.$this->FunctionName.'.style.display = "none";
                     back_'.$this->FunctionName.'.value="Add New '.$this->FunctionName.'";
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
                     regForm_'.$this->FunctionName.'.style.display = "none";
            table_'.$this->FunctionName.'.style.display = "block";
            view_'.$this->FunctionName.'.style.display = "none";
                     back_'.$this->FunctionName.'.value="Add New '.$this->FunctionName.'";
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
             otable_'.$this->FunctionName.'  = $("#example_'.$this->FunctionName.'").DataTable( {
               "paging":   false,
               "aLengthMenu": [
               ],
               dom: \'Bfrtip\',
              buttons: [
                         \'copyHtml5\',
                         \'excelHtml5\',
                         \'csvHtml5\',
                         \'pdfHtml5\'
                       ],
               initComplete : function() {
                 $("#example_'.$this->FunctionName.'_filter").detach().show();
                 $("#searchTxt_'.$this->FunctionName.'").on("input", function(){
                   otable_'.$this->FunctionName.'.search(this.value).draw();
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
                   scrollPos = $("#example_'.$this->FunctionName.'").scrollTop();
                   otable_'.$this->FunctionName.'.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_'.$this->FunctionName.'.row.add($(displayTable[i]));
                   }
                   otable_'.$this->FunctionName.'.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_'.$this->FunctionName.'.style.display = "none";
            view_'.$this->FunctionName.'.style.display = "block";
            regForm_'.$this->FunctionName.'.style.display = "none";
            back_'.$this->FunctionName.'.value = "Back"
            
            }else{
            table_'.$this->FunctionName.'.style.display = "none";
            regForm_'.$this->FunctionName.'.style.display = "block";
            view_'.$this->FunctionName.'.style.display ="none"
            back_'.$this->FunctionName.'.value = "Back";
            
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
                   echo htmlspecialchars('submit_'.$this->FunctionName.'.value="Update";
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
               submit_'.$this->FunctionName.'.value="Submit";
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
         echo"
         <textarea style='width:1000px;height:350px;' id='textareaCONTROLLER'>";

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
echo"</textarea>
         ";
         echo"<br/><button id='buttonCONTROLLER'>Download CONTROLLER</button><br/><br/>";
         echo"
         <textarea style='width:1000px;height:350px;' id='textareaMODEL'>";
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
echo"</textarea>
         ";
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

