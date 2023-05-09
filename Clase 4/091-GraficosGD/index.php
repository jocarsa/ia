<?php
    $im = imagecreatefromjpeg("prueba.jpg");
    $rgb = imagecolorat($im, 5, 5);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;

    var_dump($r, $g, $b);
?>