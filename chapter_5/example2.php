<?php //use built in functions

echo fix_name('CarLOS', 'ANDrés', 'arisTizábal');

function fix_name($str1, $str2, $str3)
{
    $fix_str1 = ucfirst(strtolower($str1));
    $fix_str2 = ucfirst(strtolower($str2));
    $fix_str3 = ucfirst(strtolower($str3));

    return "$fix_str1 $fix_str2 $fix_str3";
}
