<?php // Superglobals
/*
$GLOBALS ->  All variables that are currently defined
in the global scope of the script. The names of the variables
are the key to the array.

$_SERVER -> Information such as headers, paths, and script
locations. The entries in this array are created by the web
server, and there is no guarantee that all web servers will
provide any or all of these entries.

$_GET -> Variables passed to the current script via the
HTTP GET method.

$_POST -> Variables passed to the current script via the
HTTP POST method.

$_FILES -> Elements loaded into the current script via HTTP cookies.

$_SESSION -> Session variables available to the current script.

$_REQUEST -> Content of the information passed from the browser;
by default, $_GET, $_POST, and $_COOKIE.

$_ENV -> Variables passed to the current script via the
environment method.
*/

function dd($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die();
}

dd($_SERVER);
