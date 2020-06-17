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
