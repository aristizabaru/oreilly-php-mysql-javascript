<?php // global keyword

$str1 = 'CarLOS';
$str2 = 'ANDrés';
$str3 = 'arisTizábal';

fix_name();

echo "$str1 $str2 $str3";

/*
The global keyword gives you access to the variable
outside the scope of the function.
*/
function fix_name()
{
    global $str1;
    global $str2;
    global $str3;

    $str1 = ucfirst(strtolower($str1));
    $str2 = ucfirst(strtolower($str2));
    $str3 = ucfirst(strtolower($str3));
}
