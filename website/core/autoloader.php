<?php

spl_autoload_register(function($class) {
  
  $controller = "controller/" . $class . ".php";

  if(file_exists($controller)) {
    require_once($controller);
  }

  $model = "model/" . $class . ".php";

  if(file_exists($model)) {
    require_once($model);
  }
})

?>