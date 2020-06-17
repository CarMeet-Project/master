<?php

if (!$_SESSION["loggedin"]) {
    echo "U bent nog niet ingelogd. U moet ingelogd zijn om een meet aan te maken.";
    die;
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="./content/meetup/makePost.php" method="post">
            <input type="text" name="header" placeholder="header">
            <input type="text" name="discription" placeholder="discription">
            <input type="date" name="date">
            <input type="submit" name="" value="submit">
        </form>
    </body>
</html>
