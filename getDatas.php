<?php
require './Personne.php';

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
        
$toto = new Personne('Toto', 'TOTO', 12);
$toto -> setAdresse("12 rue de la plage");
$tata = new Personne('Tata', 'TATA', 10);

$monArrAssocTT[] = $toto;
$monArrAssocTT[] = $tata;

return $monArrAssocTT;