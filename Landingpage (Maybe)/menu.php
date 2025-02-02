<link rel="stylesheet" href="./assets/header.css"/>
<nav id="global">
    <ul>
        <li><a href="./index.php?action=welcome">Welcome</a></li>
        <li><a href="./index.php?action=agenda">Agenda</a></li>
        <li><a href="./index.php?action=aboutUs">About Us</a></li>
        <li><a href="./index.php?action=contact">Contact</a></li>

        <!-- if admin-loggedin -->
        <?php if ((isset($_SESSION['admin-admin-loggedin'])) && ($_SESSION["admin-admin-loggedin"] == "TRUE")) { ?>

        <li class="dropdown">
            <a href="./index.php?action=read_product" class="dropbtn">Shop</a>
            <div class="dropdown-content">
                <a href="./index.php?action=add_product">Add</a>
                <a href="./index.php?action=read_product">Read</a>
                <a href="./index.php?action=update_product">Update</a>
                <a href="./index.php?action=delete_product">Delete</a>
                <a href="./index.php?action=deleted_product">Deleted</a>
            </div>
        </li>
        <li><a href="./index.php?action=logout">Uitloggen</a></li>

        <?php } else { ?>
        
        <li><a href="./index.php?action=login">Inloggen</a></li>
        
        <?php } ?>

    </ul>
</nav>