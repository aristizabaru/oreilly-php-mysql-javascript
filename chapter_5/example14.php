<?php // Initialize parent class constructor

/*
When instantiating a subclass, the constructor of the parent
class is not automatically initialized, it must be called
using the parent keyword and the scope resolution
operator (::)
*/

$object = new Tiger;

echo "Tigers have: <br/>";
echo "Fur: $object->fur <br/>";
echo "Stripes: $object->stripes";

class Wildcat
{
    public $fur; // Wildcats have fur

    public function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes; // Tigers have stripes

    public function __construct()
    {
        parent::__construct(); // Call parent constructor first
        $this->stripes = "TRUE";
    }
}
