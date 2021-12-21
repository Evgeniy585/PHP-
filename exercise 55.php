<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function hasTargaryenReference($fam)
{
  $text = substr($fam, 0, 9);
  return $text === 'Targaryen';
}
// END