<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
  $page_id = $_GET["id"];
} else {
  echo "er is een fout opgetreden";
  exit();
}


$query = "SELECT ";
$query .= "action_name ";
$query .= "FROM page ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $page_id);
$result = $preparedquery->execute();

if(($preparedquery->errno) || ($result===FALSE)) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
    exit();
  } else {
    
   while($row = $result->fetch_assoc()) {

    $action_name = $row["action_name"];

    };
  }
}

$preparedquery->close();


$rerdirect = "./index.php?action=" . $action_name;
$header = "Location: " . $rerdirect . "&cms=1";

header($header);

include("./dbase/closedb.php");

?>