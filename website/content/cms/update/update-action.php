<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");


if((!isset($_POST["id"])) ||
   (!isset($_POST["name"])) ||
   (!isset($_POST["file_name"])) ||
   (!isset($_POST["get_name"])) ||
   (!isset($_POST["get_action_name"])) ||
   (!isset($_POST["page_title"])) ||
   (!isset($_POST["header_title"])) ||
   (!isset($_POST["header_content"])) ||
   (!isset($_POST["midpage_content"])) ||
   (!isset($_POST["footer_content"]))) {
    echo "er is een fout opgetreden";
    exit();
} else {

  if((empty($_POST["id"])) ||
    (empty($_POST["name"])) ||
    (empty($_POST["file_name"])) ||
    (empty($_POST["get_name"])) ||
    (empty($_POST["get_action_name"])) ||
    (empty($_POST["page_title"])) ||
    (empty($_POST["header_title"])) ||
    (empty($_POST["header_content"])) ||
    (empty($_POST["midpage_content"])) ||
    (empty($_POST["footer_content"]))) {
      echo "er is een fout opgetreden";
      exit();
  }
}

$id = $_POST["id"];
$name = $_POST["name"];
$file_name = $_POST["file_name"];
$get_name = $_POST["get_name"];
$get_action_name = $_POST["get_action_name"];
$page_title = $_POST["page_title"];
$header_title = $_POST["header_title"];
$header_content = $_POST["header_content"];
$midpage_content = $_POST["midpage_content"];
$footer_content = $_POST["footer_content"];

  
$query = "UPDATE cms ";
$query .= "SET ";
$query .= "name=?, ";
$query .= "file_name=?, ";
$query .= "get_name=?, ";
$query .= "get_action_name=?, ";
$query .= "page_title=?, ";
$query .= "header_title=?, ";
$query .= "header_content=?, ";
$query .= "midpage_content=?, ";
$query .= "footer_content=? ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("sssssssssi", $name, $file_name, $get_name, $get_action_name, $page_title, $header_title, $header_content, $midpage_content, $footer_content);
$result = $preparedquery->execute();

if(($result === false) || ($preparedquery->errno)) {
 echo "Er is een fout opgetreden";
 $updateSuccesfull = FALSE;
} else {
 $updateSuccesfull = TRUE;
}

$preparedquery->close();

include("../../../dbase/closedb.php");

$returnPage = "../../../index.php?action=read_product&id=" . $id . "&al=update&suc=" . ($updateSuccesfull ? "1" : "2");

header("Location: " . $returnPage);

?>