<?php
/*Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere, utilizzando if…elseif…else
Implementa nuovamente l’esercizio utilizzando uno switch\
*/

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach($users as $ArrayUtenti){

    
    if($ArrayUtenti["gender"] == "M"){
        echo "Buongiorno Sig. " . $ArrayUtenti["name"] . " " . $ArrayUtenti["surname"] . " " ;
    }
    else if($ArrayUtenti["gender"] == "F"){
        echo "Buongiorno Sig.ra " . $ArrayUtenti["name"] . " " . $ArrayUtenti["surname"] . " ";
    }
    else{
        echo "Buongiorno " . $ArrayUtenti["name"] . " " . $ArrayUtenti["surname"] . " ";

    }
       
    
}

?>