<?php

class Controller {
  private $model;

  public function __construct() {
    echo "In contructor van de Controller class<br>";

		$this->model = new Model();
  }

  public function parser() {
    echo "In parser van de Controller class<br>";

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
	    	require("View/login.php");
        break;
      case "logout":
        require("View/logout.php");
        break;
      default:
        require("View/error.php"); 
        break;
    }

  }
}

?>