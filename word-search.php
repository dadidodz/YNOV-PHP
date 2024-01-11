<?php

$board = [                  //board[i][j]
    ['a', 'b', 'c', 'd'],   //board[0][3]
    ['d', 'k', 'l', 'm'],   //board[1][0]
    ['m', 'f', 'b', 's']    //board[2][0]
];

function nextLetter(&$positioni, &$positionj, &$bool, array $array, $letter){

    if ($positioni == 0){
        if ($positionj == 0){
            if ($letter == $array[$positioni][$positionj+1]){
                $positioni = $positioni;
                $positionj = $positionj + 1;
                $bool = true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                $bool = true;
            }
        }elseif($positionj == count($array[$positioni])-1){
            if ($letter == $array[$positioni][$positionj-1]){
                $positioni = $positioni;
                $positionj = $positionj - 1;
                $bool = true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                $bool = true;
            }
        }
    }elseif ($positioni == count($array)-1){
        if ($positionj == 0){
            if ($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                $bool = true;
            }elseif($letter == $array[$positioni][$positionj+1]){
                $positioni = $positioni;
                $positionj = $positionj + 1;
                $bool = true;
            }
        }elseif($positionj == count($array[$positioni])-1){
            if ($letter == $array[$positioni][$positionj-1]){
                $positioni = $positioni;
                $positionj = $positionj - 1;
                $bool = true;
            }elseif($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                $bool = true;
            }
        }
    }else{
        if ($positionj == 0){
            if ($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                $bool = true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                $bool = true;
            }elseif($letter == $array[$positioni][$positionj+1]){
                $positioni = $positioni;
                $positionj = $positionj + 1;
                $bool = true;
        }elseif ($positionj == count($array[$positioni]) - 1){
            if ($letter == $array[$positioni-1][$positionj]){
                $positioni = $positioni - 1;
                $positionj = $positionj;
                $bool = true;
            }elseif($letter == $array[$positioni+1][$positionj]){
                $positioni = $positioni + 1;
                $positionj = $positionj;
                $bool = true;
            }elseif($letter == $array[$positioni][$positionj-1]){
                $positioni = $positioni;
                $positionj = $positionj - 1;
                $bool = true;
            }}
        }elseif ($letter == $array[$positioni][$positionj-1]){
            $positioni = $positioni;
            $positionj = $positionj - 1;
            $bool = true;
        }elseif($letter == $array[$positioni][$positionj+1]){
            $positioni = $positioni;
            $positionj = $positionj + 1;
            $bool = true;
        }elseif($letter == $array[$positioni-1][$positionj]){
            $positioni = $positioni - 1;
            $positionj = $positionj;
            $bool = true;
        }elseif($letter == $array[$positioni+1][$positionj]){
            $positioni = $positioni + 1;
            $positionj = $positionj;
            $bool = true;
        }else{
            $bool = false;
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
            if ($arrayWord[0] == $multiDimArray[$i][$j]  ){
                $temp++;
                $positioni = $i;
                $positionj = $j;      
            }
        }
    }

    while ($temp<count($arrayWord)){
        if ($bool == true){
            nextLetter($positioni, $positionj, $bool ,$multiDimArray, $arrayWord[$temp]);
            $temp++;
        }else{
            return false;
        }
    }

    return $bool;
    
}

// Word can be constructed as letters from adjacent cells sequentially
// where the 'adjacent' cells are the neighboring ones horizontally or vertically
searchWord($board, 'abcd'); // true
searchWord($board, 'abcl'); // true
searchWord($board, 'admfbl'); // true

// It is not allowed to use the same letter twice
searchWord($board, 'abcc'); // false
searchWord($board, 'abcdc'); // false
searchWord($board, 'dklml'); // false
?>