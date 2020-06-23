<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Meetups</title>
    </head>
    <body>
<<<<<<< HEAD
<<<<<<< HEAD
    <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) { ?>
        <div class="floatR">
            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
            <a class="btn btn-outline-danger" href="./index.php?action=delete_meet">Meet verwijderen</a>
        </div>
    <?php } ?>
        <?php include("./content/meetup/show-meet.php");?>
=======
=======
>>>>>>> parent of 5ba7f97... Merge branch 'master' of https://github.com/CarMeet-Project/master
    <?php if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) { ?>
        <div class="floatR">
        <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
    </div>
    <?php } ?>
        <?php include("./content/meetup/show-meet.php") ?>
<<<<<<< HEAD
>>>>>>> parent of 5ba7f97... Merge branch 'master' of https://github.com/CarMeet-Project/master
=======
>>>>>>> parent of 5ba7f97... Merge branch 'master' of https://github.com/CarMeet-Project/master
    </body>
</html>
