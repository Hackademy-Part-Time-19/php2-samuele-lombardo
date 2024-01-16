<?php
    // Genera in una variabile un array di lunghezza 4 con al suo interno array da 5 valori interi randomici compresi tra 1 e 100
    $min = 1;
    $max = 100;
    $tombola = [ 
    [3,5,5,4], [3,4,4,3] , [3,52,234,3], [43,43,3,3]
    ];


for ($i=0; $i<count($tombola); $i++){
    for ($j=0; $j<count($tombola[$i]); $j++){
        $NewIndice=rand($min,$max);
        $tombola[$i][$j]=$NewIndice;
    }
}
  var_dump($tombola)

?>