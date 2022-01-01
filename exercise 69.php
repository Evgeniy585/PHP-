<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtolower($str[$i]) === strtolower($char)) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}
// END