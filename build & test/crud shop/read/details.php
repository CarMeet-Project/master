<?php

include("../dbase/config.php");
include("../dbase/opendb.php");

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
  $id = $_GET["id"];
} else {
  echo "er is een fout opgetreden";
  exit();
}

$query = "SELECT * FROM ";
$query .= "shop_products ";
$query .= "WHERE id = ? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
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

    echo "<table>";

    while($row = $result->fetch_assoc()) { ?>
      <img class="mx-auto" src="../uploaded_images/<?php echo $row["image"]?>" height="150px">
      <?php 
      echo "<tr>";
      echo "<td>" . $row["name"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["price"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["description"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["qty"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["size"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["sku"] . "</td>";
      echo "</tr>";

    }
    echo "</table>";
  }
}

$preparedquery->close();

include("../dbase/closedb.php");

?>