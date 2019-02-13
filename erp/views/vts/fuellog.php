<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.colVis.min.js"></script>


<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.bootstrap4.min.css" />
<div class="content">
 <div class="container-fluid">
  <p>
  <a href="<?php echo URL; ?>vts/index"><button id="btnAdd" type="button" class="btn btn-info pull-right">Back</button></a>
 </p>
<div class="col-md-12">
  <form action="<?php echo URL; ?>vts/reports" method="POST">
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="name">Groups:</label>
	  <div class="col-xs-6"> 
 <select class="form-control" name="Groups" value="">	
  <?php 
					foreach($this->allgroups AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					<?php } ?>

 </select>
      </div>
    </div>
	
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="deviceid">Devices:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="deviceid">	
  <?php 
					foreach($this->Alldevices AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($this->deviceid==$value['id']){ $vehicle=$value['name'] ; echo "selected='selected' ";} ?>><?php echo $value['name']; ?></option>
					<?php } ?>
 </select>
      </div>
    </div>
	

	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="date" value="<?php echo $this->mdate; ?>"/>
      </div>
    </div> 
	<div class="form-group col-xs-6">   
      <label class="control-label col-xs-6" for="todate">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control">
      </div>
    </div>
	
	<center><button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button></center>
	
	<!--<?php //} else { ?>
	  <input type="hidden" value="<?php //echo $this->devicedaylog['date']; ?>" name="id">
	  <?php// } ?>-->
	  
	 </form>
</div>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>sl No</th>
                <th>Vehicle</th>
                <th>Date</th>
                <th>litre</th>
                <th>Rate</th>
                <th>Total KM</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>sl No</th>
                <th>Vehicle</th>
                <th>Date</th>
                <th>litre</th>
                <th>Rate</th>
                <th>Total KM</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>1</td>
                <td>2011/04/25</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>61</td>
                
                
            </tr>
           
        </tbody>
    </table>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
