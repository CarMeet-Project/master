<?php

spl_autoload_register(function($class) {
    
    $controller = "Controller/" . $class . ".php";

    if(file_exists($controller)) {
        require_once($controller);
    }
    
    $model = "Model/" . $class . ".php";

    if(file_exists($model)) {
        require_once($model);
    }
})

?>