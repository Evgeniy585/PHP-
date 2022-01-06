<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $length = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $length; $i = $i + 1) {
        $symbol = mb_substr($text, $i, 1);
        $smallSymbol = mb_strtolower($symbol);
        if ($symbol === $smallSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $smallSymbol;
        }
    }
    return $result;
    // END
}