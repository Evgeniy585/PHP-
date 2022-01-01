<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $index, $length)
{
$stringLength = strlen($str);

    if ($index < 0) {
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($index >= $stringLength) {
        return false;
    } elseif ($index + $length > $stringLength) {
        return false;
    }

    return true;
}
// END