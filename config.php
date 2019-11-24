<?php

function __autoload ($className) {

    var_dump($className);
    require_once ("$className.php");

}


?>