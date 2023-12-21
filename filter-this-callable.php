<?php
function myArrayFilter(array $array, ?callable $callback = null): array{
    $result = [];
    if ($callback == null){
        foreach ($array as $key => $value) {
            if (!empty($array[$key])){
                $result[$key] = $value;
            }
        }
    }else{
        foreach ($array as $key => $value) {
            if ($callback($array[$key]) == 1){
                $result[$key] = $value;
            }
        }
    }
    return $result;
}

?>