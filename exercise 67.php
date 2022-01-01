<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($text1, $text2)
{
    $result = '';
    $i = $text1;
    while ($i <= $text2){
        $result = "{$result}{$i}";
        $i = $i + 1;
    }
    return $result;
}