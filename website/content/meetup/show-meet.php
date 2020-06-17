<?php
    include("./dbase/config.php");
    include("./dbase/opendb.php");

    $sql = "SELECT userid, header, description, date FROM meetup";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
    }

    while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='meetup'>";
    echo "<h4>" . $row["header"] . "</h4>" . "<p>" . $row["date"] . "</p>";
    echo "<p>" . $row["description"] . "</p>";
    echo "</div><br><br>";
    }

 ?>
