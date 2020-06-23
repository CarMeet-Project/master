<div class="container">
  <form action="./content/user/account/verify-action.php" method="POST">
    <?php echo "<input type=\"hidden\" name=\"id\" value=\"" . $_SESSION["id"] . "\">"; ?>

    <div class="row justify-content-md-center">

      <div class="col">
        <input type="text" name="verifyNumber" class="form-control" placeholder="Bijv. 1234" required>
      </div>

      <div class="col">
        <input type="submit" class="btn btn-primary form-control" vulue="verifiëren" class="form-control">
      </div>

    </div>
  </form>
</div>