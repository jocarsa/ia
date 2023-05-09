<?php
$myfile = fopen("referencia1.txt", "r");
// Output one line until end-of-file
$guarda = fopen("guarda3.txt", "a");
while(!feof($myfile)) {
    $partido = explode(" ",fgets($myfile));
    for($i = 0;$i<count($partido);$i++){
        if(
            array_key_exists($i-3, $partido) && 
            array_key_exists($i-2, $partido) && 
            array_key_exists($i-1, $partido) && 
            array_key_exists($i+1, $partido) && 
            array_key_exists($i+2, $partido) && 
            array_key_exists($i+3, $partido)
        ){
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
}
fclose($myfile);
fclose($guarda);
?>