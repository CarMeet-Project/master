<?php

if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  header("Location: ./index.php?action=welcome");
}

// KEEP NAV BAR IN ORDER PLEASE
switch($action) {

  // STANDARD
  case "welcome":
    require("./content/page/welcome.php");
    break;

  case "agenda":
    require("./content/page/agenda.php");
    break;

  case "info":
    require("./content/page/information.php");
    break;

  case "aboutUs":
    require("./content/page/aboutUs.php");
    break;

  case "contact":
    require("./content/page/contact.php");
    break;

  case "shop":
    require("./content/products/overview.php");
    break;


  // GENERAL ACCOUNT-ACTIONS
  case "logout":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/logout/logout.php");
    } else {
      require("./content/login/login-form.php");
    }
    break;

  case "my_account":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/general/account/my-account.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  // ADMIN (LOGIN/LOGOUT) & ADMIN-ACTIONS
  case "login_admin":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/logout/logout.php");
    } else {
      require("./content/login/login-form.php");
    }
    break;

  case "create_admin":
    if((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
      require("./content/admin/create/create-form.php");
      }
    } else {
      require("./content/page/error.php");
    }
    break;

  case "verify_admin_account":
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/admin/account/verify-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  // USER & USER-ACTIONS
  case "login":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/logout/logout.php");
    } else {
      require("./content/user/login/login-form.php");
    }
    break;

  case "create_user":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/general/logout/logout.php");
    } else {
      require("./content/user/create/create-form.php");
    }
    break;

  case "verify_account":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/user/account/verify-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  // AGENDA & MEETS
  case "new_meet":
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/meetup/newmeet.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case "meet_page":
    require("./content/meetup/meetpage.php");
    break;


  // PRODUCT & PRODUCT-ACTIONS
  case 'add_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/add/add-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'read_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/read/read.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'read_details_product':
    // if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/read/details.php");
    // } else {
    //   require("./content/page/error.php");
    // }
    break;

  case 'updatelist_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/update/update-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'update_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/update/update-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletelist_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/delete/delete-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'delete_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/delete/delete-action.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletedlist_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/deleted/deleted-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deleted_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/deleted/deleted-undo.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'archive_deleted_product':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/products/deleted/archive-deleted.php");
    } else {
      require("./content/page/error.php");
    }
    break;


  // CMS & CMS-ACTIONS
  case 'cms':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/cms/overview-cms.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'page_cms':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/cms/page.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'details_cms':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
      require("./content/cms/details.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'update_cms':
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
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
