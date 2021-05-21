<html>
    <head></head>
    <body>
    <?php
        $dbconn= pg_connect("host=localhost port=5432
            dbname=StudifyDB
            user=postgres password=password")
            or die('Impossibile connettersi: '.pg_last_error());
        
        if (!(isset($_POST['loginButton']))) {
            header("Location: ../index.html");
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
                    echo "<a href= ../profile.php?name=$nome&surname=$cognome&emailadd=$email> Premi qui </a> per iniziare a navigare!";
                }
            }
        }

    ?>
    </body>
</html>