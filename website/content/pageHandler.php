<?php

if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  $action = "welcome";
}

switch($action) {
  case "welcome":
    require("./content/page/welcome.php");
    break;

  case "info":
    require("./content/page/information.php");
    break;

  case "contact":
    require("./content/page/contact.php");
    break;

  case "aboutUs":
    require("./content/page/aboutUs.php");
    break;

  case "login":
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/logout/logout.php");
    } else {
      require("./content/login/login-form.php");
    }
    break;

  case "logout":
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/logout/logout.php");
    } else {
      require("./content/login/login-form.php");
    }
    break;

  case "agenda":
    require("./content/page/agenda.php");
    break;

  case 'add_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/add/add-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'read_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/read/read.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'update_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/update/update-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'delete_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/delete/delete-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deleted_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/deleted/deleted-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  default:
    require("./content/page/error.php");
    break;
}

?>