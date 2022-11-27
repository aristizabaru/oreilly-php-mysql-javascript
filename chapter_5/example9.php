<?php // public and private

class UserCredentials
{
    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function __destruct()
    {
        echo "<br/><br/>Object is terminated";
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_password($new_password)
    {
        $this->password = $new_password;
    }
}

$object = new UserCredentials('123');

echo $object->get_password();

$object->set_password('456');

echo "<br/>";
echo $object->get_password();
