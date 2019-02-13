<?php 
// error_reporting(-1); 
error_reporting(99999);
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'ktcerp');
define('DB_USER', 'root');
define('DB_PASS', '');
define('TRACCAR_HOST', 'http://52.89.59.253:8082');
define('TRACCAR_ADMIN_USER', 'webrains@gmail.com');
define('TRACCAR_ADMIN_PASS', 'sumeet@traccar123');

$whitelist = array(
    '127.0.0.1',
    '::1'
);
define('LIBS', 'libs/');

define('URL', 'http://localhost/ktcodisha/');
 
function distance($lat1, $lon1, $lat2, $lon2, $unit) 
        {
           if($lon1!=$lon2){
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
              return ($miles * 1.60934);
            } else if ($unit == "N") {
              return ($miles * 0.8684);
            } else {
              return $miles;
			}
			}else {
			 return 0;
			}
		}
function getDistance($a, $b)
{
	//print_r($a);
	//print_r($b);
    list($lat1, $lon1) = $a;
    list($lat2, $lon2) = $b;
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515 * 1.60934;
    return $miles;
}		

function CovertDate($date){
if ($date!="0000-00-00"){
return date("m/d/Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
} else {
return "-";
}
}
function CovertTime($date){
$today= date("d/m/Y");
$now= date("d/m/Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
if ($now!=$today){
return date("d M Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
} else {
return substr($date,11,5);
}
}

function checkExpiry($val){
if($val!='' AND $val!='0000-00-00' ){
$date0=date("Y-m-d");
//$date1=date_create("2013-03-15");
//$date2=date_create($val);
$date1=date_create($date0);
$date2=date_create($val);
$diff=date_diff($date1,$date2);
if($diff->format("%R%a")<=2){
$fontColor="black";
}elseif($diff->format("%R%a")<=7){
$fontColor="black";
}else{
	$fontColor="black";
}

echo "<span style='color:$fontColor'>".$diff->format("%R%a d")."</span>";}else {
echo "N.A.";
}
}

function ConvertValDate($val){
//$temp = split('T',$val);
$date = substr($val,0,10);
$time= substr($val,11,8);
return $date." ".$time;
}

function ChallanTimeDiff($val1,$val2){

	$start_date = new DateTime($val1);
	$since_start = $start_date->diff(new DateTime($val2));
	// echo $since_start->days.' days total<br>';
	// echo $since_start->y.' years<br>';
	// echo $since_start->m.' months<br>';
	// echo $since_start->d.' days<br>';
	// echo $since_start->h.' hours<br>';
	// echo $since_start->i.' minutes<br>';
	// echo $since_start->s.' seconds<br>';
	return $since_start->h.":".$since_start->i.":".$since_start->s;
}

function checkExpiryRow($val){
if($val!=''){
$date0=date("Y-m-d");
//$date1=date_create("2013-03-15");
//$date2=date_create($val);
$date1=date_create($date0);
$date2=date_create($val);
$diff=date_diff($date1,$date2);


return $diff->format("%R%a");
}else {
return 8;
}
}

function checkSign($val){
	if($val==0){
		return "--";
		}
	if ($val>0){
		$val= "+".$val;
		}
		$val = substr($val,0,1)."$".substr($val,1).".00";
	return $val;
	}
function checkSignPick($val){

	if ($val>0){
		$val= "+".$val;
		}
	return $val;
	}
function checkProfit($val){
	if($val<0){
		$result= "($".$val*(-1).".00)";
		} else {
			$result= "$".$val.".00";
		}
		return $result;
	}

	function imagettftext_cr(&$im, $size, $angle, $x, $y, $color, $fontfile, $text)
        {
            // retrieve boundingbox
            $bbox = imagettfbbox($size, $angle, $fontfile, $text);
            // calculate deviation
            $dx = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
            $dy = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
            // new pivotpoint
            $px = $x-$dx;
            $py = $y-$dy;
            return imagettftext($im, $size, $angle, $x, $y, $color, $fontfile, $text);
        }
