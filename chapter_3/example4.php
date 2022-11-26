<?php // Static variables
// The static variable is only declared the first time the function is called.

function counter()
{
    static $count = 0;
    echo $count . '<br/>';
    $count++;
}

counter();
counter();
counter();
