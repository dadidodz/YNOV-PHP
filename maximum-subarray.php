<?php

function findMaximumSubarray (array $arr): int | float {
    $n = count($arr);
    if ($n === 0) {
        return 0;
    }
    $maxEndingHere = $maxSoFar = $arr[0];
    for ($i = 1; $i < $n; $i++) {
        $maxEndingHere = max($arr[$i], $maxEndingHere + $arr[$i]);
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }
    return $maxSoFar;
}

?>