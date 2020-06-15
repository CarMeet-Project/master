<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

$query = "SELECT * ";
$query .= "FROM cms ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
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

      $page_id = $row["page_id"];
      $content_category = $row["content_category"];


    }

    $preparedquery->close();

    $query = "SELECT * ";
    $query .= "FROM page ";
    $query .= "WHERE id=? ";
    $query .= "LIMIT 1 ";


    $preparedquery = $dbaselink->prepare($query);
    $preparedquery->bind_param("i", $page_id);
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
        
          $page_name = $row["name"];
        
        }
      }
    }
    $preparedquery->close();

    $query = "SELECT content ";
    $query .= "FROM content ";
    $query .= "WHERE page_id=? ";
    $query .= "AND content_id=? ";
    $query .= "LIMIT 1 ";


    $preparedquery = $dbaselink->prepare($query);
    $preparedquery->bind_param("ii", $page_id, $content_category);
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

          $content = $row["content"];
          
        }
      }
    }
    $preparedquery->close();

  }
}

echo "<br><br><br>";
echo $page_id;
echo "<br><br><br>";
echo $content_category;
echo "<br><br><br>";
echo $page_name;
echo "<br><br><br>";
echo $content;
echo "<br><br><br>";




include("./dbase/closedb.php");

?>