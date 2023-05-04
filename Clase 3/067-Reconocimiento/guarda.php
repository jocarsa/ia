<?php
$myfile = fopen("datos.txt", "a") or die("Unable to open file!");
fwrite($myfile, $_POST['tipo'].",".$_POST['h'].",".$_POST['v']."\n");
fclose($myfile);
?>