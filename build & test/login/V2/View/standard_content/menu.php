<ul>
    <li><a href="index.php?action=welcome">Welcome</a></li>
    <li><a href="index.php?action=info">Info</a></li>
    <li><a href="index.php?action=contact">Contact</a></li>
    <?php if(isset($_SESSION['loggedin'])) { ?>
        <li><a href="index.php?action=logout">Uitloggen</a></li>
    <?php } else { ?>
        <li><a href="index.php?action=login">Inloggen</a></li>
    <?php } ?>
</ul>