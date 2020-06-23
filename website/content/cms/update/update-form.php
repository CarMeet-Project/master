<?php


if((!isset($_GET["id"])) || (empty($_GET["id"]))) {
  echo "er is een fout opgetreden";
  exit();
} else {
  $id = $_GET["id"];
}

require("./content/handler/dataHandler.php"); ?>

<div class="floatR">
  <a class="btn btn-outline-primary" href="./index.php?action=details_cms&id=<?php echo $DATA["page_id"]; ?>">Details</a>
  <a class="btn btn-outline-secondary" href="./index.php?action=cms">Naar overzicht</a>
</div>

<form action="./content/cms/update/update-action.php" method="POST">
      <input type="hidden" id="page_id" name="page_id" value="<?php echo $DATA["page_id"]; ?>">

        <div class="form-DATA">

          <div class="form-group col-md-4">
            <label for="page_name">Page Name</label>
            <input type="text" class="form-control" id="page_name" name="page_name" placeholder="<?php echo $DATA["page_name"]; ?>" value="<?php echo $DATA["page_name"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="action_name">Action Name</label>
            <input type="text" class="form-control" id="action_name" name="action_name" placeholder="<?php echo $DATA["action_name"]; ?>" value="<?php echo $DATA["action_name"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="page_title">Page Title</label>
            <input type="text" class="form-control" id="page_title" name="page_title" placeholder="<?php echo $DATA["page_title"]; ?>" value="<?php echo $DATA["page_title"]; ?>">
          </div>

        </div>

        <div class="form-DATA">

          <div class="form-group col-md-4">
            <label for="header_title">Header Title</label>
            <input type="text" class="form-control" id="header_title" name="header_title" placeholder="<?php echo $DATA["header_title"]; ?>" value="<?php echo $DATA["header_title"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="header_content">Header Content</label>
            <input type="text" class="form-control" id="header_content" name="header_content" placeholder="<?php echo $DATA["header_content"]; ?>" value="<?php echo $DATA["header_content"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="midpage_content">Midpage Content</label>
            <input type="text" class="form-control" id="midpage_content" name="midpage_content" placeholder="<?php echo $DATA["midpage_content"]; ?>" value="<?php echo $DATA["midpage_content"]; ?>">
          </div>

        </div>

        <div class="form-DATA">

          <div class="form-group col-md-4">
            <label for="footer_content">Footer Content</label>
            <input type="text" class="form-control" id="footer_content" name="footer_content" placeholder="<?php echo $DATA["footer_content"]; ?>" value="<?php echo $DATA["footer_content"]; ?>">
          </div>

          <div class="form-group col-md-4">
            <input class="btn btn-outline-success" type="submit" value="Wijzigen">
          </div>
        </div>

      </form>
