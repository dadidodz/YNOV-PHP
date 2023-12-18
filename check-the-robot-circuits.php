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

    foreach($tab as $digit) {
        if (($number % intval($digit)) == 0){
            array_push($finalArr, $tab[$digit]);
        }
    }

    return $finalArr;
}

?>