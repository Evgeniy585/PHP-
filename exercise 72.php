<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            $count = $count + 1;
        }
         $i += 1;
    }

    return $count;
}
// END
