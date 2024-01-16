
<?php

//Integra il seguente array con la traccia precedente, stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”


$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach($temperature as $chiave => $valore){
    
    if($valore<15){
        echo  " A ".$chiave ." fa freddo";
    
    }
    else if($valore>=15 && $valore <25){
        echo  " A ".$chiave ." fa caldo";
    }
    else if($valore>=25){
        echo  " A " .$chiave ." fa molto caldo";
    
    }
}
?>