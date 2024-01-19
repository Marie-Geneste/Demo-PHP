<?php
require_once './classes/Eleve.php';

class Terminale extends Eleve {
    private string $option;

    public function _construct(string $prenom, string $nom, int $age, string $option) {
        parent::__construct($prenom, $nom, $age);
        $this->option = $option;
    }

}