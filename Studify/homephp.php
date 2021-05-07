<html>
    <title>
        Esempio php
    </title>
    <head>
        <!---gli script php sono inseriti in html-->

    </head>
    <body>
        <?php
        $dbconn = pg_connect("host=localhost port=5432)  
            dbname=EsempioConnessionePHP  
            user=postegres password=password")   // credenziali di accesso 
            or die('Could not connect: ' .pg_last_error());
            $query = 'SELECT * FROM organizzazione'; // quety salvata nella var query 
            $result = pg_query($query) or die('Query failed: '.
                pg_last_error());  //se non si connette genera errore
                //printing result in Html 
            // andiamo a staare i risultati all'interno del file html tabella


            $count =0; // cosi si creano le cariabili
            echo "<table>\n";
            while($line=pg_fetch_array($result, null, PGSQL_ASSOC)) { //  andiamo a generare righe della tabella
                echo "\tr<>\n";
                foreach ($line as $col_value) { // iteriamo attraverso le colonne
                    echo "\t\t<td>$col_value</td>";

                }
                echo "\tr<>\n>";
                $count++;
            }
            echo "<table\n>";
            echo "numero totale di risultati: <span style=\></span>";
            pg_free_result($result);
            pg_close($dbconn); // chiudiamo connessione database




        
        
        
        
        ?>

    </body>
</html>