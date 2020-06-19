<?php

$customer_page = "TRUE";

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
  $page_id = $_GET["id"];
} else {
  echo "er is een fout opgetreden";
  exit();
}

require("./content/handler/dataHandler.php");

if($DATA["customer_page"] == "FALSE") {
  // header("Location: ./index.php?action=welcome");
}

?>
<div class="floatR">
  <a class="btn btn-outline-warning" href="./index.php?action=update_cms&id=<?php echo $DATA["page_id"]; ?>">Wijzigen</a>
  <a class="btn btn-outline-secondary" href="./index.php?action=cms">Naar overzicht</a>
</div>

<form>

  <div class="form-DATA">

    <div class="form-group col-md-4">
      <label for="page_name">Page Name</label>
      <input type="text" class="form-control" id="page_name" name="page_name" placeholder="<?php echo $DATA["page_name"]; ?>" value="<?php echo $DATA["page_name"]; ?>" disabled>
    </div>

    <div class="form-group col-md-4">
      <label for="action_name">Action Name</label>
      <input type="text" class="form-control" id="action_name" name="action_name" placeholder="<?php echo $DATA["action_name"]; ?>" value="<?php echo $DATA["action_name"]; ?>" disabled>
    </div>

    <div class="form-group col-md-4">
      <label for="page_title">Page Title</label>
      <input type="text" class="form-control" id="page_title" name="page_title" placeholder="<?php echo $DATA["page_title"]; ?>" value="<?php echo $DATA["page_title"]; ?>" disabled>
    </div>

  </div>

  <div class="form-DATA">

    <div class="form-group col-md-4">
      <label for="header_title">Header Title</label>
      <input type="text" class="form-control" id="header_title" name="header_title" placeholder="<?php echo $DATA["header_title"]; ?>" value="<?php echo $DATA["header_title"]; ?>" disabled>
    </div>

    <div class="form-group col-md-4">
      <label for="header_content">Header Content</label>
      <input type="text" class="form-control" id="header_content" name="header_content" placeholder="<?php echo $DATA["header_content"]; ?>" value="<?php echo $DATA["header_content"]; ?>" disabled>
    </div>

    <div class="form-group col-md-4">
      <label for="midpage_content">Midpage Content</label>
      <input type="text" class="form-control" id="midpage_content" name="midpage_content" placeholder="<?php echo $DATA["midpage_content"]; ?>" value="<?php echo $DATA["midpage_content"]; ?>" disabled>
    </div>

  </div>

  <div class="form-DATA">

    <div class="form-group col-md-4">
      <label for="footer_content">Footer Content</label>
      <input type="text" class="form-control" id="footer_content" name="footer_content" placeholder="<?php echo $DATA["footer_content"]; ?>" value="<?php echo $DATA["footer_content"]; ?>" disabled>
    </div>

  </div>

</form>