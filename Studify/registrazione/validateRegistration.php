<html>
    <head></head>
    <body>
        <?php
            $dbconn= pg_connect("host=localhost port=5432
                dbname=StudifyDB
                user=postgres password=password")
                or die('Impossibile connettersi: '.pg_last_error());

            if (!(isset($_POST['registrationButton']))) {
                header("Location: ../index.html");
            }
            else {
                $email = $_POST['inputEmail'];
                $q1 = "select * from utenti where email=$1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Esiste già un account registrato con questa mail! </h1>
                        <a href=../login/index.html> Clicca qui per accedere! </a>"; 
                }
                else {
                    $nome=$_POST['inputName'];
                    $cognome=$_POST['inputSurname'];
                    $password=md5($_POST['inputPassword']);
                    $username=$_POST['inputUsername'];
                    $q2="insert into utenti values ($1,$2,$3,$4,$5)";
                    $data=pg_query_params($dbconn, $q2, array($email,$nome,$cognome,$password,$username));

                    if ($data) {
                        echo "<h1>Registrazione completata.</h1>";
                        echo "<a href=../index.html Premi qui </a> per ritornare alla home!.";
                    }

                }
            }
        ?>    
    </body>
</html>