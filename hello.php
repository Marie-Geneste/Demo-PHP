<?php
    //echo "Hello";
    
    // variable
    $toto = "toto";
    $hello = "hello";
    //echo $toto;

    $nb = 12;
    $bool = false;

    //un booléen à true affiche 1 et à false affiche... Rien du tout donc pour débugger on va préférer ne pas utiliser echo !
    //echo $bool;

    //var_dump($bool);

    //arrête le script, on ne voit pas la string suivante, ni plus rien de ce qu'il y a après...
    //die("je suis mort");

    //echo "non acccessible";


    //CONCATENATION
    echo $hello . " " . $toto;

    echo "<br>";

    echo "<p>Hello $toto, ça va ?</p>";

    //echo "<script>alert('ha ha you\'ve been hacked !');</script>";


    //TABLEAU
    $myArr = [];
    $myArr = ["un", "deux", "trois"];
    $myArr2 = ["cinq"];
    //ajouter un élément
    $myArr[] = "quatre";

    $myArrMerged = array_merge($myArr, $myArr2);

    // var_dump($myArr);
    // var_dump($myArrMerged);

    // for($i = 0; $i < count($myArrMerged); $i++) {
    //     var_dump($myArrMerged[$i]);
    // }

    // foreach ($myArr as  $element) {
    //     var_dump($element);
    // }

    // $monArrAssoc = [
    //     "prenom" => "Toto",
    //     "nom" => "TOTO",
    //     "age" => 12
    // ];


    // var_dump($monArrAssoc);

    // foreach($monArrAssoc as $key => $value) {
    //     echo $key . "====>" . $value;
    //     echo "<br>";
    // }

    // echo $monArrAssoc["nom"];

    // $toto = [
    //     "prenom" => "Toto",
    //     "nom" => "TOTO",
    //     "age" => 12
    // ];
    
    // $tata = [
    //     "prenom" => "Tata",
    //     "nom" => "TATA",
    //     "age" => 10
    // ];

    // $monArrAssocTT[] = $toto;
    // $monArrAssocTT[] = $tata;

    // var_dump($monArrAssocTT);

    // foreach ($monArrAssocTT as $personne) {
    //     echo $personne['nom']. " " . $personne['prenom'];
    // }

    // if(){

    // } elseif {

    // } else {

    // };

    // $a = 1;
    // switch($a) {
    //     case 1:
    //         echo "ok";
    //         break;
    //     case 2:
    //         break;
    //     default:
    //     echo 'default';
    // }

    $cpt = 0;
    while ($cpt < 10) {
        $cpt++;
        //pour sauter le 5
        if($cpt === 5){
            continue;
        }
        echo $cpt;
    };