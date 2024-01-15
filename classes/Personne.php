<?php

    abstract class Personne 
    {
       protected string $prenom;
       protected string $nom;

       public function getPrenom(): string
       {
        return $this->prenom;
       }

       public function getNom()
       {
        return $this->nom;
       }
    }