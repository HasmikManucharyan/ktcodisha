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
                <th>Begining</th>
                <th>End</th>
                <th>Initial Location</th>
                <th>Final Location</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>sl No</th>
                <th>Begining</th>
                <th>End</th>
                <th>Initial Location</th>
                <th>Final Location</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
            </tr>
            <tr>
                <td>3</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                
            </tr>
            <tr>
                <td>4</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                
            </tr>
            <tr>
                <td>5</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                
            </tr>
            <tr>
                <td>6</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                
            </tr>
            <tr>
                <td>7</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                
            </tr>
            <tr>
                <td>8</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                
            </tr>
            <tr>
                <td>9</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
               
            </tr>
            <tr>
                <td>10</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                
            </tr>
            <tr>
                <td>11</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
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
