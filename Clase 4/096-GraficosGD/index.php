<?php

$gd = imagecreatefromjpeg("prueba.jpg");
$rectangulo = imagecreatetruecolor(32, 32);
imagecopy($rectangulo, $gd, 0, 0, 10, 10, 32,32);

//header('Content-Type: image/png');
imagepng($rectangulo,"resultado.png");

?>