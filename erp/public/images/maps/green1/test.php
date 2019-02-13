<?php
error_reporting(99999);
$rotateFilename="Truck.png";
//$rotateFilename = '/var/www/your_image.image_type'; // PATH
//$degrees = 90;
for($i=0;$i<16;$i++){
	$degrees =$i *22.5;
   //header('Content-type: image/png');
   $source = imagecreatefrompng($rotateFilename);
   $bgColor = imagecolorallocatealpha($source, 255, 255, 255, 127);
   // Rotate
   $rotate = imagerotate($source, $degrees, $bgColor);
   imagesavealpha($rotate, true);
   imagepng($rotate,(16-$i).".png");
}

?>