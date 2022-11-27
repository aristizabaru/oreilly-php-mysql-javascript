<?php // Use of constructor and destruct

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Desctruct method is useful when dealing with sessions
    public function __destruct()
    {
        echo "<br/><br/>Object is terminated";
    }
}

$object = new User('Andrés');

echo $object->name;
