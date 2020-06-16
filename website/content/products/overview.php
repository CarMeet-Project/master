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
// $query .= "LIMIT ?, ? ";

$preparedquery = $dbaselink->prepare($query);
// $preparedquery->bind_param("sii", $active, $currentPageContent, $maxProductsPerPage);
$preparedquery->bind_param("s", $active);
$result = $preparedquery->execute();

if(($preparedquery->errno) || ($result===FALSE)) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
  } else {
    
  ?>
<div class="container">
<div class="row">
<?php 
$counter = 0;
while($row = $result->fetch_assoc()) { ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./content/products/uploaded_images/<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["name"]; ?></h5>
              <p class="card-text"><?php echo $row["description"]; ?></p>
              <a href="./index.php?action=read_details_product&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Details</a>
            </div>
          </div>
        </div>
        <?php 
        $counter++;
        if($counter === 3) {
          echo "</div>";
          echo "<div class='row'>";
          $counter = 0;
        }
        ?>


<?php };
    switch ($counter) {
      case '1':
        echo "<div class=\"col\">";
        echo "</div>";
        echo "<div class=\"col\">";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        break;

      case '2':
        echo "<div class=\"col\">";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        break;
      
      default:
        echo "</div>";
        echo "</div>";
        break;
    }
  }
}

$preparedquery->close();


// for ($i=1; $i <= $totalPages; $i++) { 
//   echo "<button><a href=\"./index.php?action=shop&page=" . $i . "&f=" . $maxProductsPerPage . "\">" . $i . "</button>";
// }

include("./dbase/closedb.php");

?>