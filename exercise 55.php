<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLannisterSoldier($armor, $shield)
{
    return ($armor === 'red' && $shield === null) || $shield === 'lion';
}
// END