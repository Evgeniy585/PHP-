<?php

namespace HexletBasics\DefineFunctions\Naming;

// BEGIN (write your solution here)
function getFormattedBirthday($day, $month, $year)
{
    return sprintf('%02d-%02d-%d', $day, $month, $year);
}
// END