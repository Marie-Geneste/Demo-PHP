<?php
require_once './classes/Personne.php';

    class Eleve extends Personne {
        private $age;
        private $adresse;
        public function __construct(string $prenom, string $nom, int $age)
        {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
        }

        //getter = accesseur
        public function getAge(){
            return $this->age;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        //setter = mutateur
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }
    }