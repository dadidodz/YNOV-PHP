<?php




$today = function() {
    $dayNumber = date("jS");
    $month = date("F");
    $year = date("Y");
    $result = 'It is ' . $month . ' ' . $dayNumber . ', ' . $year;
    echo $result;
};


$today();


?>