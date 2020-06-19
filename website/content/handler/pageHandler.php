<?php

if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  header("Location: ./index.php?action=welcome");
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

  case "new_meet":
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/meetup/newmeet.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case "meet_page":
    require("./content/meetup/meetpage.php");
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
      require("./content/cms/overview-cms.php");
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

  case 'update_cms':
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
      require("./content/cms/update/update-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  default:
    require("./content/page/error.php");
    break;
}

?>
