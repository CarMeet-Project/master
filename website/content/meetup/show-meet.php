<?php
    include("./dbase/config.php");
    include("./dbase/opendb.php");

    $sql = "SELECT id, userid, header, description, location, date FROM meetup";
    
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 0) {
        echo "Geen meetups gevonden";
        exit();
    }

    while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='meetup'>";
    echo "<a href='./index.php?action=meet-page&id=". $row["id"] . "'>" . $row["header"] . "</a>" . "<p>" . $row["date"] . "<br>";
    echo $row["location"] . "</p>";
    echo "<p>" . $row["description"] . "</p>";
    echo "</div><br><br>";
    }
 ?>
