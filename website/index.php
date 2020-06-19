<?php

require("./standard_content/header.php");

require("./content/pageHandler.php");

if($_GET["action"] !== "welcome") {
  require("./standard_content/footer.php");
}

?>



