<?php 
    $dbconn= pg_connect("host=localhost port=5432
    dbname=Appunti_Studify
    user=admin password=1846839")
    or die('Impossibile connettersi: '.pg_last_error());
    echo "Connessione riuscita.";

    // cartella in cui far l'upload
    $cartella_upload = "Downloads/";

    // array contenente i tipi di file per cui è possibile fare l'upload
    $tipi_consentiti = array("pdf","mkv","mp4");

    // dimesione massima del file (circa 400MB)
    $max_byte = 409600000;

    // verifico se il form è stato inviato  
    if(isset($_POST['up']) and isset($_FILES["upload"]))  
    {  
        // verifichiamo che l'utente abbia selezionato un file  
        if(trim($_FILES["upload"]["name"]) == '')  
        {  
            echo 'Non hai selezionato nessun file!';  
        }  

        // verifichiamo che il file è stato caricato  
        else if(!is_uploaded_file($_FILES["upload"]["tmp_name"]) or $_FILES["upload"]["error"]>0)  
        {  
            echo 'Si sono verificati problemi nella procedura di upload!';  
        }  

        // verifichiamo che il tipo è fra quelli consentiti  
        else if(!in_array(strtolower(end(explode('.', $_FILES["upload"]["name"]))),$tipi_consentiti))  
        {  
            echo 'Il file che si desidera caricare non è fra i tipi consentiti!';  
        }  

        // verifichiamo che la dimensione del file non eccede quella massima  
        else if($_FILES["upload"]["size"] > $max_byte)  
        {  
            echo 'Il file che si desidera caricare eccede la dimensione massima!';  
        }  
        
        // verifichiamo che la cartella di destinazione settata esista  
        else if(!is_dir($cartella_upload))  
        {  
            echo 'La cartella in cui si desidera salvare il file non esiste!';  
        }  
        
        // verifichiamo che la cartella di destinazione abbia i permessi di scrittura  
        else if(!is_writable($cartella_upload))  
        {  
            echo "La cartella in cui fare l'upload non ha i permessi!";  
        }  

        // verifichiamo il successo della procedura di upload nella cartella settata  
        else if(!move_uploaded_file($_FILES["upload"]["tmp_name"], $cartella_upload.$_FILES["upload"]["name"]))  
        {  
            echo 'Ops qualcosa è andato storto nella procedura di upload!';  
        }  

        // altrimenti significa che è andato tutto ok  
        else  
        {  
            echo 'Upload eseguito correttamente!';  
        }  
    }  
?>