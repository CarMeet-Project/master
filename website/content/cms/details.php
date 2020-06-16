<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
  $id = $_GET["id"];
} else {
  echo "er is een fout opgetreden";
  exit();
}

$query = "SELECT * ";
$query .= "FROM cms ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

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
    <div class="floatR">
      <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
      
      <a class="btn btn-outline-warning" href="./index.php?action=update_cms&id=<?php echo $row["id"]; ?>">Wijzigen</a>
      <a class="btn btn-outline-secondary" href="./index.php?action=cms">Naar overzicht</a>
      <?php } ?>
      <br>

      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" placeholder="<?php echo $row["name"]; ?><?php echo $row["name"]; ?>" value="<?php echo $row["name"]; ?><?php echo $row["name"]; ?>" disabled>
          </div>
          <div class="form-group col-md-6">
            <label for="file_name">file name</label>
            <input type="text" class="form-control" id="file_name" placeholder="<?php echo $row["file_name"]; ?>" value="<?php echo $row["file_name"]; ?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="get_name">get name</label>
          <input type="text" class="form-control" id="get_name"placeholder="<?php echo $row["get_name"]; ?>" value="<?php echo $row["get_name"]; ?>" disabled>
        </div>
        <div class="form-group">
          <label for="get_action_name">get action name</label>
          <input type="text" class="form-control" id="get_action_name" placeholder="<?php echo $row["get_action_name"]; ?>" value="<?php echo $row["get_action_name"]; ?>" disabled>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="page_title">page title</label>
            <input type="text" class="form-control" id="page_title"placeholder="<?php echo $row["page_title"]; ?>" value="<?php echo $row["page_title"]; ?>" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="header_title">header title</label>
            <input type="text" class="form-control" id="header_title" placeholder="<?php echo $row["header_title"]; ?>" value="<?php echo $row["header_title"]; ?>" disabled>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" placeholder="<?php echo $row["name"]; ?>" value="<?php echo $row["name"]; ?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" placeholder="<?php echo $row["name"]; ?>" value="<?php echo $row["name"]; ?>" disabled>
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>

  <?php echo "</div>";
    }
    echo "</table>";
  }
}

$preparedquery->close();

include("./dbase/closedb.php");

?>