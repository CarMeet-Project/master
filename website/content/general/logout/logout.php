<?php
// starts new or resume excisting session
// session_start();

// destroys all variables in session
session_unset();

// desstroys all data from session
session_destroy();

// Redirect to the:
if((isset($_GET["redir"])) && (!empty($_GET["redir"]))) {
  $redir = $_GET["redir"];

  switch ($redir) {
    case 'create_user':
      header('Location: ./index.php?action=create_user&al=logout&suc=1');
      break;
    
    default:
      header('Location: ./index.php?action=welcome&al=logout&suc=1');
      break;
    }

  } else {
    header('Location: ./index.php?action=welcome&al=logout&suc=1');
  }


?>