<div class="floatR">
    <?php
    if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION['admin-loggedin'] == "TRUE")) { 
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>

        <?php
        } else { ?>
            
            <a class="btn btn-outline-success" href="./index.php?action=new_meet">Meet toevoegen</a>
        <?php
        }
    }

    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == "TRUE")) {
        if((isset($_SESSION["verified-loggedin"])) && ($_SESSION["verified-loggedin"] == "TRUE")) { ?>

            <a class="btn btn-outline-success" href="./index.php?action=new_meet_request">Meet toevoegen</a>

        <?php
        } else { ?>

        <?php
        }
    } ?>
</div>
