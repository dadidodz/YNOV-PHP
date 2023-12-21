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


function myArrayMap(?callable $callback, array $array, array ...$arrays) {
     // Check if all arrays have the same length
     $lengths = array_map('count', $arrays);
     if (count(array_unique($lengths)) !== 1) {
         throw new InvalidArgumentException("Input arrays must have the same length");
     }
 
     $result = [];
     $numArrays = count($arrays);
     $length = $lengths[0];
 
     // Iterate through each element of the arrays
     for ($i = 0; $i < $length; $i++) {
         $args = [];
 
         // Extract the i-th element from each array
         for ($j = 0; $j < $numArrays; $j++) {
             $args[] = $arrays[$j][$i];
         }
 
         // Apply the callback to the elements and store the result
         $result[] = call_user_func_array($callback, $args);
     }
 
     return $result;
}

?>