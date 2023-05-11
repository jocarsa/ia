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

    $sumaa = 0;
    $sumae = 0;
    $sumai = 0;
    $sumao = 0;
    $sumau = 0;

    while(!feof($entrenamiento)) {
        $linea = fgets($entrenamiento);
        $partido = explode(";",$linea);
        $vocal = $partido[0];
        $datos = $partido[1];
        $datospartidos = explode(",",$datos);
        $datosdepartidapartidos = explode(",",$datosdepartida);
        $suma = 0;
        for($i = 0;$i<count($datospartidos);$i++){
            $suma += abs(floatval($datospartidos[$i]) - floatval($datosdepartidapartidos[$i]));
        }
        if($suma < $mejorcandidato){
            $mejorcandidato = $suma;
            $candidatovocal = $vocal;
            //echo "De momento parece que el mejor candidato es la vocal: ".$vocal."\n";
        }
        switch($vocal){
            case "a":
                $sumaa += abs($suma);
                break;
            case "e":
                $sumae += abs($suma);
                break;
            case "i":
                $sumai += abs($suma);
                break;
            case "o":
                $sumao += abs($suma);
                break;
            case "u":
                $sumau += abs($suma);
                break;
        }
        
    }
    echo "Algoritmo 1: \n";
    echo "Yo creo que la vocal es una :".$candidatovocal."\n";
    echo "Algoritmo 2: \n";
    echo "Suma A :".$sumaa."\n";
    echo "Suma E :".$sumae."\n";
    echo "Suma I :".$sumai."\n";
    echo "Suma O :".$sumao."\n";
    echo "Suma U :".$sumau."\n";
    fclose($entrenamiento);
   

?>