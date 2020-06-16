<?php
// Start new or resume existing session
session_start();

// Change this to your connection info.
include("../../dbase/config.php");

// Try and connect using the info above.
include("../../dbase/opendb.php");

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($preparedquery = $dbaselink->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$preparedquery->bind_param('s', $_POST['username']);
	$preparedquery->execute();
	// Store the result so we can check if the account exists in the database.
	$preparedquery->store_result();

    if ($preparedquery->num_rows > 0) {
        $preparedquery->bind_result($id, $password);
        $preparedquery->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['password'] === $password) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../../index.php?al=login&suc=1');
        } else {
            $preparedquery->close();
            echo 'Verkeerde gebruikersnaam of wachtwoord ingevoerd!<br>';
            header('Location: ../../index.php?al=login&suc=2');
            exit();
        }
    } else {
        $preparedquery->close();
        echo 'Verkeerde gebruikersnaam of wachtwoord ingevoerd!<br>';
        header('Location: ../../index.php?action=login&al=login&suc=2');
        exit();
    }

}
include("../../dbase/closedb.php");

?>