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
        include("View/welcome.php");
				break;
				
      case "info":
				include("View/information.php");
				break;
				
			case "contact":
				$data = $this->model->getPhoneNumber();
				include("View/contact.php");
				break;

			case "login":
				$data = $this->model->getPhoneNumber();
				include("View/login.php");
				break;
           
      default:
        include("View/error.php"); 
        break;
    }

  }
}