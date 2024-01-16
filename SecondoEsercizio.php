<?php
//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

//Hint: per verificare se un numero è pari utilizzare l’operatore modulo % 

$Array=[1,2,3,4,5,6,7,8,9,10];

for($i=0;$i<count($Array);$i++){
    if($Array[$i]%2==0){
        echo $Array[$i];
    }
}



?>