<?php

include_once __DIR__ . '/../config/Configuration.php';

spl_autoload_register(function ($class_name){

    $file = __DIR__ . '/../Core/'.  $class_name . '.php';

    if (file_exists($file)){
        include_once $file;
    }

});


// Start the session
Session::start();