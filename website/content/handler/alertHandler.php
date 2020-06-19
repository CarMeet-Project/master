<?php

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


?>