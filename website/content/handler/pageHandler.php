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

<<<<<<< HEAD

  // GENERAL ACCOUNT-ACTIONS
  case "logout":
    if (((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) || ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == "TRUE"))) {
      require("./content/general/logout/logout.php");
    } else {
      require("./content/admin/login/login-form.php");
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
      require("./content/general/logout/logout.php");
    } else {
      require("./content/admin/login/login-form.php");
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
      require("./content/general/logout/logout.php");

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
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
      require("./content/meetup/newmeet.php");
=======
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
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
    } else {
      require("./content/login/login-form.php");
    }
    break;

<<<<<<< HEAD
  case "new_meet_request":
    if ((isset($_SESSION['verified-loggedin'])) && ($_SESSION['verified-loggedin'] == "TRUE")) {
      require("./content/meetup/newmeet-request.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case "meet_page":
    require("./content/meetup/meetpage.php");
=======
  case "agenda":
    require("./content/page/agenda.php");
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
    break;

  case 'add_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/add/add-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'read_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/read/read.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'read_details_product':
<<<<<<< HEAD
    // if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    // if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/read/details.php");
    // } else {
    //   require("./content/page/error.php");
    // }
    break;

  case 'updatelist_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/update/update-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'update_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/update/update-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletelist_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/delete/delete-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'delete_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/delete/delete-action.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deletedlist_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/deleted/deleted-list.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'deleted_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/deleted/deleted-undo.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'archive_deleted_product':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/products/deleted/archive-deleted.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'cms':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/cms/overview-cms.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'page_cms':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/cms/page.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'details_cms':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/cms/details.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  case 'update_cms':
<<<<<<< HEAD
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) {
=======
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
      require("./content/cms/update/update-form.php");
    } else {
      require("./content/page/error.php");
    }
    break;

  // PAGINAS
  case 'page_1':
    require("./content/page/page1.php");
    break;

  case 'page_2':
    require("./content/page/page2.php");
    break;

  case 'page_3':
    require("./content/page/page3.php");
    break;

  case 'page_4':
    require("./content/page/page4.php");
    break;

  case 'page_5':
    require("./content/page/page5.php");
    break;

  case 'page_6':
    require("./content/page/page6.php");
    break;

  case 'page_7':
    require("./content/page/page7.php");
    break;

  case 'page_8':
    require("./content/page/page8.php");
    break;

  case 'page_9':
    require("./content/page/page9.php");
    break;


  default:
    require("./content/page/error.php");
    break;
}

?>
