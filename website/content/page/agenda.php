<<<<<<< HEAD
<div class="floatR">
    <?php
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) { 
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>

        <?php
        } else { ?>
            
            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
        <?php
        }
    }

    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet_request">Meet toevoegen</a>

        <?php
        } else { ?>

        <?php
        }
    } ?>
</div>

<?php
include("./content/meetup/show-meet.php") ?>
=======
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Meetups</title>
    </head>
    <body>
    <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
        <div class="floatR">
        <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
    </div>
    <?php } ?>
        <?php include("./content/meetup/show-meet.php") ?>
    </body>
</html>
>>>>>>> parent of cd6bc37... BIG UDPATE (ergens klein foutje kan nie tvinde)
