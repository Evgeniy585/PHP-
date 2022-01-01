<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    $i = $firstNumber;
    while ($i >= 1) {
        print_r($i);
        print_r("\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END
}