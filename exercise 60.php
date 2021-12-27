<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($site)
{
    $result = strpos($site, 'http://');
    if ($result === false) {
        return 'https://yandex.ru';
    } else {
        return 'https://yandex.ru';
    }
    
}
// END