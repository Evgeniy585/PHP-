<?php

use function HexletBasics\Functions\calculateDistanceBetweenTowns;

$from = 'The Twins';
$to = 'The Eyrie';

// BEGIN (write your solution here)
$range = calculateDistanceBetweenTowns("{$from}-{$to}");
print_r($range);
// END