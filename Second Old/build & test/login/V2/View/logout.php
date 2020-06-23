<?php
require("View/standard_content/header.php");

session_unset();
session_destroy();

if(isset($_SESSION['admin-loggedin'])) {
  echo "mislukt";
} else {
  header("Location: ./index.php");
}
require("View/standard_content/footer.php");
?>