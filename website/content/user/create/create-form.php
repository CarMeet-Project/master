<div class="container">
    <h1>Account aanmaken</h1>

    <form action="./content/user/create/create-action.php" method="POST">
    <div class="form-group">

      <div class="form-row">
        
        <div class="col">
          <label for="username">
            <i class="fas fa-user"></i>
          </label>
          <input class="form-control" type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
        </div>

        <div class="col">
          <label for="email">
            <i class="fas fa-at"></i>
          </label>
          <input class="form-control" type="email" name="email" placeholder="Email" id="email" required>
        </div>

      </div>

    </div>

    <div class="form-group">

      <div class="form-row">
      
        <div class="col">
          <label for="password">
              <i class="fas fa-lock"></i>
          </label>
          <input class="form-control" type="password" name="password" placeholder="Wachtwoord" id="password" required>
        </div>

        <div class="col">
          <label for="submit">
            <i class="fa fa-user-plus"></i>
          </label>
          <input class="btn btn-outline-primary form-control" id="submit" type="submit" value="Aanmaken">
        </div>

      </div>

      <div id="submit" class="form-text text-muted">
        <div class="form-row">
          <div class="col">
            <small>Heb je al een Account?</small>
            <a class="btn btn-outline-primary btn-sms" href="./index.php?action=login">Inloggen</a>
          </div>
          <div class="col floatR noMargin">
            <a class="btn btn-outline-info" href="./index.php?action=login_admin">Login Beheer</a>
          </div>
        </div>
      </div>
    </div>

    </form>
</div>
