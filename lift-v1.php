<?php

function getFloor(int $currentFloor, int|null $requestedFloor, array $listButtonsCalled): ?int
{

    if ($requestedFloor != null){
        return $requestedFloor;
    }

    if (!empty($listButtonsCalled)){
        $nearestFloor = getNearestNumberInArray($currentFloor, $listButtonsCalled);
        return $nearestFloor;
    }

    return null;

}

function getNearestNumberInArray($numbers, $reference)
{
    if (empty($reference)) {
        return null;
    }

    $nearest = null;
    $nearestDistance = null;

    foreach ($reference as $number) {
        $distance = abs($number - $numbers);

        if ($nearestDistance === null || $distance < $nearestDistance) {
            $nearest = $number;
            $nearestDistance = $distance;
        }
    }

    return $nearest;
}

function getDirection(int $currentFloor, int|null $requestedFloor, array $listButtonsCalled): int
{

    if ($currentFloor === $requestedFloor) {
        return 0;
    }

    $nearestFloor = getNearestNumberInArray($currentFloor, $listButtonsCalled);

    if ($currentFloor < $requestedFloor || $currentFloor < $nearestFloor) { 
        return 1;
    }
    else {
        return -1;
    }
    if (empty($calledFloors)) {
        return 0;
    }
}

?>