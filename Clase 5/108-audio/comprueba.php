<?php
    error_reporting(E_ERROR | E_PARSE);
    echo "Soy PHP y te prometo que: \n";
    echo "Voy a recoger tus datos\n";
    echo "Y voy a procesarlos\n";
   
    $datosdepartida = $_POST['datos'];
    echo $datosdepartida;
    
    $entrenamiento = fopen("vocales.txt", "r");
    $mejorcandidato = 10000000;
    $candidatovocal = "";
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
        if($suma < $mejorcandidato){
            $mejorcandidato = $suma;
            $candidatovocal = $vocal;
            echo "De momento parece que el mejor candidato es la vocal: ".$vocal."\n";
        }
        
    }
    echo "Yo creo que la vocal es una :".$candidatovocal."\n";
    fclose($entrenamiento);
   

?>