<?php

function breakLines($string, $maxLength): string
{
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(' ', $line);
        $currentLine = '';

        foreach ($words as $word) {
            if (strlen($currentLine . $word) <= $maxLength) {
                $currentLine .= $word . ' ';
            } else {
                $result .= rtrim($currentLine) . "\n";
                $currentLine = $word . ' ';
            }
        }
        $result .= rtrim($currentLine) . "\n";
    }
    $result = rtrim($result);

    return $result;
}

?>