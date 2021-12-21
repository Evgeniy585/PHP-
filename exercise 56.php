<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\isLannisterSoldier;

// BEGIN (write your solution here)
function isNotLannisterSoldier($armor, $shield)
{
    return !isLannisterSoldier($armor, $shield);
}
// END