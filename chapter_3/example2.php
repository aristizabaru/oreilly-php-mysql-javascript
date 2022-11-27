<?php // Use of magic constants
/*
There are nine magical constants that change depending
on where they are used. For example, the value of
__LINE__ depends on the line that it's used on in
your script. All these "magical" constants are
resolved at compile time, unlike regular constants,
which are resolved at runtime

https://www.php.net/manual/en/language.constants.magic.php
*/
echo 'This is the ' . __LINE__ . ' line of the file ' . __FILE__ . ' in the directory ' . __DIR__;
