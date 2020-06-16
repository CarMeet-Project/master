<?php


// ALERTS
if((isset($_GET["al"])) && (!empty($_GET["al"])) && (isset($_GET["suc"])) && (!empty($_GET["suc"]))) {

  $alert = $_GET["al"];
  if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
    $id = $_GET["id"];
  }

  switch ($_GET["suc"]) {
    case "2":
      $succesFull = "FALSE";
      break;
    
    case "1":
      $succesFull = "TRUE";
      break;
    
    default:
      $alert = "";
      break;
  }

  switch ($alert) {
    case "create":
      require("./content/alerts/create.php");
      break;
    
    case "update":
      require("./content/alerts/update.php");
      break;
    
    case "delete":
      require("./content/alerts/delete.php");
      break;

    case "deleted":
      require("./content/alerts/deleted.php");
      break;

    case "multidelete":
      require("./content/alerts/multiple_delete.php");
      break;
    
    case "undo":
      require("./content/alerts/undo.php");
      break;

    case "archive":
      require("./content/alerts/archive.php");
      break;
    
    case "mail":
      require("./content/alerts/mail.php");
      break;

    case "logout":
      require("./content/alerts/logout.php");
      break;

    case "login":
      require("./content/alerts/login.php");
      break;
    
    default:
      require("./content/alerts/error.php");
      break;
  }
}


// PAGES

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

  case "shop":
    require("./content/products/overview.php");
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

  case 'read_details_product':
    // if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/read/details.php");
    // } else {
    //   require("./content/page/error.php");
    // }
    break;

  case 'updatelist_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/update/update-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;
  
  case 'update_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/update/update-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletelist_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/delete/delete-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'delete_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/delete/delete-action.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletedlist_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/deleted/deleted-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deleted_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/deleted/deleted-undo.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'archive_deleted_product':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/products/deleted/archive-deleted.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'cms':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/cms/index.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'page_cms':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/cms/page.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'details_cms':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/cms/details.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  default:
    require("./content/page/error.php");
    break;
}

?>