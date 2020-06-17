<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if((isset($_POST["voornaam"])) || 
  (isset($_POST["achternaam"])) || 
  (isset($_POST["authorisatie"]))) {

    if((empty($_POST["voornaam"])) ||
    (empty($_POST["achternaam"])) || 
    (empty($_POST["authorisatie"]))) {
  
    echo "Er is een fout opgetreden! Probeer opnieuw uw lid toe te voegen!";
    echo "<a href=\"./addmembers.php\">Voeg het nieuwe lid opnieuw toe!</a>";
    exit;
  }
} else {
  echo "Er is een fout opgetreden! Probeer opnieuw uw lid toe te voegen!!";
  echo "<a href=\"./addmembers.php\">Voeg het nieuwe lid opnieuw toe</a>";
  exit;
}

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$authorisatie = $_POST["authorisatie"];


$query = "INSERT INTO members ";
$query .= "(voornaam, ";
$query .= "achternaam, ";
$query .= "authorisatie) ";
$query .= "VALUES (?,?,?) ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("sss", $voornaam, $achternaam, $authorisatie);
$result = $preparedquery->execute();

if (($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden, Probeer opnieuw uw lid toe te voegen! ";
} else {
  echo "Member succesvol toegevoegd!<br>";
  echo "<a href=\"./admin.php\"><button>Terug</button></a>";
}

$preparedquery->close();

include("./dbase/closedb.php");

require("footer.php");

?>