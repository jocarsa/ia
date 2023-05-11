<?php
$myfile = fopen("vocales.txt", "a") or die("Unable to open file!");
fwrite($myfile, $_POST['vocal'].";".$_POST['datos']."\n");
fclose($myfile);
?>