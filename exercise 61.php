<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($famaly)
{
    if ($famaly === 'Karstark' || $famaly === 'Tully') {
        return 'friend';
    } elseif ($famaly === 'Lannister' || $famaly === 'Frey') {
        return 'enemy';
    } 
    return 'neutral';
}
// END