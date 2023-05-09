<?php

    //echo "La palabra es :".$_POST['actual']."\n";
    //echo "La anterior es :".$_POST['ultima']."\n";
    //echo "La anterior es :".$_POST['penultima']."\n";
    //echo "La anterior es :".$_POST['antepenultima']."\n";
    // Lee el archivo
    $archivo = fopen("guarda3.txt", "r");
    while(!feof($archivo)) {
        $partido = explode("|",fgets($archivo));
        if(
            array_key_exists(0, $partido) &&
            array_key_exists(1, $partido) &&
            array_key_exists(2, $partido) &&
            array_key_exists(3, $partido)
        ){
            if(
                $partido[0] == $_POST['antepenultima'] && 
                $partido[1] == $_POST['penultima'] && 
                $partido[2] == $_POST['ultima'] && 
                $partido[3] == $_POST['actual']
            ){
                echo $partido[4]." ".$partido[5]." ".$partido[6];
            }
        }
    }

?>