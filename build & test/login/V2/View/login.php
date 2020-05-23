<?php require("View/standard_content/header.php"); ?>

<form action="./view/authenticateLogin.php" method="POST">
    <input type="text" name="username" placeholder="Username" id="username" required>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <input type="submit" value="Login">
</form>

<?php require("View/standard_content/footer.php"); ?>