<?php // clone objects

$object1 = new User();
$object1->name = "Andrés";
$object2 = $object1;
$object2->name = "Daniela";
// $object2 has a reference to $object1
echo "$object1->name $object2->name <br/>";

// A new object is created
$object2 = clone $object1;
$object2->name = "Juliana";
echo "$object1->name $object2->name <br/>";

class User
{
    public $name;
}
