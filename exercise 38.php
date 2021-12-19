<?php

use function HexletBasics\Functions\calculateDistance;

// BEGIN (write your solution here)
$result1 = calculateDistance('Winterfell', 'The Twins');
$result2 = calculateDistance('The Twins', 'The Eyrie');
print_r($result1 + $result2);
// END