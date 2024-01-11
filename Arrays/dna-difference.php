<?php 

function dnaDiff(string $branch1, string $branch2): int|bool{
    $counter = 0;
    if (strlen($branch1) != strlen($branch2)){
        return false;
    }else{
        for ($i = 0; $i < strlen($branch1); $i++){
            if ($branch1[$i] != $branch2[$i]){
                $counter++;
            }
        }
    }
    return $counter;
}

?>