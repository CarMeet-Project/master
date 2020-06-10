<?php

  include("./dbase/config.php");
  include("./dbase/opendb.php");

  $active = "FALSE";

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
      exit();
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
  // $query .= "LIMIT ?, ? ";


  $preparedquery = $dbaselink->prepare($query);
  $preparedquery->bind_param("s", $active);
  // $preparedquery->bind_param("sii", $active, $currentPageContent, $maxProductsPerPage);
  $result = $preparedquery->execute();

  if(($preparedquery->errno) || ($result===FALSE)) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();
    
    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
      exit();
    } else {
      
      echo "<table class=\"table\">";
      echo "<thead class=\"thead-dark\">";
      echo "  <tr>";
      echo "    <th scope=\"col\">#id</th>";
      echo "    <th scope=\"col\">#name</th>";
      echo "    <th scope=\"col\">Details</th>";
      echo "    <th scope=\"col\">Activeren</th>";
      echo "    <th scope=\"col\">Peramnent Verwijderen";
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
  
     while($row = $result->fetch_assoc()) {
  
      echo "<tr>";
  
      echo "  <th scope=\"row\">#" . $row["id"] . "</th>";
  
      echo "  <td>#" . $row["name"] . "</td>";
  
      echo "  <td>";
      echo "    <a href=\"./index.php?action=read_details_product&id=" . $row["id"] . ">";
      echo "      <button type=\"button\" class=\"btn btn-outline-primary\">Details</button>";
      echo "    </a>";
      echo "  </td>";
  
      echo "  <td>";
      echo "    <a href=\"./index.php?action=deleted_product&id=" . $row["id"] . ">";
      echo "      <button type=\"button\" class=\"btn btn-outline-success\">Activeren</button>";
      echo "    </a>";
      echo "  </td>";

      echo "  <td>";
      echo "    <a href=\"./index.php?action=archive_deleted_product&id=" . $row["id"] . ">";
      echo "      <button type=\"button\" class=\"btn btn-outline-danger\">Permanenet Verwijderen</button>";
      echo "    </a>";
      echo "  </td>";
  
      echo "</tr>";
  
      };
      echo "</tbody>";
      echo "</table>";
    }
  }

  $preparedquery->close();

  // for ($i=1; $i <= $totalPages; $i++) {
  //   echo "<button><a href=\"./index.php?action=deleted&page=" . $i . "&f=" . $maxProductsPerPage . "\">" . $i . "</button>";
  //  }
  
  include("./dbase/closedb.php");

?>