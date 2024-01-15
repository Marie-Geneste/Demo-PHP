<?php

    class Personne {
        private $prenom;
        private $nom;
        private $age;
        private $adresse;
        public function __construct($prenom, $nom, $age)
        {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
        }

        //getter = accesseur
        public function getPrenom(){
            return $this->prenom;
        }

        public function getNom(){
            return $this->nom;
        }

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