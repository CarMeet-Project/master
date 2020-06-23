<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");

if((!isset($_POST["username"])) || (!isset($_POST["email"])) || (!isset($_POST["password"]))) {
    echo "er is een fout opgetreden";
    exit();
}

if((empty($_POST["username"])) || (empty($_POST["email"])) || (empty($_POST["password"]))) {
  echo "Vul alle waarden in";
  exit();
}

$verifyNumber = "";

for($i = 0; $i < 4; $i++) {
  $number = rand(0,9);
  $verifyNumber = $verifyNumber . $number;
}


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$verfied = "FALSE";

$query = "SELECT * ";
$query .= "FROM users ";
$query .= "WHERE email=? ";
$query .= "OR username=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("ss", $email, $username);
$result = $preparedquery->execute();

if(($result===FALSE) || ($preparedquery->errno)) {
  echo "er is een fout opgetereden";
  exit();
} else {
  $result = $preparedquery->get_result();

  if($result->num_rows !== 0) {
    header("Location: ../../../index.php?action=create_user&al=alrdy_exist&suc=2");
    exit();
  }
}
$preparedquery->close();


$query = "INSERT INTO users ";
$query .= "(email, ";
$query .= "username, ";
$query .= "password, ";
$query .= "verify_number, ";
$query .= "verified) ";
$query .= "VALUES (?, ?, ?, ?, ?) ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("sssss", $email, $username, $password, $verifyNumber, $verfied);
$result = $preparedquery->execute();

if(($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
  $succied = FALSE;
} else {
  $succied = TRUE;
}
$preparedquery->close();

if($succied) {

  $CarMeet_mail = "carmeetproject2020@gmail.com";
  $customer_name = $username;
  $customer_mail = $email;
  $customer_headers = "From: CarMeet WebSite " . $CarMeet_mail;
  
  $sendMail = TRUE;
  $contactForm = FALSE;
  
  $subject = $username;
  $message = $verifyNumber;
  $customer_subject = "Je verificatiecode voor je account: " . $subject;
  $customer_body = "Jou verificatie code is: " . $message . " ";
  $customer_body .= "Voer deze code in bij \"account\" onder het kopje \"verificatie\"";
  $customer_body .= " <br><br>Met Vriendelijke Groet,<br>Team CarMeet";
  
  $CarMeet_subject = "Nieuw Account van " . $customer_name;
  $CarMeet_body = "Mailadres klant: " . $customer_mail;
  $CarMeet_headers = "From: Backend-program " . $CarMeet_mail;
  require("../../mail/sendEmail.php");
}

header("Location: ../../../index.php?action=welcome&al=create&suc=1");

include("../../../dbase/closedb.php");

?>