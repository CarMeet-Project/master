<?php


    include("../../dbase/config.php");

    $userId = 1;
    $header = $_POST['header'];
    $discription = $_POST['discription'];
    $date = $_POST['date'];

    $sql = "INSERT INTO meetup (userid, header, description, location, date)
    VALUES ('$userId', '$header', '$discription', '$location', '$date')";

    if ($conn->query($sql) === TRUE) {
      header('Location: ../../index.php?action=agenda&al=create&suc=1');
?>
