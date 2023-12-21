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


function myArrayMap(callable $callback, array ...$arrays) {
    // Check if all arrays have the same length
    $lengths = array_map('count', $arrays);
    if (count(array_unique($lengths)) !== 1) {
        throw new InvalidArgumentException("Input arrays must have the same length");
    }

    $result = [];

    // Iterate through each element of the arrays
    for ($i = 0; $i < $lengths[0]; $i++) {
        $args = array_map(function ($array) use ($i) {
            return $array[$i];
        }, $arrays);

        // Apply the callback to the elements and store the result
        $result[] = call_user_func_array($callback, $args);
    }

    return $result;
}

?>