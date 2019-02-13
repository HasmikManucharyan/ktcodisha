<!--<script src="<?php echo URL; ?>public/js/jquery.js"></script> 

    <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script> 

    <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo URL; ?>public/css/jquery-ui.css" rel="stylesheet">   -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
    <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet">
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet"> 
<script>
function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
  renumber_table('#table1');
}
var fixHelperModified = function(e, tr) {
		var $originals = tr.children();
		var $helper = tr.clone();
		$helper.children().each(function(index)
		{
		  $(this).width($originals.eq(index).width())
		});
		return $helper;
	};
function renumber_table(tableID) {
	$(tableID + " tr").each(function() {
		count = $(this).parent().children().index($(this)) + 1;
		$(this).find('.priority').html(count);
	});
}	
</script>
<style>
ui-sortable tr {
	cursor:pointer;
}
		
.ui-sortable tr:hover {
	background:rgba(244,251,17,0.45);
}
</style>
<div class="content">
 	<div class="container-fluid">
 		 <p>
  			<a href="<?php echo URL; ?>vts/tripcounter"><button id="btnAdd" type="button" class="btn btn-info pull-right">Back</button></a>
 		</p>
		<div class="col-md-12">
		<center><h1>Add Route</h1></center>
         <?php
 														$id=$this->content[0]['id'];
														$routename=$this->content[0]['routename'];
														
														
														?>
		<form action="<?php echo URL; ?>vts/submit_routes" method="post">
<!--
<input type="hidden" class="form-control" name="slno" id="slno" value=<?php// echo $slno; ?>/>-->
  			<div class="form-group col-xs-6">
      			<label class="control-label col-xs-6" for="routename">Route Name:</label>
       				<div class="col-xs-6">   
        				 <input type="text" class="form-control" name="routename" id="routename" value="<?php echo $routename;?>"/>
 					</div>
    		</div>
  <?php $routename = $_POST['routename']; ?>
			<div class="form-group col-xs-6">
      			<label class="control-label col-xs-6" for="geofence">Select Geofence:</label>
       				<div class="col-xs-6">   
         				<select class="form-control" name="subrouteidForm" value="" id="subrouteid">
      <!-- multiple="true"-->
      <script>var geofenceName = new Array();</script>
 							<?php 
								foreach($this->Allgeofences AS $key=>$value){
							?>
                            <script>geofenceName['<?php echo $value['id']; ?>']='<?php echo $value['name']; ?>';</script>
 							<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
 							<?php } ?>
                    	</select>
 					</div>
    		</div>
 <?php $subrouteid = $_POST['subrouteid']; ?>
    		<div class="form-group col-xs-6">
      			<label class="control-label col-xs-6" for="subroutetype">Route Type:</label>
       				<div class="col-xs-6"> 
                 <!--	     <label><input type="radio" name="subroutetype"<?php if($subroutetype=="start"){ echo "checked=checked";} ?> value="start" id="subroutetype">Start</label>
                    <label><input type="radio" name="subroutetype"<?php if($subroutetype=="middle"){ echo "checked=checked";} ?> value="middle" id="subroutetype">Middle</label>
                    <label><input type="radio" name="subroutetype"<?php if($subroutetype=="end"){ echo "checked=checked";} ?> value="end" id="subroutetype">End</label>-->
        			 <select class="selectpicker" name="subroutetypeForm" value="" id="subroutetype">
      
                                <option value="load">Loading Point</option>
                                <option value="unload">Unloading Point</option>
						</select>
                        
                        
 					</div>
    		</div>
  <?php $subroutetype = $_POST['subroutetype']; ?>
    		<div class="form-group col-xs-6">    
        		<div class="col-xs-6" id="">          
       				<button type="button" value="Get Values" id="submit1"class="btn btn-info btn-circle pull-right submit1"><i class="glyphicon glyphicon-plus"></i></button>
      			</div>
       		</div>
<table class="table table-bordered pagin-table" id="table1" name="table1">
     <thead>
        <tr>
            <th>Sl No</th>
            <th>Geofence</th>
            <th>Route Type</th>
            <th>Active</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php //Allroutes 
            $slno=0;
            foreach($this->Allroutes AS $key=>$value){
                $slno++;
            ?>
          <tr><td class="priority" id="myValue<?php echo $slno; ?>"><?php echo $slno; ?></td><td><?php	echo $value['subrouteid']."-"; ?><script>document.write(geofenceName[<?php	echo $value['subrouteid']; ?>]);</script></td><td><?php	echo $value['subroutetype']; ?></td><td><?php	echo $value['active']; ?></td><td><input type="button" class="btn btn-delete btn-danger" value="Delete" onclick="deleteRow(this)"/></td><td><button type="button" value="Move" name="move" class="btn btn-info btn-circle"><span class="glyphicon glyphicon-move"></span></button></td><input type="hidden" class="form-control" name="slno[]" value="<?php echo $slno; ?>"><input type="hidden" class="form-control" name="subrouteid[]" id="subrouteid<?php echo $slno; ?>" value="<?php echo $value['subrouteid']; ?>"><input type="hidden" class="form-control" name="subroutetype[]" id="subroutetype<?php echo $slno; ?>" value="<?php echo $value['subroutetype']; ?>"></tr>
            <?php } ?>
     </tbody>
    </table>
 <script>
  var a= 1;
  //var i= 0;
  	$("#submit1").click(function () {
        {
			var slno=a++;
          var selected = $('.form-control :selected');
          selected.each(function (a) {
          $('#table1').append('<tr><td class="priority" id="myValue'+slno+'">'+slno +'</td><td>'+ geofenceName[$(subrouteid).val()]+ '</td><td>'+$(subroutetype).val()+'</td><td></td><td><input type="button" class="btn btn-delete btn-danger" value="Delete" onclick="deleteRow(this)"/></td><td><button type="button" value="Move" name="move" class="btn btn-info btn-circle"><span class="glyphicon glyphicon-move"></span></button></td><input type="hidden" class="form-control" name="slno[]" value="'+slno +'"><input type="hidden" class="form-control" name="subrouteid[]" id="subrouteid'+slno +'" value="'+$(this).val()+'"><input type="hidden" class="form-control" name="subroutetype[]" id="subroutetype'+slno +'" value="'+$(subroutetype).val()+'"></tr>');
            // $('#table1').append('<tr><td>'+$(this).text()+'</td></tr>')
            //if you need ah text like days do with that
		 //$('table1 tbody').sortable();
		  //Make diagnosis table sortable
		   renumber_table('#table1');
	$("#table1 tbody").sortable({
    	helper: fixHelperModified,
		stop: function(event,ui) {renumber_table('#table1')}
	}).disableSelection();
            });
		}

 });
            //<a href="delete_route/+slno +"><button type="button" class="btn btn-info" value="remove">Remove</button></a>});
   /* $("#submit1").click(function() {
        var slno = id++; 
        $("#table1").append('<tr valign="top" id="'+slno+'">\n\
            <td width="100px">' + slno + '</td>\n\
            <td width="100px" class="routename'+slno+'">' + $("#routename").val() + '
		</td>\n\
			
            <td width="100px" class="subrouteid'+slno+'">' + $("#subrouteid").val() + '
			</td>\n\
			
            <td width="100px" class="subroutetype'+slno+'">' + $("#subroutetype").val() + '
			 </td>\n\
			
        </tr>');
	 $('tbody').sortable();*/
   

 /*
 
 $(document).ready(function() {
  var id = 1;
 
  //var i= 0;
  	 $("#submit1").click(function() {
        var slno = id++; 
        $("#table1").append('<tr valign="top" id="'+slno+'">\n\
            <td width="100px" >' + slno + '</td>\n\
            <td width="100px" class="routename'+slno+'">' + $("#routename").val() + '</td>\n\
            <td width="100px" class="subrouteid'+slno+'">' + $("#subrouteid").val() + '</td>\n\
            <td width="100px" class="subroutetype'+slno+'">' + $("#subroutetype").val() + '</td>\n\
        </tr>');
	 
    });
         // var selected = $('.form-control :selected');
          //selected.each(function (a) {
         // $('#table1').append('<tr><td>'+slno+'</td><td class="routename'+slno+'">'+$(routename).val()+'</td><td class="this'+slno+'">'+$(this).val()+'</td><td class="subroutetype'+slno+'">'+$(subroutetype).val()+'</td></tr>');
            // $('#table1').append('<tr><td>'+$(this).text()+'</td></tr>')
            //if you need ah text like days do with that
		  $('tbody').sortable();
		  
            //});
	
var serializedData = $('#form1').serialize();

    $.ajax({
        url: "<?php echo URL; ?>vts/submit_routes",
        type: "post",
        data: serializedData
    });

    
   // crating new click event for save button

    $("#submit").click(function() {
        var lastRowId = $('#table1 tr:last').attr("id"); //finds id of the last row inside table


        var routename = new Array();  
        var subrouteid = new Array();  
		var subroutetype = new Array();  
        for ( var i = 1; i <= lastRowId; i++) {
            routename.push($("#"+i+" .routename"+i).html());  //pushing all the names listed in the table
            subrouteid.push($("#"+i+" .subrouteid"+i).html());   //pushing all the ages listed in the table
			subroutetype.push($("#"+i+" .subroutetype"+i).html());
        }
        var sendroutename = JSON.stringify(routename);  
        var sendsubrouteid = JSON.stringify(subrouteid);
		var sendsubroutetype = JSON.stringify(subroutetype);
        $.ajax({
            url: "<?php echo URL; ?>vts/submit_routes",
            type: "post",
            data: {routename : sendroutename , subrouteid : sendsubrouteid , subroutetype : sendsubroutetype},
            success : function(data){
                alert(data);    // alerts the response from php.
                }
        });
        });
});*/
       </script>  
    		 
    <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
         <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit" style="background-color:#008000">Update</button>
	  <?php } ?>
		
     </div>
    </div>
       </form>
</div>
</div>