<?php

$gd = imagecreatefromjpeg("prueba.jpg");

$tamano = getimagesize("prueba.jpg");

$tx = $tamano[0];
$ty = $tamano[1];

for($x = 0;$x<$tx;$x++){
    for($y = 0;$y<$ty;$y++){
        $color = imagecolorallocate($gd, rand(0,255), rand(0,255), rand(0,255)); 
        imagesetpixel($gd, $x, $y, $color);
    }
}

  
header('Content-Type: image/png');
imagepng($gd);

?>