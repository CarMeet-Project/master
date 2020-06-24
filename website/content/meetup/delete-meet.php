<?php
    include("../../dbase/config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM meetup WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
      header('Location: ../../index.php?action=delete_meet&al=deleted&suc=1');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
