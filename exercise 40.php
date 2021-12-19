<?php

use function HexletBasics\Functions\getParentFor;

// BEGIN (write your solution here)
$Joffreymother = getParentFor('Joffrey Baratheon');
$grandfather = getParentFor($Joffreymother, 'father');
print_r($grandfather);

// END