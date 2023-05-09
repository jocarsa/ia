<?php
$myfile = fopen("referencia1.txt", "r");
// Output one line until end-of-file
$guarda = fopen("guarda.txt", "a");
while(!feof($myfile)) {
    $partido = explode(" ",fgets($myfile));
    for($i = 0;$i<count($partido);$i++){
        fwrite($guarda, $partido[$i]."\n");
    }
}
fclose($myfile);
fclose($guarda);
?>