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

    public function displayInformations() {
        $result = "<p class='title'>Réservations de ". $this->prenom." ".$this->nom."</p>";
        $result .= "<p class='primary_info'>". count($this->reservations) ." RÉSERVATIONS</p>";
        $totalPrice = 0;
        foreach($this->reservations as $reservation){
            $chambreInfo = $reservation->getChambre();
            $result .= "<p class='bold line'>Hotel : ".$reservation->getHotel()."</p>";
            $result .= "<span>&nbsp;• Chambre: ". $chambreInfo->getNumero()." (".$chambreInfo->getLits()." lits - ".$chambreInfo->getPrix()." - Wifi : ".$chambreInfo->getWifi().") ";
            $result .= "du ". $reservation->getDateArrivee()." au ".$reservation->getDateDepart()."</span>";
            $totalPrice += $chambreInfo->getPrix(); 
        }
        $result .= "<br />Total: $totalPrice €";

        return $result;
    }

    public function __toString(): string{
        return $this->prenom. " ". $this->nom;
    }

}


?>