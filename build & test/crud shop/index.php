<?php

require("nav.php");

if(isset($_GET["action"])) {
  $action = $_GET["action"];

  switch($action) {
    case 'add':
      require("./add/add-form.php");
      break;
    case 'read':
      require("./read/read.php");
      break;
    case 'update':
      require("./update/update-list.php");
      break;
    case 'delete':
      require("./delete/delete-list.php");
      break;
    case 'deleted':
      require("./deleted/deleted-list.php");
      break;
  }
}


?>



