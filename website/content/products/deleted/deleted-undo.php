<?php

include("./dbase/config.php");
include("./dbase/opendb.php");


if((!isset($_GET["id"])) || (empty($_GET["id"]))) {
  echo "er is een fout opgetreden";
  exit();
}

$id = $_GET["id"];
$active = "TRUE";
  
$query = "UPDATE shop_products ";
$query .= "SET ";
$query .= "active=? ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("si", $active, $id);
$result = $preparedquery->execute();

if(($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
}
$preparedquery->close();


include("./dbase/closedb.php");

header("Location: ./index.php?action=deletedlist_product&al=undo&suc=1");
 

?>