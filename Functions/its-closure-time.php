<?php

function f() {
    return [
        '+' => function ($a, $b) {
            return $a + $b;
        },
        '-' => function ($a, $b) {
            return $a - $b;
        },
        '*' => function ($a, $b) {
            return $a * $b;
        },
    ];
};

?>