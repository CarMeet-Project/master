<?php

  include("./dbase/config.php");
  include("./dbase/opendb.php");

  $active = "TRUE";

  // count rows
  $query = "SELECT * FROM shop_products ";
  $query .= "WHERE active=? ";

  $preparedquery = $dbaselink->prepare($query);
  $preparedquery->bind_param("s", $active);
  $preparedquery->execute();

  if($preparedquery->errno) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();

    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
    } else {
      $totalRows = $result->num_rows;
    }
  };
  $preparedquery->close();

  // display rest per ?
  if(isset($_POST["productsPerPage"])) {
    $maxProductsPerPage = $_POST["productsPerPage"];
  } else {

    if(isset($_GET["f"])) {
      $maxProductsPerPage = $_GET["f"];
    } else {
      $maxProductsPerPage = 10;
    }
  }

  $temptotalPages = $totalRows/$maxProductsPerPage;
  $totalPages = ceil($temptotalPages);

  if(!isset($_GET["page"])) {
    $currentPage = 1;
  } else {
    $currentPage = $_GET["page"];
  }

  $currentPageContent = ($currentPage-1)*$maxProductsPerPage;

  $query = "SELECT * ";
  $query .= "FROM shop_products ";
  $query .= "WHERE active=? ";
  $query .= "LIMIT ?, ? ";


  $preparedquery = $dbaselink->prepare($query);
  $preparedquery->bind_param("sii", $active, $currentPageContent, $maxProductsPerPage);
  $result = $preparedquery->execute();

  if(($preparedquery->errno) || ($result===FALSE)) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();
    
    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
    } else {
      
      echo "<table>";
      echo "  <tr>";
      echo "    <th>Naam</th>";
      echo "    <th>Wijzigen</th>";
      echo "    <th>Aantal Per Pagina:</th>";
      echo "    <th>";
                ?>
                <form action="" method="POST">
                  <input type="number" name="productsPerPage" value="<?php echo $maxProductsPerPage; ?>" step="5" min="5">
                  <input type="submit" value="filter">
                </form>
                <?php
      echo "    </th>";
      echo "  </tr>";
      
      while($row = $result->fetch_assoc()) {
        echo "  <tr>";
        echo "    <td>" . $row["name"] . "</td>";
        echo "    <td>  <a href=\"./content/products/update/update-form.php?id=" . $row["id"] . "\">" . " " . "<button>wijzigen</button>" . "</a>" . "</td>";
        echo "  </tr>";
      };
      echo "</table>";
    }
  }

  $preparedquery->close();

  for ($i=1; $i <= $totalPages; $i++) { 
    echo "<button><a href=\"./index.php?action=update&page=" . $i . "&f=" . $maxProductsPerPage . "\">" . $i . "</button>";
   }
  
  include("./dbase/closedb.php");

?>