<!DOCTYPE html>
<html>

  <head>
    <title>Member Toevoegen</title>
  </head>

  <body>

  <form action="./memberresult.php" method="POST">
      <div class="form">
      <input type="text" placeholder="voornaam" name="voornaam" required />
      <br>
      <input type="text" placeholder="achternaam" name="achternaam" required />
      <br>
      <select name="authorisatie">
        <option value="authorisatie">1</option>
        <option value="authorisatie">2</option>
        <option value="authorisatie">3</option>
      </select>
      <br>
      <input type="submit" placeholder="toevoegen">
    </form>
    </div>
    <br><br>
    <a href="./index.php"><button>Terug</button></a>
  </body>

</html>