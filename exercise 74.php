<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($string, $char)
{
    $i = 0;
    $length = strlen($string);

    while($i < $length){
        $currentChar = $string[$i];
        if($currentChar === $char){
            return true;
        }
        $i = $i + 1;
    }
    return false;
}
// END