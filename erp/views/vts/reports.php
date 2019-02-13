<?php
//print_r($this->Allgeofences);
$latlng = array();
foreach($this->Allgeofences AS $key=>$value){
	$id = $value['id'];
    $name = $value['name'];
	$desc = $value['description'];
	$resulot=$value['area'];
	$resulot=substr($resulot,9);
	$resulot=substr($resulot,0,-2);
	$TempRes=split(',',$resulot);
	$num=count($TempRes);

for ($i=0; $i < $num; $i++) {
$finalRes=split(' ',$TempRes[$i]);
//echo "<pre>";
//print_r($finalRes);	
if(count($finalRes)==2){
	  $y = floatval($finalRes[0]);
    $x = floatval($finalRes[1]);
	}else {
		$y = floatval($finalRes[1]);
    $x = floatval($finalRes[2]);
		}
  
    array_push($latlng, array($name,$desc,$y,$x));
}

}
echo "<pre>";
//print_r($latlng);
//echo "</pre>";
		
function GetNearestSite($lat,$long,$latlng){
	$ref = array($lat, $long);
  //  print_r($ref);
$distances = array_map(function($item) use($ref) {
    $a = array_slice($item, -2);
	
    return getDistance($a, $ref);
}, $latlng);

	
asort($distances);

echo 'Closest item is: '. $latlng[key($distances)][1] .' '.round($distances[key($distances)],1).' km' ;

	}
	
$lat=$_REQUEST['lat'];
$long=$_REQUEST['long'];
if($lat !=""){
	GetNearestSite($lat,$long,$latlng);
	}	
	
?>
