<?php

function capsMe($string): string
{
    return strtoupper($string) ;
}

function lowerMe($string): string
{
    return strtolower($string) ;
}

function upperCaseFirst($string): string
{
    return ucwords($string) ;
}

function lowerCaseFirst($string): string
{
    $len = strlen($string);
    for ($i = 0; $i < $len; $i++) {
        $string[$i] = lcfirst($string[$i]);
    }
    return $string;
}

function removeBlankSpace($string): string
{
    return trim($string);
}

?>