<?php


if(!isset($_POST["multiple_delete"])) {
  
  if((!isset($_GET["id"])) || (empty($_GET["id"]))) {
    echo "er is een fout opgetreden";
    exit();
  }

  include("./dbase/config.php");
  include("./dbase/opendb.php");
  
  $id = $_GET["id"];
  $active = "FALSE";

  $query = "UPDATE shop_products ";
  $query .= "SET ";
  $query .= "active=? ";
  $query .= "WHERE id=? ";
  $query .= "LIMIT 1";

  $preparedquery = $dbaselink->prepare($query);
  $preparedquery->bind_param("si", $active, $id);
  $result = $preparedquery->execute();
  
  if(($result===false) || ($preparedquery->errno)) {
    echo "Er is een fout opgetreden";
    header("Location: ./index.php?action=deletelist_product&al=delete&suc=2");
  }
  $preparedquery->close();
  
  include("./dbase/closedb.php");
  
  header("Location: ./index.php?action=deletelist_product&al=delete&suc=1");

} else {

  if((empty($_POST["selected"])) || ($_POST["multiple_delete"] !== "YES")) {
    echo "er is een fout opgetreden";
    exit();
  }

  include("../../../dbase/config.php");
  include("../../../dbase/opendb.php");

  $selected = $_POST["selected"];
  $countSelected = count($selected);

  $active = "FALSE";

  for($i = 0; $i < $countSelected; $i++) {
    $query = "UPDATE shop_products ";
    $query .= "SET ";
    $query .= "active=? ";
    $query .= "WHERE id=? ";

    $preparedquery = $dbaselink->prepare($query);
    $preparedquery->bind_param("si", $active, $selected[$i]);
    $result = $preparedquery->execute();
    
    if(($result===false) || ($preparedquery->errno)) {
      echo "Er is een fout opgetreden";
    }    
  }
  
  header("Location: ../../../index.php?action=deletelist_product&al=multidelete&suc=2");

  $preparedquery->close();

  include("../../../dbase/closedb.php");

  header("Location: ../../../index.php?action=deletelist_product&al=multidelete&suc=1");

}



?>