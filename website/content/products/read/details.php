<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

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
    <div class="details">
      <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
      <a class="btn btn-outline-warning" href="./index.php?action=update_product&id=<?php echo $row["id"]; ?>">wijzigen</a>
      <a class="btn btn-outline-secondary" href="./index.php?action=read_product">Naar overzicht</a>
      <?php } else { ?>
      <a class="btn btn-outline-secondary" href="./index.php?action=shop">Naar overzicht</a>
      <?php } ?>
      <img class="mx-auto" src="./content/products/uploaded_images/<?php echo $row["image"]?>" height="150px">
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
      echo "</div>";
    }
    echo "</table>";
  }
}

$preparedquery->close();

include("./dbase/closedb.php");

?>