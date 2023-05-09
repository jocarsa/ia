<?php

$gd = imagecreatefromjpeg("prueba.jpg");

$tamano = getimagesize("prueba.jpg");

$tx = $tamano[0];
$ty = $tamano[1];

for($x = 0;$x<$tx;$x++){
    for($y = 0;$y<$ty;$y++){
        $rgb = imagecolorat($gd, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $color = imagecolorallocate($gd, 255-$r, 255-$g, 255-$b); 
        imagesetpixel($gd, $x, $y, $color);
    }
}

  
header('Content-Type: image/png');
imagepng($gd);

?>