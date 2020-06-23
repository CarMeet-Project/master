<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE") && (isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>
    <div class="floatR">
        <a class="btn btn-outline-warning" href="./index.php?action=update_meet&id=<?php echo $row["id"]; ?>">Wijzigen</a>
        <a class="btn btn-outline-secondary" href="./index.php?action=agenda">Naar overzicht</a> 
    </div>
<?php } else { ?>
    <div class="floatR">
        <a class="btn btn-outline-secondary" href="./index.php?action=agenda">Naar overzicht</a> 
    </div>
<?php }

if((isset($_GET["id"])) && (!empty($_GET["id"]))) {
    $id = $_GET["id"];
} else {
    echo "er is een fout opgetreden";
    exit();
}

$query = "SELECT * ";
$query .= "FROM meetup ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
$result = $preparedquery->execute();

if(($result === FALSE) || ($preparedquery->errno)) {
    echo "er is een fout opgetreden";
    exit();
} else {
    $result = $preparedquery->get_result();

    if($result->num_rows === 0) {
        echo "er zijn geen rijen gevonden";
        exit();
    } else {

        while ($row = $result->fetch_assoc()) {
            
            echo "<h1>" . $row["header"] . "</h1>";
            echo $row["description"] . "<br>";
            echo $row["place"] . "<br>";
            echo $row["time"] . "<br>";
            echo $row["date"] . "<br>";
            echo $row["ticketprice"];

        }
    }
}

$preparedquery->close();

include("./dbase/closedb.php");

?>
