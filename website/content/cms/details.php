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

    while($row = $result->fetch_assoc()) { ?>
    <div class="floatR">
      <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
      
      <a class="btn btn-outline-warning" href="./index.php?action=update_cms&id=<?php echo $row["id"]; ?>">Wijzigen</a>
      <a class="btn btn-outline-secondary" href="./index.php?action=cms">Naar overzicht</a>
      <?php } ?>
      </div>
      <br>

      <form>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" placeholder="<?php echo $row["name"]; ?>" value="<?php echo $row["name"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="file_name">file name</label>
            <input type="text" class="form-control" id="file_name" placeholder="<?php echo $row["file_name"]; ?>" value="<?php echo $row["file_name"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="get_name">get name</label>
            <input type="text" class="form-control" id="get_name" placeholder="<?php echo $row["get_name"]; ?>" value="<?php echo $row["get_name"]; ?>" disabled>
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="get_action_name">get action name</label>
            <input type="text" class="form-control" id="get_action_name" placeholder="<?php echo $row["get_action_name"]; ?>" value="<?php echo $row["get_action_name"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="page_title">page title</label>
            <input type="text" class="form-control" id="page_title" placeholder="<?php echo $row["page_title"]; ?>" value="<?php echo $row["page_title"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="header_title">header title</label>
            <input type="text" class="form-control" id="header_title" placeholder="<?php echo $row["header_title"]; ?>" value="<?php echo $row["header_title"]; ?>" disabled>
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="header_content">header content</label>
            <input type="text" class="form-control" id="header_content" placeholder="<?php echo $row["header_content"]; ?>" value="<?php echo $row["header_content"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="midpage_content">midpage content</label>
            <input type="text" class="form-control" id="midpage_content" placeholder="<?php echo $row["midpage_content"]; ?>" value="<?php echo $row["midpage_content"]; ?>" disabled>
          </div>

          <div class="form-group col-md-4">
            <label for="footer_content">footer content</label>
            <input type="text" class="form-control" id="footer_content" placeholder="<?php echo $row["footer_content"]; ?>" value="<?php echo $row["footer_content"]; ?>" disabled>
          </div>

        </div>

      </form>

<?php }
  }
}

$preparedquery->close();

include("./dbase/closedb.php");

?>