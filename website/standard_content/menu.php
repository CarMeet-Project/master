<nav class="global">
    <ul>
        <li><a href="./index.php?action=welcome">Welcome</a></li>
        <li><a href="./index.php?action=agenda">Agenda</a></li>
        <li><a href="./index.php?action=aboutUs">About Us</a></li>
        <li><a href="./index.php?action=contact">Contact</a></li>

        <!-- if loggedin -->
        <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION["loggedin"] == "TRUE")) { ?>

        <li class="dropdown">
            <a href="./index.php?action=read_product">Shop</a>
            <div class="dropdown-content">
                <a href="./index.php?action=add_product">Add</a>
                <a href="./index.php?action=read_product">Read</a>
                <a href="./index.php?action=updatelist_product">Update</a>
                <a href="./index.php?action=deletelist_product">Delete</a>
                <a href="./index.php?action=deleted_product">Deleted</a>
            </div>
        </li>
        <li><a href="./index.php?action=logout">Uitloggen</a></li>

        <?php } else { ?>

            <li><a href="./index.php?action=shop">Shop</a></li>
            <li><a href="./index.php?action=login">Inloggen</a></li>
        
        <?php } ?>

    </ul>
</nav>