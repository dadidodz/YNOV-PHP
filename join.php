<?php

function joinWords(array $tab, string $separator = ' '): string {

    $counter = 0;
    $result = '';
    foreach($tab as $word){
        if ($counter < 1){
            $result .= $word;
            $counter += 1;
        }else{
            $result .= $separator . $word;
        }
    }
    return $result;

}
?>