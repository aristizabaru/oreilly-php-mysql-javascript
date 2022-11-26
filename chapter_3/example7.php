<?php // htmlentities() 
/*
htmlentities() -> Convert all characters to html entities,
it is good practice to sanitize global variables as they
could be injected with malicious code.
*/

$came_from = htmlentities($_SERVER['REQUEST_URI']);

echo $came_from;
