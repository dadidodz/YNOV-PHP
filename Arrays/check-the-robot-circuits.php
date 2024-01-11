<?php 

function checkCircuits(int $number): array{
    $finalArr = [];
    $tab = [
        2 => 'Left arm',
        3 => 'Right arm',
        5 => 'Motherboard',
        7 => 'Processor',
        11 => 'Zip Defluxer',
        13 => 'Motor'
    ];

    foreach ($tab as $key => $value) {
        if (($number % intval($key)) == 0){
            array_push($finalArr, $value);
        }
    }
    return $finalArr;
}

?>