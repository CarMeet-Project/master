<?php

  include("./dbase/config.php");
  include("./dbase/opendb.php");

  $query = "SELECT id, ";
  $query .= "voornaam ";
  $query .= "FROM members ";

  $preparedquery = $dbaselink->prepare($query);
  $preparedquery->execute();

  if($preparedquery->errno) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();
    
    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
    } else {
      
      echo "<table>";
      echo "  <tr>";
      echo "    <th>Naam</th>";
      echo "    <th>Verwijderen</th>";
      echo "  </tr>";
      
      while($row = $result->fetch_assoc()) {
        echo "  <tr>";
        echo "    <td>  <a href=\"./details.php?id=" . $row["id"] . "\">" . $row["voornaam"] . "</a>" . "</td>";
        echo "    <td>  <a href=\"./deletemember.php?id=" . $row["id"] . "\">" . " " . "<button>verwijder</button>" . "</a>" . "<br>" . "</td>";
        echo "  </tr>";
      };
      echo "</table>";
    }
  }

  $preparedquery->close();

  echo "<br><br>";
  echo "<a href=\"./memberview.php\"><button>Overzicht Members</button></a>";
  include("./dbase/closedb.php");

?>