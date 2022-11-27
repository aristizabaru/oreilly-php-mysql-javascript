<?php // Final method

class UserTest
{
    /*
    When you want to prevent a subclass from overriding
    a superclass's method, use the final keyword before
    defining the method.
    */
    final public function copyright()
    {
        echo 'This class was written by Joe Smith';
    }
}
