<div class="container">
  <h1>Account aanmaken</h1>

  <form action="./content/user/create/create-action.php" method="POST">

    <div class="form-row">
      <div class="form-group col-6">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input class="form-control"type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
      </div>

      <div class="form-group col-6">
        <label for="email">
          <i class="fas fa-at"></i>
        </label>
        <input class="form-control" type="email" name="email" placeholder="Email" id="email" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col">
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input class="form-control" type="password" name="password" placeholder="Wachtwoord" id="password" required>
      </div>
    </div>

        
    <div class="col">
      <div class="form-group">
        <div class="form-group row">

          <div class="col-8 form-control">

            <div class="col">
              <p class="text-center form-control-plaintext">Alle gegevens kloppen,</p>
            </div>

            <div class="col">
              <input class="btn btn-outline-success form-control" type="submit" id="submit" placeholder="Maak Account" value="Aanmaken">
            </div>

          </div>

          <div class="col-1"></div>

            <div class="col">
              <div class="row">
                <a class="col btn btn-outline-primary form-control-plaintext" href="./index.php?action=login">Login Bezoekers</a>
              </div>
            
          <div class="col">
            <div class="col-1"></div>
          </div>


              <div class="row">
                <a class="col btn btn-outline-secondary form-control-plaintext" href="./index.php?action=login_admin">Login Beheer</a>
              </div>
            </div>

        </div>
      </div>
    </div>
  </form>
</div>
