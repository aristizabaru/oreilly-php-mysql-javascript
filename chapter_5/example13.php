<?php // Invoke methods of the parent class

$object = new Son;
$object->test();
$object->test2();

class Dad
{
    public function test()
    {
        echo "[Class Dad] I am your Father <br/>";
    }
}

class Son extends Dad
{
    public function test()
    {
        echo "[Class Son] I am Luke <br/>";
    }

    public function test2()
    {
        /* 
        To call a method from parent class use the
        keyword parent and the scope resolution
        operator (::)
        */
        parent::test();
    }
}
