<?php

function breakLines($string, $int): string
{
    $result = '';
    $pattern = "/[-\s:]/";
    $nbr_char = 0;
    $counter = 0;
    $array_string = preg_split($pattern, $string);
    foreach ($array_string as $value){
        $len_word=strlen($value);
        if ($len_word > $int){
            throw new Exception('A word is longer than '.$int.' characters');
        }else{
            $nbr_char+=$len_word;
            if($counter == 0 and $nbr_char < $int){
                $result.=$value;
            }elseif ($nbr_char < $int){
                $result.= ' '.$value;
                $nbr_char+=1;
            }else{
                $result.= "\n".$value;
                $nbr_char=0;
            }
        }
        $counter+=1;
    }
    return $result;
}

echo breakLines('Line with words aaaaa', 15)



?>