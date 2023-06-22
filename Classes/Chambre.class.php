<?php

class Chambre{

    private int $numero;
    private int $lits;
    private float $prix;
    private bool $wifi;
    private bool $disponible;
    private Hotel $hotel;

    public function __construct(int $numero, int $lits, float $prix, bool $wifi, bool $disponible){
        $this->numero = $numero;
        $this->lits = $lits;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->disponible = $disponible;
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

    public function getWifi(): bool{
        return $this->wifi;
    }

    public function setWifi(bool $wifi){
        $this->wifi = $wifi;
    }

    public function getDisponible(): bool{
        return $this->disponible;
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