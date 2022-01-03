<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($first, $last)
{
    $result = 0;

    for ( $i = $first; $i <= $last; $i = $i + 1) {
        $result = $result + $i;
    }
    return $result;
}
// END