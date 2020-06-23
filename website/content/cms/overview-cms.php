<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

$customer_page = "TRUE";

// count rows
$query = "SELECT * ";
$query .= "FROM page ";
$query .= "WHERE customer_page=? ";


$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("s", $customer_page);
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
$query .= "FROM page ";
$query .= "WHERE customer_page=? ";
// $query .= "LIMIT ?, ? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("s", $customer_page);
// $preparedquery->bind_param("ii", $currentPageContent, $maxProductsPerPage);
$result = $preparedquery->execute();

if(($preparedquery->errno) || ($result===FALSE)) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
  } else {
    
    echo "<table class=\"table\">";
    echo "<thead class=\"thead-dark\">";
    echo "  <tr>";
    echo "    <th scope=\"col\">#name</th>";
    echo "    <th scope=\"col\">Action Name</th>";
    echo "    <th scope=\"col\">Zie Pagina</th>";
    echo "    <th scope=\"col\">Details</th>";
    echo "    <th scope=\"col\">Wijzigen</th>";
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
      
      echo "  <th scope=\"row\">#" . $row["page_name"] . "</th>";

      echo "  <td>" . $row["action_name"] . "</td>";


      echo "  <td>";
      echo "    <a href=\"./index.php?action=page_cms&id=" . $row["id"] . "\">";
      echo "      <button type=\"button\" class=\"btn btn-outline-success\">Zie Pagina</button>";
      echo "    </a>";
      echo "  </td>";

      echo "  <td>";
      echo "    <a href=\"./index.php?action=details_cms&id=" . $row["id"] . "\">";
      echo "      <button type=\"button\" class=\"btn btn-outline-primary\">Details</button>";
      echo "    </a>";
      echo "  </td>";

      echo "  <td>";
      echo "    <a href=\"./index.php?action=update_cms&id=" . $row["id"] . "\">";
      echo "      <button type=\"button\" class=\"btn btn-outline-warning\">Wijzigen</button>";
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
//   echo "<button><a href=\"./index.php?action=read_product&page=" . $i . "&f=" . $maxProductsPerPage . "\">" . $i . "</button>";
//  }


include("./dbase/closedb.php");

?>