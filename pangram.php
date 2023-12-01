<?php

function isPangram($string): bool
{
    $string = strtoupper($string);
    $alphas = range('A', 'Z');
    foreach ($alphas as $key => $value){
        if (preg_match($value, $string)==0){
            return false;
            break;
        }
    }
    return true;
}
?>