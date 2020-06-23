<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

// GET ACTION_NAME
if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  header("Location: ./index.php?action=welcome");
}

// GET PAGE ID WITH ACTION_NAME
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
    echo "er zijn geen rijen gevonden";
    exit();
  } else {

    while($row = $result->fetch_assoc()) {
      $page_id = $row["id"];
      $page_name = $row["page_name"];
      $action_name = $row["action_name"];
      $customer_page = $row["customer_page"];
    }
  }
}
$preparedquery->close();

// GET DATA (page_title) WITH PAGE ID
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
    $page_title = "VoorBeeld (page_title):" . $action;
  } else {

    while($row = $result->fetch_assoc()) {
      $page_title = $row["page_title"];
    }
  }
}
$preparedquery->close();

// GET DATA (header_title) WITH PAGE ID
$query = "SELECT * ";
$query .= "FROM header_title ";
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
    $header_title = "VoorBeeld (header_title):" . $action;
  } else {

    while($row = $result->fetch_assoc()) {
      $header_title = $row["header_title"];
    }
  }
}
$preparedquery->close();

// GET DATA (header_content) WITH PAGE ID
$query = "SELECT * ";
$query .= "FROM header_content ";
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
    $header_content = "VoorBeeld (header_content):" . $action;
  } else {

    while($row = $result->fetch_assoc()) {
      $header_content = $row["header_content"];
    }
  }
}
$preparedquery->close();

// GET DATA (midpage_content) WITH PAGE ID
$query = "SELECT * ";
$query .= "FROM midpage_content ";
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
    $midpage_content = "VoorBeeld (midpage_content):" . $action;
  } else {

    while($row = $result->fetch_assoc()) {
      $midpage_content = $row["midpage_content"];
    }
  }
}
$preparedquery->close();

// GET DATA (footer_content) WITH PAGE ID
$query = "SELECT * ";
$query .= "FROM footer_content ";
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
    $footer_content = "VoorBeeld (footer_content):" . $action;
  } else {

    while($row = $result->fetch_assoc()) {
      $footer_content = $row["footer_content"];
    }
  }
}
$preparedquery->close();


// GET ALL DATA IN AS ARRAY
$DATA["page_id"] = $page_id;
$DATA["page_name"] = $page_name;
$DATA["action_name"] = $action_name;
$DATA["customer_page"] = $customer_page;
$DATA["page_title"] = $page_title;
$DATA["header_title"] = $header_title;
$DATA["header_content"] = $header_content;
$DATA["midpage_content"] = $midpage_content;
$DATA["footer_content"] = $footer_content;


include("./dbase/closedb.php");

?>