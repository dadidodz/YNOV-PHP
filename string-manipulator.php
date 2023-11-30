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

function lowerCaseFirst($str) {
    $words = explode(' ', $str);
    $titleCaseWords = array_map(function($word) {
        return ucfirst(strtolower($word));
    }, $words);

    return implode(' ', $titleCaseWords);
}

function removeBlankSpace($string): string
{
    return trim($string);
}

?>