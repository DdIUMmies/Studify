<html>
    <head></head>
    <body>
        <?php
            $dbconn= pg_connect("host=localhost port=5432
                dbname=StudifyDB
                user=postgres password=password")
                or die('Impossibile connettersi: '.pg_last_error());
            echo "Connessione riuscita.";

            if (!(isset($_POST["bottoneRegistrami"]))) {
                header("Location: index.html");
            }
            else {
                $email = $_POST['email'];
                $q1 = "SELECT * from utenti where email=$1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Esiste già un account registrato con questa mail!
                        <a href=login.html> Clicca qui per accedere! </a>"; 
                }
                else {
                    $nome=$_POST["nome"];
                    $cognome=$_POST["cognome"];
                    $password=md5($_POST["password"]);
                    $username=$_POST["username"];
                    $q2="INSERT into utente values ($1,$2,$3,$4,$5)";
                    $data=pg_query_params($q2, array($email,$nome,$cognome,$password,$username));

                    if ($data) {
                        echo "Registrazione completata.";
                        echo "<a href=index.html Premi qui </a> per ritornare alla home!.";
                    }

                }
            }
        ?>    
    </body>
</html>