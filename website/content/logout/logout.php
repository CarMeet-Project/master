<?php
// starts new or resume excisting session
session_start();

// destroys all variables in session
session_unset();

// desstroys all data from session
session_destroy();

// Redirect to the:
header('Location: ./index.php');


?>