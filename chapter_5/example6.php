<?php // Class creation

$object = new User();

print_r($object);
echo "<br/>";

// This way you can access methods
$object->name = "Andres";
$object->password = "123";

print_r($object);
echo "<br/>";

class User
{
    public $name, $password;

    function save_user()
    {
        echo "save user goes here";
    }
}
