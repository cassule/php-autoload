<?php

function autoloadClass ($className) {

    if (file_exists($className.".php") === true) {
        require_once ($className.".php");
    }

}

spl_autoload_register("autoloadClass");
spl_autoload_register(function ($className) {

    if (file_exists("Abstrata". DIRECTORY_SEPARATOR .$className.".php") === true) {
        require_once ("Abstrata". DIRECTORY_SEPARATOR .$className.".php");
    }

});


?>