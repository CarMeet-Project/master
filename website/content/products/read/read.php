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
    
    echo "<table class=\"table\">";
    echo "<thead class=\"thead-dark\">";
    echo "  <tr>";
    echo "    <th scope=\"col\" class=\"checkboxtable\">Selecteer</th>";
    echo "    <th scope=\"col\">#id</th>";
    echo "    <th scope=\"col\">#name</th>";
    echo "    <th scope=\"col\">Details</th>";
    echo "    <th scope=\"col\">Wijzigen</th>";
    echo "    <th scope=\"col\">Deactiveren</th>";
    // echo "    <th scope=\"col\">Aantal producten per pagina: </th>";
    // echo "    <th scope=\"col\">";
    // echo "      <form action="" method=\"POST\">";
    // echo "        <input type=\"number\" name=\"productsPerPage\" value=\"" . $maxProductsPerPage . "\" step=\"5\" min=\"5\" required>";
    // echo "        <input type=\"submit\" value=\"filter\">";
    // echo "      </form>";
    // echo "    </th>";
    echo "  </tr>";
    echo "</thead>";
    echo "<tbody>";

    echo "<form action=\"./content/products/delete/delete-action.php\" method=\"POST\">";
    echo "<input type=\"hidden\" name=\"multiple_delete\" value=\"YES\">";
    
   while($row = $result->fetch_assoc()) {

          echo "<tr>";

          echo "  <th scope=\"row\" class=\"checkboxTable\">";
          echo "    <div class=\"form-check\">";
          echo "      <input class=\"form-check-input\" type=\"checkbox\" name=\"selected[]\" value=\"" . $row["id"] . "\">";
          echo "    </div>";
          echo "  </th>";

          echo "  <td>#" . $row["id"] . "</td>";

          echo "  <td>#" . $row["name"] . "</td>";

          echo "  <td>";
          echo "    <a href=\"./index.php?action=read_details_product&id=" . $row["id"] . "\">";
          echo "      <button type=\"button\" class=\"btn btn-outline-primary\">Details</button>";
          echo "    </a>";
          echo "  </td>";

          echo "  <td>";
          echo "    <a href=\"./index.php?action=update_product&id=" . $row["id"] . "\">";
          echo "      <button type=\"button\" class=\"btn btn-outline-Warning\">Wijzigen</button>";
          echo "    </a>";
          echo "  </td>";

          echo "  <td>";
          echo "    <a href=\"./index.php?action=delete_product&id=" . $row["id"] . "\">";
          echo "      <button type=\"button\" class=\"btn btn-outline-danger\">Deactiveren</button>";
          echo "    </a>";
          echo "  </td>";

          echo "</tr>";

      };
      echo "<tr>";
      echo "<th scope=\"row\">";
      echo "</th>";

      echo "<td>"; 
      echo "</td>";

      echo "<td>"; 
      echo "</td>";

      echo "<td>"; 
      echo "</td>";

      echo "<td>"; 
      echo "</td>";

      echo "<td>"; 
      echo "<input class=\"btn btn-outline-danger\" type=\"submit\" value=\"Geselecteerde Deactiveren\">";
      echo "</td>";
      
      while($row = $result->fetch_assoc()) {
        echo "  <tr>";
        echo "    <td>  <a href=\"./read/details.php?id=" . $row["id"] . "\">" . $row["name"] . "</a>" . "</td>";
        echo "    <td>  <a href=\"../update/updateform.php?id=" . $row["id"] . "\">" . " " . "<button>wijzigen</button>" . "</a>" . "</td>";
        echo "    <td>  <a href=\"../delete/delete.php?id=" . $row["id"] . "\">" . " " . "<button>verwijder</button>" . "</a>" . "<br>" . "</td>";
        echo "  </tr>";
      };
      echo "</table>";
    }
  }

  $preparedquery->close();

  for ($i=1; $i <= $totalPages; $i++) { 
    echo "<button><a href=\"./index.php?action=read&page=" . $i . "&f=" . $maxProductsPerPage . "\">" . $i . "</button>";
   }
  
  include("./dbase/closedb.php");

?>