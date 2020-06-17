<?php


    include '../../dbase/config.php';

    $userId = 1;
    $header = $_POST['header'];
    $discription = $_POST['discription'];
    $date = $_POST['date'];

    $sql = "INSERT INTO meetup (userid, header, description, date)
    VALUES ('$userId', '$header', '$discription', '$date')";

    if ($conn->query($sql) === TRUE) {
      header('Location: ../../index.php?action=agenda&al=create&suc=1');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
