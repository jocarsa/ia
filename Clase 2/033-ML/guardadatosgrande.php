<?php
$myfile = fopen("datosgrandes.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST['datos']);
fclose($myfile);
?>