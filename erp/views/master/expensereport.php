<script>
$(document).ready(function() {
$("#today").click(function(){
//alert("success");
var from = "<?php echo date('Y-m-d'); ?>";
var to = "<?php echo date('Y-m-d'); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#yesterday").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-1 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#week").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-7 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#month").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-30 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#lifetime").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-90 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
});
</script>
<div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Expense Report</strong></span><a href="<?php echo URL; ?>master/expenselog"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
  <center>
                       
                        <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
                        <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
                        <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
                        <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
                        <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
        </center>
 
<center><?php echo $this->msg; ?></center>
<!--<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="account-box">-->
                <form action="<?php echo URL; ?>master/expensereport" method="post">
                <div class="panel-heading"></div>
	                    <div class="panel-body">  
                       <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6"> 
	  <select selected="selected" class="form-control" name="VehicleNo" id="VehicleNo" value="<?php echo $VehicleNo; ?>">
 <!--<select class="form-control" name="deviceId">	!-->
  <?php 
					foreach($this->Alldevices AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($value['id']==$this->vehicleno){ echo "selected=selected"; }?>><?php echo $value['name']; ?></option>
					<?php } ?>
 </select>
      </div>
    </div>
            
                <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="category">Expense Category:</label>
      <div class="col-xs-6">          
       <select selected="selected" class="form-control" name="category" id="category" value="<?php echo $this->category; if($value['category']==$this->category){ echo "selected=selected"; }?>">
     <option selected="selected" value="category">Choose Category</option>
   <option value="regular" >Regular</option>
   <option value="accidental">Accidental</option>
   <option value="salary">Salary</option> 
   <option value="fuel">Fuel</option> 
		
		 </select>
      </div>
   </div>
 
   <!--<div class="form-group col-xs-6">
       <label class="control-label col-xs-6" for="date">Date:</label>
          <div class="col-xs-6">          
             <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" value="<?php //echo $this->mdate; if($this->mdate==''){echo date('Y-m-d');} ?>">
          </div>
   </div>!-->
  <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="from" id="from" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');}?>"/>
       
      </div>
    </div> 
 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="to" id="to" value="<?php echo $this->to; if($this->to==''){echo date('Y-m-d');}?>"/>
      </div>
    </div> 
     
    
	<div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">  
              
         <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
		</div>
      </div>
       <br clear="all"/>
                
                       </form>
                       <br />
                       <br />
                       <br />
	
	


 
                        <div class="table-responsive">
         		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        			  <thead>
                        	<tr>
                                                <th>Account Head</th>
                                                <th>Service</th>
                                               	<th>Amount</th>
                                                </tr>
                                             </thead>
			
				<?php foreach($this->expensereport AS $key=>$value){ 
					?>
                      
											 <tr>
											 
											  	<td><?php echo $value['accounthead']; ?></td>
												<td><?php echo $value['service']; ?></td>
												<td><?php echo $value['amount']; ?></td>
												
											
												
									
                                              </tr>
											  


					<?php } ?>
                     </table>
                     </div>
</div>

</div>
</div>
</div>
</div>
		
		<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>var pamount=[]</script>
<!--<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>!-->
<div class="container">
<div class="account-box">
  <h4 class="title">Expense Chart <?php echo $vehicle; ?> Date : <?php echo $this->mdate; ?></h4>
  <br clear="all" />
<div class="or-box">
 </div>
<div class="card-content"> <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"><canvas id="mycanvas"></canvas></div>
</div>
 </div>
 </div>
 </div>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Expense chart by category'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Regular', 'Accidental', 'Salary', 'Fuel'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Expense(Amount)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Year 2015',
        data: [107, 31, 635, 203]
		/* while ($row = $res->fetch_assoc()) {
        $fat_people = $row['cnt'];
    }

    json_encode($cnt)*/
    }, {
        name: 'Year 2016',
        data: [133, 156, 947, 408]
    }, {
        name: 'Year 2017',
        data: [1052, 954, 4250, 740]
    }]
});


</script>
<script>
function confirmDelete(delUrl) {
  	if (confirm("Are you sure you want to delete")) {
    		document.location = delUrl;
  	}
}
</script>        
<script>
$(document).ready(function() {
	$('#example').dataTable( {
		"iDisplayLength": 25,
				"aLengthMenu": [
				  [5,10, 25, 50, -1],
				  [5,10, 25, 50, "all"]
				],
				responsive: true
	   } );
} );
		</script>
