<?php


$yearl = date("Y");

$today = function() {
    $dayNumber = date("j");
    $month = date("F");
    $year = date("Y");
    $result = 'It is ' . $month . ' ' . $dayNumber . ', ' . $year;
    return $result;
};

$isLeapYear = function() use ($yearl){
    if ($yearl % 400 == 0)
        return True;
    else if ($yearl % 100 == 0)
        return False;
    else if ($yearl % 4 == 0)
        return True;
    else
        return False;
};


?>