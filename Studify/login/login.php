<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD']=="POST") {
            $_SESSION['id'] = "Maxi";
    }
?>
<html>
    <head></head>
    <body>
    <?php

        $dbconn= pg_connect("host=localhost port=5432
            dbname=StudifyDB
            user=postgres password=password")
            or die('Impossibile connettersi: '.pg_last_error());
        

        if (!(isset($_POST['loginButton']))) {
            header("Location: ../index.php");
        }
        else {
            $email = $_POST['inputEmail'];
            $q1 = "select * from utenti where email=$1";
            $result = pg_query_params($dbconn, $q1, array($email));
            if (!($line=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                echo "<h1> Non sei ancora registrato!</h1>
                    <a href=../registrazione/index.html>
                    Clicca qui per registrarti subito!
                    </a>";
            }
            else {
                $password = md5($_POST['inputPassword']);
                $q2="select * from utenti where email=$1 and password=$2";
                $result = pg_query_params($dbconn, $q2, array($email, $password));
                if (!($line=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                    echo "<h1> Password errata </h1>";
                }
                else {
                    $nome=$line['nome'];
                    $cognome=$line['cognome'];
                    $email=$line['email'];
                    $username=$line['username'];
                    $universita=$line['universita'];
                    $corso=$line['corso'];
                    $_SESSION['email']=$email;
                    $_SESSION['nome']=$nome;
                    $_SESSION['cognome']=$cognome;
                    $_SESSION['universita']=$universita;
                    $_SESSION['corso']=$corso;
                    $_SESSION['username']=$username;
                    
                    

                    header("Location: ../profile.php");
                
                }
            }
        }

    ?>
    </body>
</html>