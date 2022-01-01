<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Считаем только подходящие символы
            $count = $count + 1;
        }
        // Счетчик увеличивается в любом случае
         $i += 1;
    }

    return $count;
}
// END
