<?php
$myfile = fopen("referencia1.txt", "r");
// Output one line until end-of-file
$guarda = fopen("guarda2.txt", "a");
while(!feof($myfile)) {
    $partido = explode(" ",fgets($myfile));
    for($i = 0;$i<count($partido);$i++){
        fwrite($guarda, 
            $partido[$i-3]."|".
            $partido[$i-2]."|".
            $partido[$i-1]."|".
            $partido[$i]."|".
            $partido[$i+1]."|".
            $partido[$i+2]."|".
            $partido[$i+3]."\n");  
    }
}
fclose($myfile);
fclose($guarda);
?>