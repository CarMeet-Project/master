<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
  $id = $_GET["id"];
} else {
  echo "er is een fout opgetreden";
  exit();
}


$query = "SELECT ";
$query .= "file_name, ";
$query .= "get_name, ";
$query .= "get_action_name ";
$query .= "FROM cms ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
$result = $preparedquery->execute();

if(($preparedquery->errno) || ($result===FALSE)) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
  } else {
    
   while($row = $result->fetch_assoc()) {

    $file_name = $row["file_name"];
    $get_name = $row["get_name"];
    $action = $row["get_action_name"];

    };
  
  $rerdirect = "./" . $file_name . "?" . $get_name . "=" . $action;
  }
}

$preparedquery->close();

$header = "Location: " . $rerdirect . "&cms=1";
header($header);

include("./dbase/closedb.php");

?>