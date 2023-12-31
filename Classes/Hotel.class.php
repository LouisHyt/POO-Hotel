<?php

class Hotel{

    private string $nom;
    private string $adresse;
    private int $codepostal;
    private string $ville;
    private int $notation;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom, string $adresse, int $codepostal, string $ville, int $notation){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
        $this->notation = $notation;
        $this->chambres = [];
        $this->reservations = [];
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

    public function getCodePostal():string {
        return $this->adresse;
    }   

    public function setCodePostal(string $adresse):void {
        $this->adresse = $adresse;
    }

    public function getVille():string {
        return $this->adresse;
    }   

    public function setVille(string $adresse):void {
        $this->adresse = $adresse;
    }

    public function setNotation(int $notation){
        $this->notation = $notation;
    }

    public function getNotation(): int{
        return $this->notation;
    }

    public function getChambres(): Chambre{
        return $this->chambres;
    }

    public function setChambres(Chambre $chambre){
        $this->chambres[] = $chambre;
    }

    public function getReservation(): Reservation{
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    public function displayInfo(): string{
        $nbChambres = count($this->chambres);
        $chambresReservees = count(array_filter($this->chambres, function($c){
            return $c->getDisponible() == false;
        }));
        $chambresDispo = $nbChambres - $chambresReservees;
        $result = $this->adresse." ".$this->codepostal." ".$this->ville. "<br />";
        $result .= "Nombre de chambres: $nbChambres <br />";
        $result .= "Nombre de chambres réservées: $chambresReservees <br />";
        $result .= "Nombre de chambres dispo: $chambresDispo <br /><br />";
        return $result;
    }

    public function displayReservations(): string {
        $result = "<p class='title'>Réservations de l'hôtel ". $this . "</p>";
        if(count($this->reservations) == 0){
            $result .= "<p class='primary_info'>Aucune réservation</p>";
        } else {
            $result .= "<p class='primary_info'>". count($this->reservations) ." RÉSERVATIONS</p>";
            foreach($this->reservations as $reservation){
                $result .= "<p>".$reservation->getClient()." - Chambre ". $reservation->getChambre()->getNumero()." - du ". $reservation->getDateArrivee()." au ".$reservation->getDateDepart()."</p>";
            }
        }
        return $result;
    }

    public function displayChambresStatus(){
        ?>
        <p>Status des chambres de <?= $this ?></p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Chambe</th>
                <th scope="col">Prix</th>
                <th scope="col">Wifi</th>
                <th scope="col">État</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($this->chambres as $chambre) {
                ?>
                    <tr>
                        <td scope="row"><?= "Chambre : ".$chambre->getNumero() ?></td>
                        <td><?= $chambre->getPrix()." €" ?></td>
                        <td><?= $chambre->getWifi() ?></td>
                        <td><?= $chambre->getDisponible() ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
    }

    public function __toString(){

        $notes = DisplayNote::getNote($this->notation);

        return "<span class='title'> $this->nom ($this->ville) - $notes </span> <br />";
    }

}

?>