<?php

include("../../../dbase/config.php");
include("../../../dbase/opendb.php");

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

    while($row = $result->fetch_assoc()) { ?>
      <form action="./update-action.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label id="name">Naam:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" placeholder="Naam" required><br>

        <label id="price">Prijs:</label><br>
        <input type="text" id="price" name="price" value="<?php echo $row['price'] ?>" placeholder="Prijs" required><br>

        <img class="mx-auto" src="../uploaded_images/<?php echo $row["image"]?>" height="50px"><br>

        <label id="file">Afbeelding:</label><br>
        <input type="file" id="file" name="file" placeholder="Afbeelding"><br>

        <label id="description">Omschrijving:</label><br>
        <input type="text" id="description" name="description" value="<?php echo $row['description'] ?>" placeholder="Omschrijving" required><br>

        <label id="qty">Voorraad:</label><br>
        <input type="number" id="qty" name="qty" value="<?php echo $row['qty'] ?>" placeholder="Voorraad" value="1" required><br>

        <label id="size">Maat:</label><br>
        <input type="text" id="size" name="size" value="<?php echo $row['size'] ?>" placeholder="Maat" required><br>

        <label id="sku">SKU:</label><br>
        <input type="text" id="sku" name="sku" value="<?php echo $row['sku'] ?>" placeholder="SKU" required><br>

        <?php
        if($row['active'] === "TRUE") { ?>
          <label>Actief:</label><br>
          <input type="radio" id="true" name="active" value="TRUE" checked required>
          <label id="true">JA</label><br>
  
          <input type="radio" id="false" name="active" value="FALSE" required>
          <label id="false">NEE</label><br>
  <?php } else { ?>
          <label>Actief:</label><br>
          <input type="radio" id="true" name="active" value="TRUE" required>
          <label id="true">JA</label><br>
  
          <input type="radio" id="false" name="active" value="FALSE" checked required>
          <label id="false">NEE</label><br>
  <?php } ?>

        <input type="submit" value="Update"><br>      
      </form>
      <?php 
    }
  }
}

$preparedquery->close();

include("../../../dbase/closedb.php");

?>