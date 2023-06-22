<?php

class Hotel{

    private string $nom;
    private string $adresse;

    public function __construct($nom, $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    public function getNom():string{
        return $this->nom;
    }

    public function setNom(string $nom):void{
        $this->nom = $nom;
    } 

    public function getAdresse():string {
        return $this->adresse;
    }   

    public function setAdresse(string $adresse):void {
        $this->adresse = $adresse;
    }

}

?>