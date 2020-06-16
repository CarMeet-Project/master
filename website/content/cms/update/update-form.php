<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if((!isset($_GET["id"])) || (empty($_GET["id"]))) {
  echo "er is een fout opgetreden";
  exit();
} else {
  $id = $_GET["id"];
}

$query = "SELECT * ";
$query .= "FROM cms ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
$result = $preparedquery->execute();

if(($result === FALSE) || ($preparedquery->errno)) {
  echo "er is een fout opgetreden";
  exit();
} else {
  $result = $preparedquery->get_result();

  if($result->num_rows === 0) {
    echo "geen rijen gevonden";
    exit();
  } else {

    while($row = $result->fetch_assoc()) { ?>

      <div class="floatR">
        <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
      
        <a class="btn btn-outline-primary" href="./index.php?action=details_cms&id=<?php echo $row["id"]; ?>">Details</a>
        <a class="btn btn-outline-secondary" href="./index.php?action=cms">Naar overzicht</a>
        <?php } ?>
      </div>
      <br>

      <form action="./content/cms/update/update-action.php" method="POST">
      <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $row["name"]; ?>" value="<?php echo $row["name"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="file_name">file name</label>
            <input type="text" class="form-control" id="file_name" name="file_name" placeholder="<?php echo $row["file_name"]; ?>" value="<?php echo $row["file_name"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="get_name">get name</label>
            <input type="text" class="form-control" id="get_name" name="get_name" placeholder="<?php echo $row["get_name"]; ?>" value="<?php echo $row["get_name"]; ?>">
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="get_action_name">get action name</label>
            <input type="text" class="form-control" id="get_action_name" name="get_action_name" placeholder="<?php echo $row["get_action_name"]; ?>" value="<?php echo $row["get_action_name"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="page_title">page title</label>
            <input type="text" class="form-control" id="page_title" name="page_title" placeholder="<?php echo $row["page_title"]; ?>" value="<?php echo $row["page_title"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="header_title">header title</label>
            <input type="text" class="form-control" id="header_title" name="header_title" placeholder="<?php echo $row["header_title"]; ?>" value="<?php echo $row["header_title"]; ?>">
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="header_content">header content</label>
            <input type="text" class="form-control" id="header_content" name="header_content" placeholder="<?php echo $row["header_content"]; ?>" value="<?php echo $row["header_content"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="midpage_content">midpage content</label>
            <input type="text" class="form-control" id="midpage_content" name="midpage_content" placeholder="<?php echo $row["midpage_content"]; ?>" value="<?php echo $row["midpage_content"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="footer_content">footer content</label>
            <input type="text" class="form-control" id="footer_content" name="footer_content" placeholder="<?php echo $row["footer_content"]; ?>" value="<?php echo $row["footer_content"]; ?>">
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <input class="btn btn-outline-success" type="submit" value="Wijzigen">
          </div>
        </div>

      </form>

  <?php }
  }
}

$preparedquery->close();

include("./dbase/closedb.php");

?>