<?php

function myArrayMap(?callable $callable, array $array, array ...$arrays): array{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $callable($array[$i]); //sum
    }
    return $array;
}

?>