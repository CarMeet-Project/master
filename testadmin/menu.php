<nav class="global">
    <ul>
        <li><a href="./index.php?action=welcome">Home</a></li>
        <li><a href="./index.php?action=agenda">Agenda</a></li>
        <li><a href="./index.php?action=aboutUs">Over Ons</a></li>
        <li><a href="./index.php?action=contact">Contact</a></li>

        <!-- if admin-loggedin -->
        <?php if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION["admin-loggedin"] == "TRUE")) { ?>

        <li class="dropdown">
            <a href="./index.php?action=shop">Winkel</a>
            <div class="dropdown-content">
                <a href="./index.php?action=read_product">Overicht</a>
                <a href="./index.php?action=add_product">Toevoegen</a>
                <a href="./index.php?action=updatelist_product">Wijzigen</a>
                <a href="./index.php?action=deletelist_product">Deactiveren</a>
                <a href="./index.php?action=deletedlist_product">Verwijderde</a>
            </div>
        </li>
        <li><a href="./index.php?action=cms">CMS</a></li>
        <li><a href="./index.php?action=logout">Uitloggen</a></li>

        <?php } else { ?>

            <li><a href="./index.php?action=shop">Winkel</a></li>
            <li><a href="./index.php?action=login">Inloggen</a></li>
        
        <?php } ?>

    </ul>
</nav>