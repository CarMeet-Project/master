<div class="container">
  <h1>Inloggen Webeheer</h1>

  <form action="./content/admin/login/authenticate.php" method="POST">

    <div class="form-row">
      <div class="form-group col-6">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input class="form-control"type="text" name="username" placeholder="Gebruikersnaam/Email" id="username" required>
      </div>

      <div class="form-group col-6">
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input class="form-control" type="password" name="password" placeholder="Wachtwoord" id="password" required>
      </div>
    </div>

        
    <div class="col">
      <div class="form-group">
        <div class="form-group row">



        <div class="col">
            <div class="row">
                <input class="col btn btn-outline-primary form-control-plaintext" type="submit" id="submit" value="Inloggen">
            </div>

            <div class="col">
                <div class="col-1"></div>
            </div>



            <div class="row">
                <a class="col btn btn-outline-secondary form-control-plaintext" href="./index.php?action=login">Login Bezoekers</a>
            </div>
        </div>

          <div class="col-1"></div>

          <div class="col-6 form-control">

            <div class="col">
              <p class="text-center form-control-plaintext">Nog geen account?</p>
            </div>

            <div class="col">
              <a class="btn btn-outline-success form-control" href="./index.php?action=create_user">Maak Account</a>
            </div>

          </div>

        </div>
      </div>
    </div>
  </form>
</div>
