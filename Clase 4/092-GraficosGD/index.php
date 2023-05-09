<?php

$gd = imagecreatefromjpeg("prueba.jpg");
$red = imagecolorallocate($gd, 255, 0, 0); 
imagesetpixel($gd, 5, 5, $red);
  
header('Content-Type: image/png');
imagepng($gd);

?>