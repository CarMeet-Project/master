<div class="container">
    <h1>Login</h1>
    <form action="./content/login/authenticate.php" method="POST">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Wachtwoord" id="password" required>
        <input type="submit" value="Login">
    </form>
</div>

