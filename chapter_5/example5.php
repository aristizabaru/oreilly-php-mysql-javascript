<?php // version compatibility
/*
You can use function_exist() to test if
whether a built-in function is available.

Use phpversion() to output your php version
*/

if (function_exists("array_combine")) {
    echo "array_combine() is available";
} else {
    echo "array_combine() is NOT available";
}

echo "<br/>";

echo phpversion();
