<?php
$myfile = fopen("referencia1.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    $partido = explode(" ",fgets($myfile));
    var_dump($partido);
}
fclose($myfile);
?>