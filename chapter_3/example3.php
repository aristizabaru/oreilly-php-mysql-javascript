<?php //Scope
// A function can't access a variable defined outside it's declaration

$temp = 'The date is ';
echo $temp . longdate(time());

function longdate($timestamp)
{
    // Can't acces $temp from here
    return date('l F jS Y', $timestamp);
}
