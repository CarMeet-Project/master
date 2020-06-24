
<div class="floatR">
    <?php
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) {
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
            <a class="btn btn-outline-danger" href="./index.php?action=delete_meet">Meet verwijderen</a>

        <?php
        } else { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
            <a class="btn btn-outline-danger" href="./index.php?action=delete_meet">Meet verwijderen</a>
        <?php
        }
    }

    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
            <a class="btn btn-outline-danger" href="./index.php?action=delete_meet">Meet verwijderen</a>
        <?php
        } else { ?>

        <?php
        }
    } ?>
</div>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Meetups</title>
    </head>
    <body>
        <?php include("./content/meetup/show-meet.php"); ?>
    </body>
</html>
