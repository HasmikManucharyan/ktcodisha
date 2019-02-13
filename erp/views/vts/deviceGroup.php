
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap-notify.js"></script>
 <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.ui.touch-punch.min.js"></script>





<?php
//print_r($this->Alldevices);
?>
<style type="text/css">
.groupBox{
    margin-left: 15px;
    width: 235px;
    height: 100%;
    padding:5px;
    float: left;
    background-color: #d9edf7;
    border: 1px solid gray;
    display: inline-block;
}
.list {
    background-color: palegreen;
    border: 1px solid gray;
    
}
 
.items .ui-selected {
    background: red;
    color: white;
    font-weight: bold;
}
 
.items {
    list-style-type: none;
    margin-left: 10px;
    padding: 1px;
    width: 200px;
    float: left;
    -moz-column-count: 3;
    -moz-column-gap: 5px;
    -webkit-column-count: 3;
    -webkit-column-gap: 5px;
    column-count: 3;
    column-gap: 5px;
}
 
.items li {
    margin: 2px;
    padding: 2px;
    cursor: pointer;
    text-align:center;
    border-radius: 3px;
    width: 200px;
    
}
 
.g {
    background-color: lightgreen;
    width: 100%;
}
 
.o {
    background-color: orange;
}
 
.highlight {
    border: 2px solid red;
    font-weight: bold;
}
</style>



<div class="container">
<div class="row">
                 <div class="col-md-12">
				 <div class="account-box">
                     <h4>Drag Drop Vehicles in desired Groups</h4>
                     <br /><br />
<div name="group">
<?php //print_r($this->AllGroups); ?>
<div class="groupBox">
<strong><span id="c0"></span> UNGROUPED </strong>
   
    <?php foreach($this->Alldevices AS $key1=>$value1){ 
        if(0==$value1['groupid']) {
        ?>
         <ul id="items0" class="items"><li id="<?php echo $value1['id']; ?>" class="list"><?php echo $value1['name']; ?></li>  </ul>  <br>
    <?php
        }
}?>

</div>
<?php foreach($this->AllGroups AS $key=>$value){ ?>
    <div class="groupBox">
    <strong><span id="c<?php echo $value['id']; ?>"></span> <?php echo $value['name']; ?></strong>
    
    <?php foreach($this->Alldevices AS $key1=>$value1){ 
        if($value['id']==$value1['groupid']) {
        ?>
        <ul id="items<?php echo $value['id']; ?>" class="items"><li id="<?php echo $value1['id']; ?>" class="list"><?php echo $value1['name']; ?></li> </ul>
    <?php
        }
}?>
   
</div>
<?php } ?>
</div>
<br clear="all" />

	
	  </div>
	</div>
	</div>
	</div>
	  <script>
     var items="#items0,";
     var myItemsArr=[];
 <?php foreach($this->AllGroups As $key=>$value){ ?>
    items+=("#items"+<?php echo $value['id']; ?>+",");
    myItemsArr.push(<?php echo $value['id']; ?>);
 <?php } ?>	
 items=items.substring(0, items.length - 1);
<!-- Javascript -->

$(function () {
    //alert(myItemsArr.length);
    $('#c0').html($('ul#items0 li').length);
    for(i=0;i<myItemsArr.length;i++){
$('#c'+myItemsArr[i]).html($('ul#items'+myItemsArr[i]+' li').length);
}

        $(items).sortable({
                connectWith: items,
                start: function (event, ui) {
                        ui.item.toggleClass("highlight");
                },
                stop: function (event, ui) {
                    
                },
                receive: function(event, ui) {
                   // var sourceList = ui.sender;
                    //var targetList = $(this);
                    var group = $(this).attr("id");
                    group= group.substr(5);
                    var device= ui.item.attr("id");
                    // alert(group+"  "+device);
                     changeGroup(group,device);
                    ui.item.toggleClass("highlight");
                }
        });
        $(items).disableSelection();
});

function changeGroup(group,device) {
   
		$.ajax({
url: "<?php echo URL; ?>vts/updateDeviceGroup",
type: "GET",
data: {
deviceid : device,
groupid : group
},
dataType: "html",
success: function(myData) {
$.notify("Vehice Moved to Group", "success");
		//alert("Total Distance updated to "+distance+" KM");
	}	
	
	
});
$('#c0').html($('ul#items0 li').length);
for(i=0;i<myItemsArr.length;i++){
    //alert($('#items'+myItemsArr[i]+' ul li').length);
$('#c'+myItemsArr[i]).html($('ul#items'+myItemsArr[i]+' li').length);
}
}
</script>

