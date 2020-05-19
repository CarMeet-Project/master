<?php

class Controller {
    private $model;

    public function __construct() {
        echo "In contructor van de Controller class<br>";

        $this->model = new Model;
    }

    public function parser() {
        echo "In parser van de Controller class<br>";

        $action = "welcome";
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }

        if($action === "welcome") {
            include "view/welcome.php";
        } elseif ($action === "info") {
            include "view/information.php";
        } elseif ($action === "contact") {
            $data = $this->model->getPhoneNumber();
            include "view/contact.php";
        } else {
            include "view/error.php"; 
       }
    }
}