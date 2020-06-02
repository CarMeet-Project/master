<?php

if((isset($_POST["username"])) && (isset($_POST["password"]))) {
  if((empty($_POST["username"])) || (empty($_POST["password"]))) {
    $result = "Vul elk veld in";
    return $result;
    header("Location: ../index.php");
    exit();
  }
} else {
  header("Location: ../index.php");
  exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

require("../Controller/Account.php");
require("../Controller/Controller.php");

$account = new Account();
$account->username = $username;
$account->password = $password;
header("Location: ../index.php");



?>