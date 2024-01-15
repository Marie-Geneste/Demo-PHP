<?php
        // $toto = [
        //         "prenom" => "Toto",
        //         "nom" => "TOTO",
        //         "age" => 12
        //     ];
            
        //     $tata = [
        //         "prenom" => "Tata",
        //         "nom" => "TATA",
        //         "age" => 10
        //     ];
        
        //     $monArrAssocTT[] = $toto;
        //     $monArrAssocTT[] = $tata;
        
            //var_dump($monArrAssocTT);

            //include ('./getDatas.php');
        
            foreach ($datas as $personne) { ?>
                <div>
                    <?= $personne->getPrenom(). " " . $personne->getNom(); ?>
                </div>
                <div>
                    <?= $personne->getAdresse(); ?>
                </div>
                  
<?php } ?>