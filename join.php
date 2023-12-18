<?php

function joinWords(array $tab, string $separator){

    $result = '';
    if ($separator = NULL){
        $separator = ' ';
    }
    foreach($tab as $word){
        $result = $result . $separator . $word;
    }

}


?>