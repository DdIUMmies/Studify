<?php
$dbconn= pg_connect("host=localhost port=5432
        dbname=StudifyDB
        user=postgres password=password")
        or die('Impossibile connettersi: '.pg_last_error());
        echo "Connessione riuscita.";
