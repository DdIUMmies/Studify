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
                    echo("<script LANGUAGE='JavaScript'>
                        window.alert('Esiste già un account registrato con questa email! Premi OK per essere reindirizzato alla pagina di Log In!');
                        window.location.href='../login/index.html';
                        </script>");
                }
                else {
                    $nome=$_POST['inputName'];
                    $cognome=$_POST['inputSurname'];
                    $password=md5($_POST['inputPassword']);
                    $username=$_POST['inputUsername'];
                    $universita=$_POST['inputUni'];
                    $corso=$_POST['inputCorso'];
                    $q2="insert into utenti values ($1,$2,$3,$4,$5,$6,$7)";
                    $data=pg_query_params($dbconn, $q2, array($email,$nome,$cognome,$password,$username,$universita,$corso));

                    if ($data) {
                        echo("<script LANGUAGE='JavaScript'>
                        window.alert('Registrazione completata. Benvenenuto in Studify! Premi OK per essere reindirizzato alla pagina di Log In!');
                        window.location.href='../login/index.html';
                        </script>");
                    }

                }
            }
        ?>    
    </body>
</html>