<?php

$gd = imagecreatefromjpeg("prueba.jpg");
$rectangulo = imagecreatetruecolor(32, 32);

$tamano = getimagesize("prueba.jpg");

$tx = $tamano[0];
$ty = $tamano[1];

for($x = 0;$x<$tx;$x+=32){
    for($y = 0;$y<$ty;$y+=32){
        imagecopy($rectangulo, $gd, 0, 0, $x, $y, 32,32);
        imagepng($rectangulo,"entrenamiento/".microtime(true).".png");
    }
}



//header('Content-Type: image/png');


?>