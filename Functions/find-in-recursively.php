<?php

function findIn(string $key, array $dic):string | bool {
    if (array_key_exists($key, $dic)) {
        return $dic[$key];
    }
    
    foreach ($dic as $value) {
        if (is_array($value)) {
            $result = findIn($key, $value);
            if ($result !== false) {
                return $result;
            }
        }
    }
    
    return false;
}

$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];

echo findIn('name', $tab);
// returns "forIn"
echo findIn('description', $tab);
// returns "the value key to find"
echo findIn('secondParam', $tab);
// returns "array"
echo findIn('yeah', $tab);
// returns false

?>