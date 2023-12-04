<?php

function calc(string $expression): int
{
    if (preg_match('/[^0-9+\-() ]/', $expression)){
        throw new InvalidArgumentException('Invalid character');
    }

    $expression = str_replace(' ', '', $expression);
    $result = eval("return $expression;");
    return $result;
}
?>