<style>
.account-box #error
{
    color: #F36;
}
</style>
<div class="container">
	 <div class="row">		
		<div class="col-md-12">
  			<div class="account-box">
            <span style="font-size:18px;"><strong>Settings</strong></span>
             <br clear="all" />
<div class="or-box">
 </div>
 <div id="error">
 <strong><center><p class="msg" style="color:blue;"><?php echo $this->msg; ?></p></center></strong>
</div>
<div>
              <a href="<?php echo URL; ?>vts/changepassword" class="btn btn-primary pull-left" type="button">Change Password</a>
              </div>
              <br clear="all" />
              <br /><br />
    <form action="#" method="post">
		  
			  <div class="alert alert-success" style="display:none">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4>success!!</h4>
			  </div>
              
				<label><strong>Stoppage time </strong></label>
          
			  
			  <span class="help-block"><small>Stoppage more than <strong>2 mins</strong> is captured and displayed on the map.</small></span>
             
			  <div style="">
				  <label><strong>Idling time in mins</strong></label>
				  <span class="help-block"><small>Idling more than <strong>3 mins</strong> is captured and displayed on the map. Opt to receive alert for Idling more than <strong>5 mins</strong> by checking the boxes below.</small></span>
				  <!-- input type="text" value="" name="idling_time_in_mins" -->
				  <label>
						<input type="checkbox" name="idling_email_notification" value="1" checked > Email Notification
				   </label><br />
				   <label>
						<input type="checkbox" name="idling_smartphone_notification" value="1" checked> SmartPhone Notification
				   </label>			  
			  </div>
			  <br/>
			  <label><strong>Overspeeding Limit</strong></label>
			  <input type="text" value="60" name="overspeeding_in_km_hr" ><br/>
			  <label>
					<input type="checkbox" name="overspeeding_email_notification" value="1" checked> Email Notification
			   </label><br/>
			   <label>
					<input type="checkbox" name="overspeeding_smartphone_notification" value="1" checked> SmartPhone Notification
			   </label>
			  <span class="help-block"><small>(E.g. 80 miles/hr or 80 km/hr based on your unit preference selected - It can not be less than 40 km/hr) </small></span>
			  <span style="color:#B94A48;"><small></small></span>	
			  <br/>	 
			  <label><strong>GeoZones Alert</strong></label><br/>
			   <label>
					<input type="checkbox" name="geozones_email_notification" value="1" checked> Email Notification
			   </label><br />
			   <label>
					<input type="checkbox" name="geozones_smartphone_notification" value="1" checked> SmartPhone Notification
			   </label>
			  <span class="help-block"><small>You can set geozones by right clicking on the map while checking the vehicle's trip history.<a href="/home/map">Click here to set.</a>  </small></span>
			  
              <br/>
			   <label style = "display:none">
					<input type="checkbox" name="enable_safemode"  > <strong>Safe Mode</strong>
			   </label>			  
			  <span class="help-block" style = "display:none"><small>After you park your vehicle at an unknown place, enable SafeMode. When in SafeMode, if someone tries to break into your vehicle,  you will be alerted.(Please remember to disable SafeMode before you start your car again.)</small></span>
			  
              <br/>
			  <label><strong>Email Address</strong></label>
			  <input type="text" value="" name="notify_email">			  
			  <span class="help-block"><small>Enter the email address where you want to get notified of any misuse. Use comma separation to enter multiple email addresses. eg. ravi@hotmail.com,kiran@gmail.com</small></span>
			  <span style="color:#B94A48;"><small></small></span>	
			 			  
			  <input class="color" name="route_color" id="route_color" value="#605EB4" type="hidden">
			  <input class="color" name="overspeeding_color" id="overspeeding_color" value="#FF0000" type="hidden">
			 
			  <br/>
			  <label><strong>Unit Preference</strong></label><br/>
			   <label>
					<input type="radio" name="unit_preference" value="km" checked> Kilometer
			   </label><br />
			   <label>
					<input type="radio" name="unit_preference" value="mile" > Mile
			   </label>
			   
			   <label></label><br />
			   <label>
					<input type="checkbox" name="enable_business_trip" checked> <strong>Enable Business Trips</strong>
			   </label>			  
			  <span class="help-block"><small>Using this feature you can mark your trips as business trip and later on take a print out of all your business trips.</small></span>			  
			   <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
			   <button class="btn btn-primary" type="submit">Submit</button>
			   <button class="btn btn-danger " type="submit">Skip</button>
			  </div> 
              </div>
	   <br />
       <br />
    </form>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>
    </div>
   

<div id="content-below" class="wrapper">
</div>
