<?php


class Client {

    private string $nom;
    private string $prenom;
    private array $reservations;

    public function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->reservations = [];
    }

    public function getNom():string{
        return $this->nom;
    }

    public function setNom(string $nom):void{
        $this->nom = $nom;
    }

    public function getPrenom():string{
        return $this->prenom;
    }

    public function setPrenom(string $prenom):void{
        $this->prenom = $prenom;
    }

    public function addReservation(Reservation $reservation):void{
        $this->reservations[] = $reservation;
    }

    public function __toString(): string{
        return $this->prenom. " ". $this->nom;
    }

}


?>