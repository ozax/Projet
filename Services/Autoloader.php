<?php

namespace Services;

class Autoloader{


    static function register()
    {
        spl_autoload_register(array(__CLASS__ , 'autoload'));
    }

    static function autoload($class)
    {
        $class = str_replace( '\\' , '/' , $class );
        require './' . $class . '.php';
    }

}

?>