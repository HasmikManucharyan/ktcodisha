<?php
class Traccar {
    public static $host=TRACCAR_HOST;
    private static $adminEmail=TRACCAR_ADMIN_USER;
    
    private static $adminPassword=TRACCAR_ADMIN_PASS;
    public static $cookie;
	private static $acc='Accept: application/json';
    private static $json='Content-Type: application/json';
    private static $urlencoded='Content-Type: application/x-www-form-urlencoded';
    public static function loginAdmin() {
        return self::login(self::$adminEmail,self::$adminPassword);
    }  
    
    public static function register($name,$email,$password,$cookie='') {
        $data='{"name":"'.$name.'","email":"'.$email.'","password":"'.$password.'"}';
        return self::curl('/api/users','POST',$cookie,$data,array(self::$json));
    }
    /*public static function login($email,$password) {
        $data='email='.$email.'&password='.$password;
        return self::curl('/api/session','POST','',$data,array(self::$urlencoded));
    }*/
	public static function login($email,$password) {
		 //Session::init();
		//$email=Session::get('email');
		//$password=Session::get('password');
       $data='email='.$email.'&password='.$password;
        return self::curl('/api/session','POST','',$data,array(self::$urlencoded));
    }
    /*public static function addUser($name,$email,$password,$cookie) {
        $data='{"id":-1,"name":"'.$name.'","email":"'.$email.'","password":"'.$password.'","admin":false,"map":"","distanceUnit":"","speedUnit":"","latitude":0,"longitude":0,"zoom":0,"twelveHourFormat":false","deviceLimit": -1,"userLimit": 0}';
        return self::curl('/api/users/','POST',$cookie ,$data,array(self::$json));
    }*/
	public static function addUser($name,$email,$password,$cookie) {
        $data='{"id":-1,"name":"'.$name.'","email":"'.$email.'","phone": null,"readonly": false,"admin":false,"map":"","distanceUnit":"","speedUnit":"","latitude":0.0,"longitude":0.0,"zoom":0,"twelveHourFormat":false,"coordinateFormat": null,"disabled": false,"expirationTime": null,"deviceLimit": 0,"userLimit": 0,"deviceReadonly": false,"token": null,"timezone": null,"password":"'.$password.'"}';
        return self::curl('/api/users/','POST',$cookie ,$data,array(self::$json));
    }
	
		public static function addDealer($name,$email,$password,$cookie) {
        $data='{"id":-1,"name":"'.$name.'","email":"'.$email.'","phone": null,"readonly": false,"admin":false,"map":"","distanceUnit":"","speedUnit":"","latitude":0.0,"longitude":0.0,"zoom":0,"twelveHourFormat":false,"coordinateFormat": null,"disabled": false,"expirationTime": null,"deviceLimit": -1,"userLimit": 500,"deviceReadonly": false,"token": null,"timezone": null,"password":"'.$password.'"}';
        return self::curl('/api/users/','POST',$cookie ,$data,array(self::$json));
    }
	
    public static function updateUser($id,$name,$email,$password,$cookie) {
        $password=$password!='' ? $password:'';
        $data='{"id":'.$id.',"attributes":{},"name":"'.$name.'","email":"'.$email.'","readonly":false,"admin":false,"map":"","distanceUnit":"","speedUnit":"","latitude":0,"longitude":0,"zoom":0,"twelveHourFormat":false,"password":"'.$password.'"}';
        return self::curl('/api/users/'.$id,'PUT',$cookie ,$data,array(self::$json));
    }
    public static function deleteUser($id,$cookie) {
        $data='{"id":'.$id.'}';
        return self::curl('/api/users/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }
    
	
//Device Modifications	
	

	public static function devices($cookie) {
        //$data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/devices','GET',$cookie ,'',array());
    }
	
	public static function addDevice($name,$uniqueId,$groupId,$phone,$category,$contact,$model,$cookie) {
       $data='{"id":-1,"name":"'.$name.'","uniqueId":"'.$uniqueId.'","status":"","lastUpdate":null,"groupId":"'.$groupId.'","phone":"'.$phone.'","category":"'.$category.'","contact":"'.$contact.'","model":"'.$model.'"}';
        return self::curl('/api/devices','POST',$cookie ,$data,array(self::$json));
    }
    
	public static function editDevice($id,$name,$uniqueId,$groupId,$phone,$category,$contact,$model,$cookie) {
        $data='{"id":'.$id.',"name":"'.$name.'","uniqueId":"'.$uniqueId.'","status":"","lastUpdate":null,"groupId":"'.$groupId.'","phone":"'.$phone.'","category":"'.$category.'","contact":"'.$contact.'","model":"'.$model.'"}';
        return self::curl('/api/devices/'.$id,'PUT',$cookie ,$data,array(self::$json));
    }

    
	public static function deleteDevice($id,$name,$uniqueId,$cookie) {
        //$data='{"id":'.$id.',"name":"'.$name.'","uniqueId":"'.$uniqueId.'","status":"","lastUpdate":null,"positionId":0}';
		//$data='{"id":'.$id.',"attributes":{},"name":"'.$name.'","uniqueId":"'.$uniqueId.'","status":"","lastUpdate":null,"positionId":0,"groupId":0,"geofenceIds":[],"phone":null,"model":null,"contact":null,"category":null}';
		$data='{"id":'.$id.'}';
        return self::curl('/api/devices/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }
	
	 public static function deviceDistance($id,$totalDistance,$cookie) {
        $data='{"deviceId":'.$id.',"totalDistance":"'.$totalDistance.'"}';
        return self::curl('/api/devices/'.$id.'/distance','PUT',$cookie ,$data,array(self::$json));
    }
   
	public static function addDeviceGeofence($deviceId,$geofenceId,$cookie) {
        $data='{"deviceId":'.$deviceId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/devices/geofences','POST',$cookie ,$data,array(self::$json));
    }
    public static function deleteDeviceGeofence($deviceId,$geofenceId,$cookie) {
        $data='{"deviceId":'.$deviceId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/devices/geofences', 'DELETE',$cookie ,$data,array(self::$json));
    }

   public static function addDevicePermissions($userId,$deviceId,$cookie) {
        $data='{"userId":'.$userId.',"deviceId":'.$deviceId.'}';
        return self::curl('/api/permissions/','POST',$cookie ,$data,array(self::$json));
    }
    public static function deleteDevicePermissions($userId,$deviceId,$cookie) {
        $data='{"userId":'.$userId.',"deviceId":'.$deviceId.'}';
        return self::curl('/api/permissions/','DELETE',$cookie ,$data,array(self::$json));
    }
    public static function addCalendarPermissions($userId,$calendarId,$cookie) {
        $data='{"userId":'.$userId.',"calendarId":'.$calendarId.'}';
        return self::curl('/api/permissions/','POST',$cookie ,$data,array(self::$json));
    }
    public static function deleteCalendarPermissions($userId,$deviceId,$cookie) {
        $data='{"userId":'.$userId.',"deviceId":'.$deviceId.'}';
        return self::curl('/api/permissions/','DELETE',$cookie ,$data,array(self::$json));
    }
	public static function addDevicegeofencePermissions($deviceId,$geofenceId,$cookie) {
        $data='{"deviceId":'.$deviceId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/permissions/','POST',$cookie ,$data,array(self::$json));
    }
    public static function deleteDevicegeofencePermissions($deviceId,$geofenceId,$cookie) {
        $data='{"deviceId":'.$deviceId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/permissions/','DELETE',$cookie ,$data,array(self::$json));
    }
	
	
	//public static function logout($cookie) {
        
	//  return self::curl('/api/session','DELETE',$cookie ,'',array(self::$urlencoded));}
//Groups modifications

 public static function groups($cookie) {
        //$data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/groups','GET',$cookie ,'',array());
    } 
public static function addGroups($name,$cookie) {
        $data='{"name":"'.$name.'"}';
        return self::curl('/api/groups','POST',$cookie ,$data,array(self::$json));
    }	
public static function editGroups($id,$name,$cookie) {
        $data='{"id":'.$id.',"name":"'.$name.'"}';
        return self::curl('/api/groups/'.$id,'PUT',$cookie ,$data,array(self::$json));
    }
public static function deleteGroups($id,$cookie) {
        $data='{"id":'.$id.'}';
        return self::curl('/api/groups/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }
/*public static function addDriver($name,$uniqueId,$cookie) {
        $data='{"name":"'.$name.'","uniqueId":"'.$uniqueId.'"}';
        return self::curl('/api/drivers','POST',$cookie ,$data,array(self::$json));
    }	
	public static function getDriver($name,$cookie) {
        $data='name='.$name;
        return self::curl('/api/drivers','GET',$cookie ,'',array());
    } */
//events modifications	

	public static function events($groupId,$type,$from,$to,$cookie) {
		//$data = '{"_dc":"","groupId":1,"type":allEvents,"from":2017-07-06T12:21:56.000Z,"to":2017-07-08T12:51:56.000Z,"page":1,"start":0,"limit":25}';
		$data='{"groupId":"'.$groupId.'","type":"'.$type.'","from":"'.$from.'","to":"'.$to.'","page":1,"start":0,"limit":25}';
        //$data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/reports/events?groupId='.$groupId.'&type='.$type.'&from='.$from.'&to='.$to.'&page=1','GET',$cookie ,'',array(self::$acc));
    }
	
//Geofence Modifications	
	
	
	public static function geofences($cookie) {
        //$data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/geofences','GET',$cookie ,'',array());
    }
	
    public static function addGeofence($name,$description,$area,$calendarId,$cookie) {
        $data='{"id":-1,"name":"'.$name.'","description":"'.$description.'","area":"'.$area.'","calendarId":"'.$calendarId.'"}'; 
        return self::curl('/api/geofences','POST',$cookie ,$data,array(self::$json));
    }
	
    public static function editGeofence($id,$name,$description,$area,$calendarId,$cookie) {
        $data='{"id":'.$id.',"name":"'.$name.'","description":"'.$description.'","area":"'.$area.'","calendarId":"'.$calendarId.'"}';
        return self::curl('/api/geofences/'.$id,'PUT',$cookie,$data,array(self::$json));
    }
   
    /*public static function deleteGeofence($id,$name,$description,$area,$calendarId,$cookie) {
        $data='{"id":'.$id.',"name":"'.$name.'","description":"'.$description.'","area":"'.$area.'","calendarId":"'.$calendarId.'"}';
		
        return self::curl('/api/geofences/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }*/
	public static function deleteGeofence($id,$cookie) {
        $data='{"id":'.$id.'"}';
		
        return self::curl('/api/geofences/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }
    public static function addGeofancePermisions($userId,$geofenceId,$cookie) {
        $data='{"userId":'.$userId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/permissions/geofences','POST',$cookie ,$data,array(self::$json));
    }
   public static function deleteGeofancePermisions($userId,$geofenceId,$cookie) {
      $data='{"userId":'.$userId.',"geofenceId":'.$geofenceId.'}';
        return self::curl('/api/permissions/geofences','DELETE',$cookie ,$data,array(self::$json));
    }
   
   public static function notifications($userId,$cookie) {
        $data='userId='.$userId;
        return self::curl('/api/users/notifications?'.$data,'GET',$cookie ,'',array());
    }
   
   public static function addUsersNotifications($userId,$type,$attributes,$cookie) {
        $data='{"userId":'.$userId.',"type":"'.$type.'","attributes":'.$attributes.'}';
        return self::curl('/api/users/notifications','POST',$cookie ,$data,array(self::$json));
    }
    public static function positions($deviceId,$from,$to,$cookie) {
        $data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/positions?'.$data,'GET',$cookie ,'',array());
    }
	public static function reportsummary($deviceId,$from,$to,$cookie) {
        $data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/reports/summary?'.$data,'GET',$cookie ,'',array(self::$acc));
    }
	public static function reportstrip($deviceId,$from,$to,$cookie) {
        $data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/reports/trips?'.$data,'GET',$cookie ,'',array());
    }
	public static function reportstops($deviceId,$from,$to,$cookie) {
        $data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
        return self::curl('/api/reports/stops?'.$data,'GET',$cookie ,'',array());
    }
	public static function reportsroutes($_dc,$deviceId,$from,$to,$cookie) {
      
	   $data='$_dc='.$_dc.'&deviceId='.$deviceId.'&from='.$from.'&to='.$to;
	   return self::curl('/api/reports/route?'.$data,'GET',$cookie ,'',array(self::$acc));
		
    }
	public static function reportsevents($deviceId,$from,$to,$cookie) {
      
	   $data='deviceId='.$deviceId.'&from='.$from.'&to='.$to;
	   return self::curl('/api/reports/events?'.$data,'GET',$cookie ,'',array(self::$acc));
		
    }
	public static function getDriver($cookie) {
        //$data='id='.$id;
        return self::curl('/api/drivers','GET',$cookie ,'',array());
    }
	
	public static function addDriver($name,$uniqueId,$fathername,$address,$city,$state,$phoneno,$dob,$dateofjoining,$licenseno,$licensetype,$issuedate,$expirydate,$authority,$aadhaarno,$bloodgroup,$vehicleno,$salary,$cookie) {
       $data='{"id":-1,"name":"'.$name.'","uniqueId":"'.$uniqueId.'","attributes": {"fathername": "'.$fathername.'","address": "'.$address.'","city": "'.$city.'","state": "'.$state.'","phoneno": "'.$phoneno.'","dob": "'.$dob.'","dateofjoining": "'.$dateofjoining.'","licenseno": "'.$licenseno.'","licensetype": "'.$licensetype.'","issuedate": "'.$issuedate.'","expirydate": "'.$expirydate.'","authority": "'.$authority.'","aadhaarno": "'.$aadhaarno.'","bloodgroup": "'.$bloodgroup.'","vehicleno": "'.$vehicleno.'","salary": "'.$salary.'"}}';
        return self::curl('/api/drivers/','POST',$cookie ,$data,array(self::$json));
    }
	public static function editDriver($id,$name,$uniqueId,$fathername,$address,$city,$state,$phoneno,$dob,$dateofjoining,$licenseno,$licensetype,$issuedate,$expirydate,$authority,$aadhaarno,$bloodgroup,$vehicleno,$salary,$cookie) {
        $data='{"id":'.$id.',"name":"'.$name.'","uniqueId":"'.$uniqueId.'","attributes": {"fathername": "'.$fathername.'","address": "'.$address.'","city": "'.$city.'","state": "'.$state.'","phoneno": "'.$phoneno.'","dob": "'.$dob.'","dateofjoining": "'.$dateofjoining.'","licenseno": "'.$licenseno.'","licensetype": "'.$licensetype.'","issuedate": "'.$issuedate.'","expirydate": "'.$expirydate.'","authority": "'.$authority.'","aadhaarno": "'.$aadhaarno.'","bloodgroup": "'.$bloodgroup.'","vehicleno": "'.$vehicleno.'","salary": "'.$salary.'"}}';
        return self::curl('/api/drivers/'.$id,'PUT',$cookie ,$data,array(self::$json));
    }
	public static function deleteDriver($id,$cookie) {
        
		$data='{"id":'.$id.'}';
        return self::curl('/api/drivers/'.$id,'DELETE',$cookie ,$data,array(self::$json));
    }
	public static function getCalendar($userId,$cookie) {
        $data='userId='.$userId;
        return self::curl('/api/calendars?'.$data,'GET',$cookie ,'',array());
    }
    public static function commandtypes($deviceId,$cookie) {
        $data='deviceId='.$deviceId;
        return self::curl('/api/commandtypes?'.$data,'GET',$cookie ,'',array());
    }
    public static function sendCommand($deviceId,$type,$attributes,$cookie) {
        if($type=='custom') $attributes=',"attributes":{"data":"'.$attributes.'"}';
        else if($type=='positionPeriodic') $attributes=',"attributes":{"frequency":'.$attributes.'}';
        $data='{"deviceId":'.$deviceId.',"type":"'.$type.'","id":-1'.$attributes.'}';
        return self::curl('/api/commands','POST',$cookie ,$data,array(self::$json));
    }
    public static function curl($task,$method,$cookie,$data,$header) {
        $res=new stdClass();
        $res->responseCode='';
        $res->error='';
        $header[]="Cookie: ".$cookie;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$host.$task);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if($method=='POST' || $method=='PUT' || $method=='DELETE') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        $data=curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        if (preg_match('/^Set-Cookie:\s*([^;]*)/mi', substr($data, 0, $size), $c) == 1) self::$cookie = $c[1];
        $res->response = substr($data, $size);
        if(!curl_errno($ch)) {
            $res->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        }
        else {
            $res->responseCode=400;
            $res->error= curl_error($ch);
        }
        curl_close($ch);
        return $res;
    }
}

/*$t=Traccar::login('webrains@gmail.com','admin');
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
//device modifications
	$creategroup=Traccar::addGroups(NULL,"{}","Kalyani",NULL,$traccarCookie);
	//print_r($creategroup);
}
else echo 'Incorrect email address or password';*/
