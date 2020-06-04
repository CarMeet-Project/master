<link rel="stylesheet" href="../style/header.css"/>
<nav id="global">
    <ul>
        <li><a href="../pages/index.php">Welcome</a></li>
        <li><a href="../pages/agenda.php">Agenda</a></li>
        <li><a href="../pages/aboutUs.php">About Us</a></li>
        <li><a href="../pages/contact.php">Contact</a></li>

        <!-- if loggedin -->
        <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION["loggedin"] == "TRUE")) { ?>

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