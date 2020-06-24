<?php
    include("./dbase/config.php");
    include("./dbase/opendb.php");

    $sql = "SELECT userid, header, description, date FROM meetup";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit();
    }

    while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='meetup'>";
<<<<<<< HEAD
    echo "<a href='./index.php?action=meet_page&id=". $row["userid"] . "'>" . $row["header"] . "</a>" . "<p>" . $row["date"] . "</p>";
=======
    echo "<a href='./index.php?action=meet_page?id=". $row["userid"] . "'>" . $row["header"] . "</a>" . "<p>" . $row["date"] . "</p>";
>>>>>>> parent of e13f348... meetups verwijderen
    echo "<p>" . $row["description"] . "</p>";
    echo "</div><br><br>";
    }

 ?>
