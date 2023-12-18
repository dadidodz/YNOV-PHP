<?php 
function manageMovements(string $commands): array{
    $finalArr = [];
    $tab = [
        'R' => 'RIGHT',
        'L' => 'LEFT',
        'F' => 'FRONT',
        'B' => 'BACKWARDS'
    ];
    $word = '';
    $last = '';


    for ($i = 0; $i < strlen($commands); $i++){
        if ($commands[$i] == $last) {
            $word = $tab[$commands[$i]] . ' AGAIN';
            array_push($finalArr, $word);
        }else{
            array_push($finalArr, $tab[$commands[$i]]);
        }
        $last = $commands[$i];
    }

    return $finalArr;
}

?>