<?php if((isset($_SESSION["admin-loggedin"])) && ($_SESSION["admin-loggedin"] == "TRUE")) { ?>
  <div class="floatR noMargin">
  <a href="./index.php?action=create_admin" class="btn btn-outline-secondary">Admin Toevoegen</a>
  </div>
<?php } ?>


<a href="./index.php?action=verify_account" class="btn btn-outline-primary">Verifiëren</a>