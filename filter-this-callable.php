<?php
function myArrayFilter(array $array, ?callable $callback = null): array{
    $result = [];
    if ($callback == null){
        for ($i = 0; $i < count($array); $i++) {
            if (!empty($array[$i])){
                array_push($result, $array[$i]);
            }
        }
    }else{
        for ($i = 0; $i < count($array); $i++) {
            if ($callback($array[$i]) == 1){
                $result[$i] = $array[$i];
            }
        }
    }
    return $result;
}
?>