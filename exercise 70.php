<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN (write your solution here)
function  mysubstr($text, $length)
{
    $i = 0;
    $result = '';
    while ($i < $length){
        $currentChar = $text[$i];
        $result = "{$result}{$currentChar}";
        $i = $i + 1;
    }
    return $result;
}
// END