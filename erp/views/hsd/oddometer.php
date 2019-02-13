
                        
                        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
                        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
                        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
                        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
                        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                               
                                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
                              <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
       <span style="font-size:18px;"><strong>Oddometer</strong></span>
      
      <br clear="all" />
<div class="or-box">
   
 </div>                       
               
 <div style="height:180px">
                    <div id="containScan" style="float:left; height: 24px; width: 24px; margin-right: 4px;">
                        
                        
                        <button type="button" style="width: 100px; height:50px" id="deviceBAR_code" onClick="deviceBAR_code()">Scan QR</button>
                       <!-- <button type="button" style="width: 150px; height:50px" id="driverBAR_code" onload="driverBAR_code()">Scan Driver</button>-->
                        <!-- <a href="qrdetail.html"><button type="button" style="width: 150px; height:100px" id="driverBAR_code">Scan Driver QR </button> --> 
                      </div>
                   
                    <div style="text-align: center; float:left; position:relative; left:120px" class="liketext" id="compassSource"> 
                        <br/>
                        <br>
                        <br>     
                <img  src="img/Neddle.png" id="imgCompass" onload="OnImageLoad()" style="text-align:center; transform:rotate(0);transition:all 1.5s; position:relative;right:0px; width:20; height:90"/>
            </div>
             </div>
             <br>
             
             <h1 id="txtStatus" style="color:#000;"></h1>
             <div id="vehicle" style="color: #000;"></div>
             <div id="status" style="color:#000;"></div>
             <br>
             <div id="lastform">
                    <div  style="text-align:center"><strong>Last Field</strong></div>
                    <table style="width:100%">  
                            <tr>
                             <td>Date</td>
                              <td id="date"></td>
                            </tr>
                            
                            <tr>
                             <td>Open Oddometer</td>
                              <td id="o_oddo"></td>
                            </tr>
                             <tr>
                             <td>Close Oddometer</td>
                              <td id="c_oddo"></td>
                            </tr>
                           
                          </table>
             </div>
             <br>
             <div style="color:black; position:relative; left:20px;" id="form">
                <div style="text-align:center"><strong>Current Field</strong></div>
                
                
                <label for="Date">Date:</label>
                <div style="width:300px;color:black">     
                <input type="text" id="datetime" style="position:relative; background-color:#fff;color:black">
                 </div>
                
               
                <label for="OpenOddo">Enter Oddometer Reading:</label>
                <div style="width:300px;color:black">
                <input type="number" id="openoddo" style="position:relative;background-color:#fff;color:black">
            </div>
                <label for="CloseOddo">Distance Travelled:</label>
                <div style="width:300px;color:black">
                <input type="number" id="closeoddo" style="position:relative; background-color:#fff;color:black">
            </div>
                    <label for="CloseOddo">Millage:</label>
                <div style="width:300px;color:black">
                <input type="number" id="closeoddo" style="position:relative; background-color:#fff;color:black">
            </div>
            <label for="CloseOddo">Diesel Issue Date:</label>
                <div style="width:300px;color:black">
                <input type="number" id="closeoddo" style="position:relative; background-color:#fff;color:black"></input>
            </div>
            <label for="CloseOddo">Issue Quantity:</label>
                <div style="width:300px;color:black">
                <input type="number" id="closeoddo" style="position:relative; background-color:#fff;color:black"></input>
            </div>
            <label for="CloseOddo">Millage Calculation:</label>
                <div style="width:300px;color:black">
                <input type="number" id="closeoddo" style="position:relative; background-color:#fff;color:black"></input>
            </div>
            <div id="submit" style="width:100px; height:50px; margin-top:10%; position:relative; left:120px">
                <button id="submit" type="button" onclick="submit()">Submit</button>
                </div> 
                                  </div>
</div>
