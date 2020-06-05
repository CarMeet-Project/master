<form action="./content/products/add/add-action.php" method="POST" autocomplete="off" enctype="multipart/form-data">
  
  <label id="name">Naam:</label><br>
  <input type="text" id="name" name="name" placeholder="Naam" required><br>

  <label id="price">Prijs:</label><br>
  <input type="text" id="price" name="price" placeholder="Prijs" required><br>

  <label id="file">Afbeelding:</label><br>
  <input type="file" id="file" name="file" placeholder="Afbeelding" required><br>

  <label id="description">Omschrijving:</label><br>
  <input type="text" id="description" name="description" placeholder="Omschrijving" required><br>
  
  <label id="qty">Voorraad:</label><br>
  <input type="number" id="qty" name="qty" placeholder="Voorraad" value="1" required><br>

  <label id="size">Maat:</label><br>
  <input type="text" id="size" name="size" placeholder="Maat" required><br>

  <label id="sku">SKU:</label><br>
  <input type="text" id="sku" name="sku" placeholder="SKU" required><br>

  <input type="submit" value="Add"><br>
</form>