<?php

function myArrayMap1(?callable $callable, array $array, array ...$arrays): array{
    if ($callable == null){
        return $array;
    }
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $callable($array[$i]); //sum
    }
    return $array;
}

?>
