<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");

if(!isset($_POST["verifyNumber"])) {
    echo "er is een fout opgetreden";
    exit();
}

if(empty($_POST["verifyNumber"])) {
  echo "Vul alle waarden in";
  exit();
}


$id = $_POST["id"];
$verifyNumber_Post = $_POST["verifyNumber"];

$query = "SELECT verify_number ";
$query .= "FROM accounts ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
$result = $preparedquery->execute();

if(($result===FALSE) || ($preparedquery->errno)) {
  echo "er is een fout opgetereden";
  exit();
} else {
  $result = $preparedquery->get_result();

  if($result->num_rows === 0) {
    echo "geen rijen gevonden";
    exit();
  } else {


    while($row = $result->fetch_assoc()) {
      $verifyNumber_DB = $row["verify_number"];
    }
  }
}
$preparedquery->close();

if($verifyNumber_DB == $verifyNumber_Post) {
  $verified = "TRUE";
} else {
  $verified = "FALSE";
  header("Location: ../../../index.php?action=welcome&al=verify&suc=2");
  exit();
}

$query = "UPDATE accounts ";
$query .= "SET verified=? ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("si", $verified, $id);
$result = $preparedquery->execute();

if(($result===false) || ($preparedquery->errno)) {

  echo "Er is een fout opgetreden";
  $preparedquery->close();
  header("Location: ../../../index.php?action=welcome&al=verify&suc=2");
  exit();

} else {

  $preparedquery->close();
  header("Location: ../../../index.php?action=welcome&al=verify&suc=1");
  exit();

}


include("../../../dbase/closedb.php");

?>