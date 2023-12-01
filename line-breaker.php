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
            $nbr_char += $len_word;
            if($retour_ligne == true and $nbr_char < $int){
                $result.=$value;
                $retour_ligne = false;
            }elseif ($nbr_char < $int){
                $result.= ' '.$value;
                $nbr_char+=$len_word+1;
            }else{
                $result.= "\n".$value.' ';
                $nbr_char=$len_word+1;
                $retour_ligne = true;
            }
        }
    }
    return $result;
}
echo breakLines('Title is long\nLine with words break', 12)
?>