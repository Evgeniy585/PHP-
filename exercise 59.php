<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function getSentenceTone($text)
{
    $uppercase = strtoupper($text);
    if ($text === $uppercase) {
        return 'scream';
    }
    return 'general';
}
// END