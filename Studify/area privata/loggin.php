<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD']=="POST") {
            $_SESSION['id'] = "Maxi";
            header("Location: index.php");
    }
?>