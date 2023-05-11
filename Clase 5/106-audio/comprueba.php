<?php

    echo "Soy PHP y te prometo que: \n";
    echo "Voy a recoger tus datos\n";
    echo "Y voy a procesarlos\n";
   
    $datosdepartida = $_POST['datos'];
    echo $datosdepartida;
    
    $entrenamiento = fopen("vocales.txt", "r");
    
    while(!feof($entrenamiento)) {
        $linea = fgets($entrenamiento);
        $partido = explode(";",$linea);
        $vocal = $partido[0];
        $datos = $partido[1];
        $datospartidos = explode(",",$datos);
        $datosdepartidapartidos = explode(",",$datosdepartida);
        $suma = 0;
        for($i = 0;$i<count($datospartidos);$i++){
            $suma += floatval($datospartidos[$i]) - floatval($datosdepartidapartidos[$i]);
        }
        echo $suma;
    }
    fclose($entrenamiento);
   

?>