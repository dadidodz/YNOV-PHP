<?php

function breakLines($string, $int): string
{
    $result = '';
    $pattern = "/[-\s:]/";
    $nbr_char = 0;
    $retour_ligne = true;
    $array_string = preg_split($pattern, $string);
    foreach ($array_string as $value){
        $len_word=strlen($value);
        if ($len_word > $int){
            throw new Exception('A word is longer than '.$int.' characters');
        }else{
            if($retour_ligne == true and $nbr_char < $int){
                $result.=$value;
                $nbr_char+=$len_word;
                $retour_ligne = false;
                //echo($nbr_char.' ');
            }elseif ($nbr_char < $int){
                $result.= ' '.$value;
                $nbr_char+=$len_word+1;
                //echo($nbr_char.' ');
            }else{
                $result.= "\n".$value.' ';
                $nbr_char=$len_word+1;
                $retour_ligne = true;
                //echo($nbr_char.' ');
            }
        }
    }
    return $result;
}

echo breakLines('Line with words should break at this spot', 15)
?>