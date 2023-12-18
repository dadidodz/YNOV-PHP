<?php 
function manageMovements(string $commands): array{
    $finalArr = [];
    $tab = [
        "R" => "RIGHT",
        "L" => "LEFT",
        "F" => "FORWARD",
        "B" => "BACKWARD"
    ];


    for ($i = 0; $i < strlen($commands); $i++){
        array_push($finalArr, $tab[$commands[$i]]);
    }

    return $finalArr;
}

?>