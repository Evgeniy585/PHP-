<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use function HexletBasics\Functions\getParentFor;

// BEGIN (write your solution here)
function getCustomParentFor($child, $parent = 'father')
{
   return getParentFor($child, $parent ) ;
}
// END