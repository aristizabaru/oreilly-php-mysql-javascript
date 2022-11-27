<?php // Switch
$page = "Home";

switch ($page) {
    case 'Home':
        echo "You've selected Home";
        break;
    case 'About':
        echo "You've selected About Us";
        break;
    case 'Contact':
        echo "You've selected Contact";
        break;
    default:
        echo "Page not found";
        break;
}

/*
Alternative syntax
This syntax is regularly used in conjunction with
html tags to improve code comprehension.
*/
switch ($page):
    case 'Home':
        echo "You've selected Home";
        break;
endswitch;

echo "<br/>";
/*
It is however recommended to use an associative array
for these cases instead of a swtich statement as
they are clearer and easier to update.
*/

$pages = [
    "Home" => "You've selected Home",
    "About" => "You've selected About Us",
    "Contact" => "You've selected Contact",
];


array_key_exists($page, $pages) ? print $pages[$page] : print "Page not found";
