<?php
$myfile = fopen("datos.txt", "a") or die("Unable to open file!");
fwrite($myfile, $_POST['epoch'].";".$_POST['datos']."\n");
fclose($myfile);
?>