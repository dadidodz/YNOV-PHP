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
    return lcfirst($string);
}

function removeBlankSpace($string): string
{
    return trim($string);
}

?>