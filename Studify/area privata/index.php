<?php
    session_start();

    if(isset($_SESSION['id'])) {
        echo "Ciaooo ".$_SESSION['id']."<br>";
        ?>
        <form action="logout.php" method="post"><input type="submit" value="Logout" /></form>
        <?php
    } else {
        echo "Non hai accesso";
        ?>
        <form action="loggin.php" method="post">
        <input type="submit" value="Login"/>
        </form>
        <?php
    }
?>    