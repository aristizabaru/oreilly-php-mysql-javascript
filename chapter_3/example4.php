<?php // Static variables
/*
The static variable is only declared the first
time the function is called so it's not
erase when the function is called again
*/

function counter()
{
    static $count = 0;
    echo $count . '<br/>';
    $count++;
}

counter();
counter();
counter();
