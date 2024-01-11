<?php

class Car{
    //  ↙ Visibility on attributes
    private float $tank;

    //  ↙ Visibility into functions
    public function __construct()
    {
    }

    // Getters
    public function getTank(): float
    {
        return $this->tank;
    }

    // Setters
    public function setTank(float $tank): self
    {
        $this->tank = $tank;
        return $this;
    }

    public function ride(float $distance){
        $consommation = $distance / 20;
        $this->setTank($this->getTank()-$consommation);
    }

 }

?>