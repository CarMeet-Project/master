<?php

include("./Contoller.php");

class Account extends Controller {
  
  private $username;
  private $password;

  public function __construct() {

  }

  public function __set($key, $value) {

    if(($key === "username") || ($key === "password")) {
      $this->$key = $value;
      parrent::getValidate($key, $value);
    }
  }

}

?>