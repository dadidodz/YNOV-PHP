<?php

$dayNumber = date("jS");
$month = date("F");
$year = date("Y");


$today = function() use ($dayNumber, $month, $year){
    $result = 'It is ' . $month . ' ' . $dayNumber . ', ' . $year;
    echo $result;
};

$isLeapYear = function() use ($year){
    if ($year % 400 == 0)
        echo ''.True;
    else if ($year % 100 == 0)
        echo ''.False;
    else if ($year % 4 == 0)
        echo ''.True;
    else
        echo ''.False;
};

$today();
$isLeapYear();

?>