<?php

function breakLines($string, $int): string
{
    $result = '';
    $pattern = "/[-\s:]/";
    $nbr_char = 0;
    $array_string = preg_split($pattern, $string);
    foreach ($array_string as $value){
        $len_word=strlen($value);
        if ($len_word > $int){
            throw new Exception('A word is longer than '.$int.' characters');
        }else{
            if($nbr_char==0 and $nbr_char < $int){
                $result.=$value;
                $nbr_char+=$len_word;
            }elseif ($nbr_char < $int){
                $result.= ' '.$value;
                $nbr_char+=$len_word+1;
            }else{
                $result.= "\n".$value.' ';
                $nbr_char=0;
            }
        }
    }
    return $result;
}

echo breakLines('Line with words should break', 15)
?>