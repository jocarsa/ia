<?php
$myfile = fopen("datospequenos.txt", "a") or die("Unable to open file!");
fwrite($myfile, $_POST['epoch'].";".gzcompress(str_replace(",","",$_POST['datos']), 9)."\n");
//fwrite($myfile, $_POST['epoch'].";".gzcompress($_POST['datos'])."\n");
fclose($myfile);
?>