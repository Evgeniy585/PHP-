<?php

namespace HexletBasics\Logic\TernaryOperator;

// BEGIN (write your solution here)
function convertText($string)
{
return ($string === ucfirst($string)) ? $string : strrev($string);
}
// END