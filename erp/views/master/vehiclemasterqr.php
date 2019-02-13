<?php foreach($this->allVehicles AS $key=>$value){

if($value['SensorSerial']!=null){
						?>
<div style="align: center; width:600px; float:left;">
    <img src="<?php 
   $url =  "https://chart.googleapis.com/chart?chs=530x530&cht=qr&chl=VH:".$value['VehicleNo'].":".$value['SensorSerial']."&choe=UTF-8";
    
    echo $url; ?> align ='center'" />
    <div align="center"><H1><?php echo $value['VehicleNo']; ?></H1></div>
</div>
											
					<?php 
}
				} ?>
