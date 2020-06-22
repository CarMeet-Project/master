<div class="container">
    <h1>Login</h1>

    <form action="./content/user/login/authenticate.php" method="POST">
    <div class="form-group">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input class="form-control"type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
    </div>

    <div class="form-group">
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input class="form-control" type="password" name="password" placeholder="Wachtwoord" id="password" required>
    </div>
        
    <div class="form-group">
        <input class="btn btn-outline-primary form-control" id="submit" type="submit" value="Login">

        <div id="submit" class="form-text text-muted">
            <div class="row">

                <div class="col">
                    <small>Nog geen Account?</small>
                    <a class="btn btn-outline-primary btn-sms" href="./index.php?action=create_user">Maak Account</a>
                </div>

                <div class="col floatR noMargin">
                    <a class="btn btn-outline-info" href="./index.php?action=login_admin">Login Beheer</a>
                </div>
                
            </div>
        </div>
    
    </div>

    </form>
</div>
