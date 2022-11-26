<?php // $GLOBALS
/*
$GLOBALS ->  All variables that are currently defined
in the global scope of the script. The names of the variables
are the key to the array.
*/

$GLOBALS['is_logged_in'] = true;

function auth()
{
    $GLOBALS['is_logged_in'] ? print 'Is logged' : print 'Is not logged';
}

auth();
