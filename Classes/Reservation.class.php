<?php

class Reservation{

    private DateTime $date_arrivee;
    private DateTime $date_depart;
    private Chambre $chambre;
    private Client $client;

    public function __construct(string $date_arrivee, string $date_depart, Chambre $chambre, Client $client){
        $this->date_arrivee = new DateTime($date_arrivee);
        $this->date_depart = new DateTime($date_depart);
        $this->chambre = $chambre;
        $this->client = $client;
    }


    public function getDateArrivee(): string{
        return $this->date_arrivee->format("d m Y");
    }

    public function setDateArrivee(string $date_arrivee){
        $this->date_arrivee = new DateTime($date_arrivee);
    }

    
    public function getDateDepart(): string{
        return $this->date_arrivee->format("d m Y");
    }

    public function setDateDepart(string $date_depart){
        $this->date_depart = new DateTime($date_depart);
    }

    public function getChambre(): Chambre{
        return $this->chambre;
    }

    public function setChambre(Chambre $chambre){
        $this->chambre = $chambre;
    }

    public function getClient(): Client{
        return $this->client;
    }

    public function setClient(Client $client){
        $this->client = $client;
    }


}

?>