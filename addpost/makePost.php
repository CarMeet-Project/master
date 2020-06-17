<?php

    include 'dbconnect.php';

    $userId = 1;
    $header = $_POST['header'];
    $discription = $_POST['discription'];
    $date = $_POST['date'];

    echo $userId . $header . $discription . $date;

    $sql = "INSERT INTO posts (userid, header, discription, date) VALUES ($userId, $header, $discription, $date)";

    if (mysqli_query($conn, $sql)) {
        echo "uw post is toegevoegd.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
 ?>
