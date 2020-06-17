<?php

    include 'dbconnect.php';

    $userId = 1;
    $header = $_POST['header'];
    $discription = $_POST['discription'];
    $date = $_POST['date'];

    $sql = "INSERT INTO meetup (userid, header, description, date)
    VALUES ('$userId', '$header', '$discription', '$date')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
