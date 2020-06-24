<?php if((isset($_SESSION["admin-loggedin"])) && ($_SESSION["admin-loggedin"] == "TRUE")) { ?>
  <div class="floatR noMargin">
  <a href="./index.php?action=create_admin" class="btn btn-outline-secondary">Admin Toevoegen</a>
  </div>
<?php } ?>

<?php if((isset($_SESSION["admin-loggedin"])) && ($_SESSION["admin-loggedin"] == "TRUE")) { ?>
  <a href="./index.php?action=verify_admin_account" class="btn btn-outline-primary">Verifiëren</a>
<?php } else { ?>
  <a href="./index.php?action=verify_account" class="btn btn-outline-primary">Verifiëren</a>
<?php } ?>