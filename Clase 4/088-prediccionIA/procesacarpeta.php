<?php
$dir    = 'libros';
$archivos = scandir($dir);


foreach($archivos as $archivo){
    if($archivo != "." &&  $archivo != ".." )
    echo $archivo."<br>";
}
?>