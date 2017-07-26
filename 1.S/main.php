<?php

spl_autoload_register(function($class){

    require_once "{$class}.php";

});


$logger = new logger();
$user = new user($logger);

$user->getUserData();



