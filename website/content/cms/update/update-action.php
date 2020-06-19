<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");


if((!isset($_POST["page_id"])) ||
   (!isset($_POST["page_name"])) ||
   (!isset($_POST["action_name"])) ||
   (!isset($_POST["customer_page"])) ||
   (!isset($_POST["page_title"])) ||
   (!isset($_POST["header_title"])) ||
   (!isset($_POST["header_content"])) ||
   (!isset($_POST["midpage_content"])) ||
   (!isset($_POST["footer_content"]))) {
    echo "er is een fout opgetreden";
    exit();
} else {

  if((empty($_POST["page_id"])) ||
    (empty($_POST["page_name"])) ||
    (empty($_POST["action_name"])) ||
    (empty($_POST["cusstomer_page"])) ||
    (empty($_POST["page_title"])) ||
    (empty($_POST["header_title"])) ||
    (empty($_POST["header_content"])) ||
    (empty($_POST["midpage_content"])) ||
    (empty($_POST["footer_content"]))) {
      echo "er is een fout opgetreden";
      exit();
  }
}

$page_id = $_POST["page_id"];
$page_name = $_POST["page_name"];
$action_name = $_POST["action_name"];
$customer_page = $_POST["customer_page"];
$page_title = $_POST["page_title"];
$header_title = $_POST["header_title"];
$header_content = $_POST["header_content"];
$midpage_content = $_POST["midpage_content"];
$footer_content = $_POST["footer_content"];

  
$query = "UPDATE page ";
$query .= "SET ";
$query .= "page_name=?, ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("si", $page_name, $id);
$result = $preparedquery->execute();

if(($result === false) || ($preparedquery->errno)) {
 echo "Er is een fout opgetreden";
 $updateSuccesfull = FALSE;
} else {
 $updateSuccesfull = TRUE;
}
$preparedquery->close();

$query = "UPDATE page_title ";
$query .= "SET ";
$query .= "page_title=?, ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("si", $page_title, $id);
$result = $preparedquery->execute();

if(($result === false) || ($preparedquery->errno)) {
 echo "Er is een fout opgetreden";
 $updateSuccesfull = FALSE;
} else {
 $updateSuccesfull = TRUE;
}
$preparedquery->close();

include("../../../dbase/closedb.php");

$returnPage = "../../../index.php?action=cms&id=" . $id . "&al=update&suc=" . ($updateSuccesfull ? "1" : "2");

header("Location: " . $returnPage);

?>