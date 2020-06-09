<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");


if((!isset($_POST["id"])) ||
   (!isset($_POST["name"])) ||
   (!isset($_POST["price"])) ||
   (!isset($_POST["description"])) ||
   (!isset($_POST["qty"])) ||
   (!isset($_POST["size"])) ||
   (!isset($_POST["sku"])) ||
   (!isset($_POST["active"]))) {
    echo "er is een fout opgetreden";
    exit();
} else {

  if((empty($_POST["id"])) ||
     (empty($_POST["name"])) ||
     (empty($_POST["price"])) ||
     (empty($_POST["description"])) ||
     (empty($_POST["qty"])) ||
     (empty($_POST["size"])) ||
     (empty($_POST["sku"])) ||
     (empty($_POST["active"]))) {
      echo "er is een fout opgetreden";
      exit();
  }
}

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$qty = $_POST["qty"];
$size = $_POST["size"];
$sku = $_POST["sku"];
$active = $_POST["active"];

if((!isset($_POST["image"])) && (!empty($_POST["image"]))) {
  $image_name = $_FILES['file']['name'];
  $upload_file_to = "../uploaded_images/";
  $target_file = $upload_file_to . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
    

     // Convert to base64 
     $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
     $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

     // Insert record
     $query = "UPDATE shop_products ";
     $query .= "SET ";
     $query .= "name=?, ";
     $query .= "price=?, ";
     $query .= "image=?, ";
     $query .= "description=?, ";
     $query .= "qty=?, ";
     $query .= "size=?, ";
     $query .= "sku=?, ";
     $query .= "active=? ";
     $query .= "WHERE id=? ";

     $preparedquery = $dbaselink->prepare($query);
     $preparedquery->bind_param("ssssisssi", $name, $price, $image_name, $description, $qty, $size, $sku, $active, $id);
     $result = $preparedquery->execute();

     if(($result===false) || ($preparedquery->errno)) {
       echo "Er is een fout opgetreden";
     } else {

      // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'], $upload_file_to . $image_name);
     }

     $preparedquery->close();
  }
} else {
  
     $query = "UPDATE shop_products ";
     $query .= "SET ";
     $query .= "name=?, ";
     $query .= "price=?, ";
     $query .= "description=?, ";
     $query .= "qty=?, ";
     $query .= "size=?, ";
     $query .= "sku=?, ";
     $query .= "active=? ";
     $query .= "WHERE id=? ";

     $preparedquery = $dbaselink->prepare($query);
     $preparedquery->bind_param("sssisssi", $name, $price, $description, $qty, $size, $sku, $active, $id);
     $result = $preparedquery->execute();

     if(($result === false) || ($preparedquery->errno)) {
      echo "Er is een fout opgetreden";
      $updateSuccesfull = FALSE;
     } else {
      $updateSuccesfull = TRUE;
     }

     $preparedquery->close();
}

include("../../../dbase/closedb.php");

$returnPage = "../../../index.php?action=read_product&id=" . $id . "&al=update&suc=" . ($updateSuccesfull ? "1" : "0");

header("Location: " . $returnPage);

?>