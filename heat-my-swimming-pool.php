<?php

interface PoolTempsInterface {

    function getActualTemp(): int;
    function getLastDaysTemps(): array;
    function setHeater(bool $isActive):self;

}

class PoolTemps implements PoolTempsInterface {

    private bool $isActive = false;
    private int $currentTemp;
    private array $avgTempLast7Days;

    public function __construct(int $currentTemp, array $avgTempLast7Days){
        $this->currentTemp = $currentTemp;
        $this->avgTempLast7Days = $avgTempLast7Days;
    }

    function getActualTemp(): int {
        return $this->currentTemp;
    }

    function getLastDaysTemps(): array {
        return $this->avgTempLast7Days;
    }

    function setHeater(bool $isActive):self{
        $this->isActive = $isActive;
        return $this;
    }

    function activateHeater(){
        $sumAvgTemp = 0;
        foreach($this->getLastDaysTemps() as $temp){
            $sumAvgTemp += $temp;
        }
        $avgTemp = $sumAvgTemp / 7;
        if ($avgTemp > 20 && $this->getActualTemp() >= 25 && $this->activateHeater() == false){
            $this->setHeater(true);
        }
    }
}



?>