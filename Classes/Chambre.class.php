<?php

class Chambre{

    private int $numero;
    private int $lits;
    private float $prix;
    private bool $wifi;
    private bool $disponible;
    private Hotel $hotel;

    public function __construct(int $numero, int $lits, float $prix, bool $wifi, bool $disponible, Hotel $hotel){
        $this->numero = $numero;
        $this->lits = $lits;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->disponible = $disponible;
        $this->hotel = $hotel;
        $this->hotel->setChambres($this);
    }

    public function getNumero():int{
        return $this->numero;
    }

    public function setNumero(int $numero){
        $this->numero = $numero;
    }

    public function getLits():int{
        return $this->lits;
    }

    public function setLits(int $lits){
        $this->lits = $lits;
    }

    public function getPrix(): float{
        return $this->prix;
    }

    public function setPrix(float $prix){
        $this->prix = $prix;
    }

    public function getWifi(): string{
        if($this->wifi == true){
            return "oui";
        }
        return "non";
    }

    public function setWifi(bool $wifi){
        $this->wifi = $wifi;
    }

    public function getDisponible(): string{
        if($this->disponible == true){
            return "<p class='primary_info'>Disponible<p>";
        }
        return "<p class='danger_info'>réservé<p>";
    }

    public function setDisponible(bool $disponible){
        $this->disponible = $disponible;
    }


    public function getHotel():Hotel{
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel){
        $this->hotel = $hotel;
    }


}



?>