<?php

function reverse($string): string
{
    return strrev($string);
}

function isPalindrome($string): bool{
    if (strtolower($string) == strtolower(reverse($string))){
        return true;
    }else{
        return false;
    }
}


?>