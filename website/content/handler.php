<?php

// ALERTS
if((isset($_GET["al"])) && (!empty($_GET["al"])) && (isset($_GET["suc"])) && (!empty($_GET["suc"]))) {
  require("./content/handler/alertHandler.php");
}



// PAGES
if(isset($_GET["action"])) {
//  require("./content/handler/dataHandler.php");
  require("./content/handler/pageHandler.php");
} else {
  header("Location: ./index.php?action=welcome");
}


?>
