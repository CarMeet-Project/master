<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./assets/style.css"/>
  	<title>MVC</title>
</head>
<body>

<?php
session_start();
require("menu.php");

if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
  if((isset($_GET["cms"])) && (!empty($_GET["cms"])) && ($_GET["cms"] == "1")) {
    echo "<div class=\"floatR\"><a href=\"./index.php?action=cms\">";
    echo "  <button type=\"button\" class=\"btn btn-outline-secondary\">Naar overzicht</button>";
    echo "</a></div>";
  }
}
?>
