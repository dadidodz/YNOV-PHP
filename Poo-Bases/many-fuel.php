<?php
    class Car
    {
        private float $tank;

        public function __construct(float $tank = 0)
        {
            $this->tank = $tank;
        }

        //getters
        public function getTank(): float
        {
            return $this->tank;
        }

        //setters
        public function setTank(float $tank): self
        {
            $this->tank = $tank;
            return $this;
        }

        public function ride(float $distance): self {
            (float)$consommation = $distance / 20;
            $this->setTank($this->getTank()-$consommation);
            return $this;
        }
    }
?>