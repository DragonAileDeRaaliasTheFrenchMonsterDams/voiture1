<?php

class Voiture{

    private string $immatriculation;
    private int $chevaux;
    private string $date;

    public function __construct(string $unimmatriculation, int $unchevaux, string $undate)
    {
        $this->$immatriculation = $unimmatriculation;
        $this->$chevaux = $unchevaux;
        $this->$Date = $undate;
    }

    public function getimmatriculation()
    {
        return this->immatriculation;
    }

    public function getchevaux()
    {
        return this->chevaux;
    }

    public function getDate()
    {
        return this->Date;
    }

    public function afficherdetails()
    {
        
    }

}
