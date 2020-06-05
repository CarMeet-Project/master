<?php

class Controller {
  private $model;

  public function __construct() {
		$this->model = new Model();
  }

  public function parser() {

    $action = "welcome";
    
    if(isset($_GET['action'])){
      $action = $_GET['action'];
    }

    switch ($action) {
      case "welcome":
        require("View/welcome.php");
			  break;
      case "info":
		  	require("View/information.php");
			  break;
	    case "contact":
	    	$data = $this->model->getPhoneNumber();
	    	require("View/contact.php");
        break;
      case "login":
	    	require("View/login-form.php");
        break;
      case "logout":
        require("View/logout.php");
        break;
      default:
        require("View/error.php"); 
        break;
    }
  }

  private function getValidate($key, $value) {
    
  }
}

?>