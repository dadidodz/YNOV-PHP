<?php

function joinWords(array $tab, string $separator = ' '){

    $result = '';
    foreach($tab as $word){
        $result = $result . $separator . $word;
    }
    return $result;

}


?>