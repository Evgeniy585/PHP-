<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($amount, $count)
{
    $result = $amount ?: $count * 3 ;
    return $result;
}
// END