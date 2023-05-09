<?php

$gd = imagecreatefromjpeg("prueba.jpg");


$tamano = getimagesize("prueba.jpg");
// Definir una serie de muestras
$muestras = [16,32,64,128,256,512,1024,2048];
// A continuación, creo carpetas vacías
foreach($muestras as $muestra){
    mkdir("entrenamiento/".$muestra);
}

$tx = $tamano[0];
$ty = $tamano[1];

// Para cada una de las muestras que he definido
foreach($muestras as $muestra){
    // Creo una imagen de esa resolución
    $rectangulo = imagecreatetruecolor($muestra, $muestra);
    // Arraso la imagen en X
    for($x = 0;$x<$tx;$x+=$muestra){
        // Arraso la imagen en Y
        for($y = 0;$y<$ty;$y+=$muestra){
            // Copio el cacho correspondiente de imagen
            imagecopy($rectangulo, $gd, 0, 0, $x, $y, $muestra,$muestra);
            // Me lo guardo en otra carpeta
            imagepng($rectangulo,"entrenamiento/".$muestra."/".microtime(true).".png");
        }
    }
}



//header('Content-Type: image/png');


?>