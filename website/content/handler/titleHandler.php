<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  header("Location: ./index.php?action=welcome");
}

// GET PAGE ID
$query = "SELECT * ";
$query .= "FROM page ";
$query .= "WHERE action_name=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("s", $action);
$result = $preparedquery->execute();

if(($result === FALSE) || ($preparedquery->errno)) {
  echo "er is een fout opgetreden";
  exit();
} else {

  $result = $preparedquery->get_result();

  if($result->num_rows === 0) {
    echo "<title>" . $action . "</title>";
  } else {

    while ($row = $result->fetch_assoc()) {
      $page_id = $row["id"];
    }
  }
}
$preparedquery->close();

// GET DATA WITH PAGE ID
$query = "SELECT * ";
$query .= "FROM page_title ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $page_id);
$result = $preparedquery->execute();

if(($result === FALSE) || ($preparedquery->errno)) {
  echo "er is een fout opgetreden";
  exit();
} else {

  $result = $preparedquery->get_result();

  if($result->num_rows === 0) {
    echo "<title>" . $action . "</title>";
  } else {
  
    while ($row = $result->fetch_assoc()) {
      $page_title = $row["page_title"];
      echo "<title>" . $page_title . "</title>";
    }
  }
}
$preparedquery->close();

include("./dbase/closedb.php");

?>