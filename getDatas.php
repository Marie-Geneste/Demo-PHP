<?php
require './classes/Eleve.php';
require './classes/Terminale.php';


// $toto = [
//                 "prenom" => "Toto",
//                 "nom" => "TOTO",
//                 "age" => 12
//             ];
            
//             $tata = [
//                 "prenom" => "Tata",
//                 "nom" => "TATA",
//                 "age" => 10
//             ];
        
$toto = new Eleve('Toto', 'TOTO', 12);
$toto -> setAdresse("12 rue de la plage");
$tata = new Eleve('Tata', 'TATA', 10);

$term = new Terminale('Titi', 'TITI', 17);

$monArrAssocTT[] = $toto;
$monArrAssocTT[] = $tata;
$monArrAssocTT[] = $term;

return $monArrAssocTT;
