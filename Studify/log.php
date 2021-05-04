<html>
    <head></head>
    <body>
    <?php
        $dbconn= pg_connect("host=localhost port=5432
            dbname=StudifyDB
            user=postgres password=password")
            or die('Impossibile connettersi: '.pg_last_error());
        echo "Connessione riuscita.";
        
        if (!(isset($_POST['loginButton']))) {
            header('Location: index.html');
        }
        else {
            $email = $_POST["email"];
            $q1 = "SELECT * from utenti where email=$1";
            $result = pg_query_params($dbconn, $q1, array($email));
            if (!($line=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                echo "<h1> Non sei ancora registrato!</h1>
                    <a href= registrazione.html>
                    Clicca qui per registrarti subito!
                    </a>";
            }
            else {
                $password = md5($_POST["password"]);
                $q2="SELECT * from utenti where email=$1 and password=$2";
                $result = pg_query_params($q2, array($email, $password));
                if (!($line=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                    echo "Password errata";
                }
                else {
                    $nome=$line["nome"];
                    echo "<a href=index.html?name=$nome> Premi qui </a> per iniziare a navigare!";

                }
            }
        }

    ?>
    </body>
</html>