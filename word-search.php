<?php

$board = [                  //board[i][j]
    ['a', 'b', 'c', 'd'],   //board[0][3]
    ['d', 'k', 'l', 'm'],   //board[1][0]
    ['m', 'f', 'b', 's']    //board[2][0]
];

function nextLetter(&$positioni, &$positionj, $array, $letter){

    if ($positioni == 0){
        if ($positionj == 0){
            if ($letter == $array[$positioni][$positionj+1]){
                $positioni = $positioni;
                $positionj = $positionj + 1;
                return true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                return true;
            }
        }elseif($positionj == count($array[$positioni])-1){
            if ($letter == $array[$positioni][$positionj-1]){
                $positioni = $positioni;
                $positionj = $positionj - 1;
                return true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                return true;
            }
        }
    }elseif ($positioni == count($array)-1){
        if ($positionj == 0){
            if ($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                return true;
            }elseif($letter == $array[$positioni][$positionj+1]){
                $positioni = $positioni;
                $positionj = $positionj + 1;
                return true;
            }
        }elseif($positionj == count($array[$positioni])-1){
            if ($letter == $array[$positioni][$positionj-1]){
                $positioni = $positioni;
                $positionj = $positionj - 1;
                return true;
            }elseif($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                return true;
            }
        }
    }else{
        if ($letter == $array[$positioni][$positionj-1]){
            $positioni = $positioni;
            $positionj = $positionj - 1;
            return true;
        }elseif($letter == $array[$positioni][$positionj+1]){
            $positioni = $positioni;
            $positionj = $positionj + 1;
            return true;
        }elseif($letter == $array[$positioni-1][$positionj]){
            $positioni = $positioni - 1;
            $positionj = $positionj;
            return true;
        }elseif($letter == $array[$positioni+1][$positionj]){
            $positioni = $positioni + 1;
            $positionj = $positionj;
            return true;
        }else{
            return false;
        }
    }
}

function searchWord(array $multiDimArray, string $word){
    $bool = true;
    $arrayWord = str_split($word);
    $positioni = 0;
    $positionj = 0;
    $temp = 0;
    for ($i = 0; $i < count($multiDimArray); $i++) {
        for ($j = 0; $j < count($multiDimArray[$i]); $j++) {
            if ($arrayWord[0] == $multiDimArray[$i][$j] ){
                $temp++;
                $positioni = $i;
                $positionj = $j;        
            }else{
                return false;
            }
        }
    }

    while ($temp<=count($arrayWord)){
        if ($bool == true){
            $bool = nextLetter($positioni, $positionj, $multiDimArray, $arrayWord[$temp]);
            $temp++;
        }else{
            return false;
        }
    }

    return $bool;
}

echo searchWord($board, 'abcd'); // true
?>