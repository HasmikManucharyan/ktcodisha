<?php
error_reporting(99999);

//$rotateFilename = '/var/www/your_image.image_type'; // PATH
$dir    = './';
$files1 = scandir($dir);

print_r($files1);
for($j=0;$j<count($files1);$j++){
//for($j=0;$j<5;$j++){
$rotateFilename=$files1[$j];
$ext = pathinfo($rotateFilename, PATHINFO_EXTENSION);
$basename = pathinfo($rotateFilename, PATHINFO_FILENAME);
//$degrees = 90;
if($ext=="png"){
for($i=0;$i<16;$i++){
	$degrees =$i *22.5;
   //header('Content-type: image/png');
   $source = imagecreatefrompng($rotateFilename);
   $bgColor = imagecolorallocatealpha($source, 255, 255, 255, 127);
   // Rotate
   $rotate = imagerotate($source, $degrees, $bgColor);
   imagesavealpha($rotate, true);
   imagepng($rotate,$basename."-".(16-$i).".png");
}
}
}

?>