<?php // static properties

$temp = new Test;

echo "Test A: " . Test::$static_poperty . "<br/>";
echo "Test B: " . $temp->get_sp() . "<br/>";
/*
This test won't work as an instance can't access
an static (class) property
*/
echo "Test A: " . $temp->static_poperty . "<br/>";

class Test
{
    static $static_poperty = "I'm static";

    static function get_sp()
    {
        return self::$static_poperty;
    }
}
