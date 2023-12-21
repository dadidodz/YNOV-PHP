<?php

function sum($carry, $item){
    $carry += $item;
    return $carry;
}

function product($carry, $item){
    $carry *= $item;
    return $carry;
}

function myArrayReduce(array $array, callable $callable, mixed $initial = null): mixed {
    if ($initial != null){
        $result = $initial;
    }else{
        $result = 0;
    }
    for ($i = 0; $i < count($array); $i++) {
        $result = $callable($result, $array[$i]); //sum
    }
    return $result;
}

$a = array(1, 2, 3, 4, 5);
var_dump(array_reduce($a, "sum"));
var_dump(myArrayReduce($a, "sum"));

?>