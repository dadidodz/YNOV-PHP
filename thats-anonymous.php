<?php


$year = date("Y");

$today = function() {
    $dayNumber = date("jS");
    $month = date("F");
    $year = date("Y");
    $result = 'It is ' . $month . ' ' . $dayNumber . ', ' . $year;
    echo $result;
};

$isLeapYear = function() use ($year){
    if ($year % 400 == 0)
        return True;
    else if ($year % 100 == 0)
        return False;
    else if ($year % 4 == 0)
        return True;
    else
        return False;
};

$today();
$isLeapYear();

?>