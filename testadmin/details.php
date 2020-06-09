<?php

  include("./dbase/config.php");
  include("./dbase/opendb.php");

  $query = "SELECT id, voornaam, achternaam, authorisatie ";
  $query .= "FROM members ";
  $query .= "WHERE id=? ";

  $preparedquery = $dbaselink->prepare($query);

  $id = $_GET["id"];
  $preparedquery->bind_param("i", $id);
  $preparedquery->execute();

  if($preparedquery->errno) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();
    
    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
    } else {
      while($row = $result->fetch_assoc()) {
        echo "Id = " . $row["id"] . "<br>" . " " . "Voornaam = " . $row["voornaam"] . "<br>" . " " . "Achternaam = " . $row["achternaam"] . "<br>" . " " . "Authorisatie = " . $row["authorisatie"] . " " . "<br>";
      }
    }
  }

  $preparedquery->close();

  echo "<br><br>";

  echo "<a href=\"./memberview.php\"><button>Overzicht Members</button></a>";

  include("./dbase/closedb.php");

?>