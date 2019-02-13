<?php
				$sn=0;
				$Cdistance=0;
				$maxF=0;
				$minF=1000;
				 foreach($this->content AS $key=>$value){
				$obj = json_decode($value['attributes']); 
				$ignition=$obj->{'ignition'}; 	
				$distance = $obj->{'distance'}; 
				$tdistance = $obj->{'totalDistance'};	
				if($ignition==1){
					$bgcolor = "palegreen";
					}else {
						$bgcolor = "white";
						}
				if($distance>0 or $ignition==1 or  $value['speed']>0){	
				$Cdistance+=$distance;
				$sn++;	
				$obj = json_decode($value['attributes']); $temp= $obj->{'command'}; 
						$res = split("=",$temp);
						$diffF=0;
						$curF= trim($res[1],' T')/10;
						//echo $curF;
						
						
						$dates = explode(' ', $value['servertime']);
						$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $dates[1]);

sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

$time_seconds = $hours * 3600 + $minutes * 60 + $seconds; 
						if($prev!=0 and $curF!=0){
						$diffF = round(($prev-$curF),1);
						

						//$graphdata[]=array($time_seconds*1000,$curF);
						//$graphdistance[]=array($time_seconds*1000,round($tdistance/1000,1));
						}
						if($curF>0){
						if($curF>$maxF) $maxF= $curF;
						if($minF>$curF) $minF= $curF;	
						$prev= $curF;	
						}
						if($diffF>6.5){
					$bgcolorF = "red";
					$bigRise += ($diffF);
					$graphFuel[]=array("Stolen",$value['servertime'],$diffF);
					} else {
						$bgcolorF = "white";
						}
						if($diffF<-6.5){
							$graphFuel[]=array("Fill",$value['servertime'],(-1*$diffF));
							$bigDrop += (-1*$diffF);
							$bgcolorF = "palegreen";
							}
						
					
				}
					 } 
					
											   echo json_encode($graphFuel);
											  
											   ?>