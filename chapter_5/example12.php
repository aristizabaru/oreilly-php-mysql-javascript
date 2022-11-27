<?php // Inheritance

$object = new SuscriberTest;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";

$object->display();

class UserTest
{
    public $name, $password;

    public function save_user()
    {
        echo "Save User code goes here";
    }
}

class SuscriberTest extends UserTest
{
    public $phone, $email;

    public function display()
    {
        echo "Name: " . $this->name . "<br/>";
        echo "Password: " . $this->password . "<br/>";
        echo "Phone: " . $this->phone . "<br/>";
        echo "Email:" . $this->email . "<br/>";
    }
}
