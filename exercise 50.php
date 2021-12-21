<?php

namespace HexletBasics\DefineFunctions\Environment;

// BEGIN (write your solution here)
function  getAgeDifference($year1, $year2)
{
    $sub = abs($year1 - $year2);
    return "The age difference is {$sub}";
}
// END