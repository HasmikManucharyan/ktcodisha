 

 <?php
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

		
function GetNearestSite($lat,$long,$latlng){
	$ref = array($lat, $long);
  //  print_r($ref);
$distances = array_map(function($item) use($ref) {
    $a = array_slice($item, -2);
	
    return getDistance($a, $ref);
}, $latlng);

	
asort($distances);

echo  $latlng[key($distances)][0] .' '.round($distances[key($distances)],1).' km' ;

	}
 ?>
 
 
       
<?php

  function check_direction($course,$angle){
	$minAngle = $angle-90;
	if($minAngle<0){$minAngle=$minAngle+360;}
	$maxAngle = $angle+90;
	if($maxAngle>360){$maxAngle=$maxAngle-360;}

	//if($course >=140 and $course <=300){
if($course >=$minAngle and $course <=$maxAngle){
	return "New Trip";
}else{
	return "Trip In Transit";
	
}

  }
  //echo "<pre>";
 // print_r($this->alldeviceTrips);
  //echo "</pre>";
?>
		
			
				<?php 
				$showResult=true;
				$prevResult="1";
				$currentVehicle=0;
				$tripCounterIn = 0;
				$tripCounterOut = 0;
				$deviceCounter = 0;
				$resultTable="<table class='cell-border tdesign' id='example'>";
				$resultTable.="<thead><tr><th>Vehicle</th><th>ENTRY</th><th>IN TRIP</th><th>EXIT</th><th>OUT TRIP</th><th>LOADING TIME</th></tr></thead>";
				
				foreach($this->alldeviceTrips AS $key=>$value){ 
             ?>

			 <?php
			 if($currentVehicle != $value['vehicle'] and $currentVehicle>0) {
				$deviceCounter++;
				if($prevTime!=0){
					$resultTable.="<tr><td>".$currentVehicle."</td><td>".$prevTime."</td><td>[".$tripCounterIn."]</td><td></td><td></td><td></td></tr>";
				}else{
					
				}
				?>
	
				<?php
				$prevTime=0;
			} // vehicle if
				?>
											 <?php  
												$result = check_direction($value['course'],$this->direction);
												/*
												if($currentVehicle == $value['vehicle'] and $prevResult==$result ){
													$showResult=false;
													$prevResult="";
												 }

												 */
												 if($currentVehicle != $value['vehicle']) {
													$prevResult="";
												 }
												if($value['type']=="geofenceExit" and ($value['geofenceid']==$this->route)){
													//or $value['geofenceid']==278
													$result = check_direction($value['course'],$this->direction);

													$Time = $value['servertime'];
													if($result=="New Trip"){
														$timeVar = "IN";
														$prevTime = $Time;
														//$tripIN[$value['vehicle']]=
													//	$tripCounterIn+=1;
													} else {
														$timeVar = "OUT"; 
													//	$tripCounterOut+=1;
													}
													//and $currentVehicle<> $value['vehicle']  and $prevGooFence!="283"
													if($prevResult!=$result){
														if($result=="New Trip"){
															$Intrips[$deviceCounter]['deviceID']=$value['deviceid'];
															$Intrips[$deviceCounter]['IN']+=1;
															$tripCounterIn+=1;
														} else {
															if($prevTime!=0){
															$tripCounterOut+=1;
															$Intrips[$deviceCounter]['deviceID']=$value['deviceid'];
															$Intrips[$deviceCounter]['OUT']+=1;
															} else {
																//$tripCounterYesOut+=1;
															}
														}

														
														//echo $result."<br/>".$timeVar.":".date("H:i:s",strtotime($Time));

														if($prevTime!=0){
															//echo "<td>".$value['vehicle']."</td>"."<td>";
														}else{
															$resultTable.="<tr><td>".$value['vehicle']."</td><td></td><td></td><td>".$Time."</td><td></td><td></td></tr>";
														}
														
														if($timeVar=="OUT" and $prevTime!=0){
															//($time2 - $time1) / 3600
															$loadingTime  = date("H:i:s",strtotime("1980-01-01 00:00:00") +(strtotime($Time)-strtotime($prevTime)));
															$Intrips[$deviceCounter]['LoadingTime']=$loadingTime;
														//	echo "<br/>".$loadingTime;
															
														//	echo "<br/>Trip No :".$tripCounterIn;
															
															$resultTable.="<tr><td>".$value['vehicle']."</td><td>".$prevTime."</td><td>[".$tripCounterIn."]</td><td>".$Time."</td><td>[".$tripCounterOut."]</td><td>".$loadingTime."</td></tr>";
															$prevTime=0;
														}

														$prevResult= $result;
														
													}
														
												}
												/*
												if($value['type']=="geofenceExit"  and  $value['geofenceid']==283  ){
													echo $result;
												 } 
												 */
												 //and $currentVehicle== $value['vehicle'] and $prevGooFence=="278"
												 // echo "<br/>".$prevResult." ".$currentVehicle." ".$result;
												 //if($result=)
												 $prevGooFence = $value['geofenceid'];
												// if($prevResult!="")
												 
												 
												$currentVehicle = $value['vehicle'];
												
												
												
												?>


					<?php
			 		
				} //main for
				
				
				?>
                    
					 <?php $resultTable.="</table>";
					// echo $resultTable; 
					 
					// echo "<pre>";
					//print_r($Intrips);
					header('Content-type: application/json');
					$out = array_values($Intrips);
					echo json_encode($out);
					//print_r($Outtrips);
					 ?>