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
    $result = upperCaseFirst($string);
    $len = strlen($result);
    for ($i = 0; $i < $len; $i++) {
        if (ctype_lower($result[$i])) {
            $result[$i] = strtoupper($result[$i]);
        } else {
            $result[$i] = strtolower($result[$i]);
        }
    }
    return $result;
}

function removeBlankSpace($string): string
{
    return trim($string);
}

?>