<?php // Constants and class methods

/*
To call a class method use the class name plus
the scope resolution operator (::)
*/
Translate::lookup();

class Translate
{
    /*
    To define a constant inside a class you
    must use the keyword const
    */
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;

    /*
    To define a class method use static keyword.
    This method does not have access to any
    property of the object.
    */
    static function lookup()
    {
        /*
        To reference a constant or an static property
        within the class, use the keyword self and
        the scope resolution operator (::)
        */
        echo self::SPANISH;
    }
}
