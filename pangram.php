<?php

function isPangram($string): bool
{
    $string = strtoupper($string);
    $alphas = range('A', 'Z');
    foreach ($alphas as $key => $value){
        $pattern = "/".$value."/i";
        if (preg_match($pattern, $string)==0){
            return false;
            break;
        }
    }
    return true;
}

?>