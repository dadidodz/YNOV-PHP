<?php

function reverse(array $array): array {
    $reversedArray = [];
    for ($i = count($array)-1; $i >= 0; $i--){
        $reversedArray[] = $array[$i];
    }
    return $reversedArray;
}

function push(array &$array, string ...$strings): int {
    foreach($strings as $string){
        $array[] = $string;
    }
    return count($array);
}

function sum(array $array): int {
    $result = 0;
    foreach($array as $value){
        $result += $value;
    }
    return $result;
}

function arrayContains(array $array, int|string|float $element): mixed{
    foreach($array as $value){
        if ($value == $element){
            return $value;
        }
    }
    return "Nothing";
}

function merge(array ...$arrays){
    $result = [];
    foreach($arrays as $array) {
        foreach($array as $value){
            array_push($result, $value);
        }
    }
    return $result;
}

?>