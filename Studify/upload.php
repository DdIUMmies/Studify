<?php 
    session_start();

    $dbconn= pg_connect("host=localhost port=5432
    dbname=StudifyDB
    user=postgres password=password")
    or die('Impossibile connettersi: '.pg_last_error());
    

    // array contenente i tipi di file per cui è possibile fare l'upload
    $tipi_consentiti = array("pdf");

    // dimesione massima del file (circa 400MB)
    $max_byte = 409600000;

    // verifico se il form è stato inviato  
    if(isset($_POST['submit']) and isset($_FILES["userfile"]))  
    {  
        // verifichiamo che l'utente abbia selezionato un file  
        if(trim($_FILES["userfile"]["name"]) == '')  
        {  
            echo 'Non hai selezionato nessun file!';  
        }  

        // verifichiamo che il file è stato caricato  
        else if(!is_uploaded_file($_FILES["userfile"]["tmp_name"]) or $_FILES["userfile"]["error"]>0)  
        {  
            echo 'Si sono verificati problemi nella procedura di upload!';  
        }  

        // verifichiamo che il tipo è fra quelli consentiti  
        else if(!in_array(strtolower(end(explode('.', $_FILES["userfile"]["name"]))),$tipi_consentiti))  
        {  
            echo 'Il file che si desideri caricare non è fra i tipi consentiti!';  
        }  

        // verifichiamo che la dimensione del file non eccede quella massima  
        else if($_FILES["userfile"]["size"] > $max_byte)  
        {  
            echo 'Il file che si desidera caricare eccede la dimensione massima!';  
        }  

        else
        {
         // echo "Il form è stato inviato con successo!";
        }
    }
    
    $titolo=$_POST['nome_documento'];
    $categoria=$_POST['categoria'];
    $codice_corso_laurea=$_POST['codice_corso_laurea'];
    $materia=$_POST['materia'];
    $descrizione=$_POST['descrizione_documento'];
    $file_name=$_FILES['userfile']['name'];
    $file_tmp_name=$_FILES['userfile']['tmp_name'];
    $utente=$_SESSION['username'];

	move_uploaded_file($file_tmp_name, $file_name);

    $insert_into_db = pg_query($dbconn,"INSERT INTO appunti (materia, nome_documento, descrizione, categoria, codice_corso_laurea,utente,nome_file)
                            VALUES ('$materia','$titolo','$descrizione','$categoria','$codice_corso_laurea','$utente','$file_name')");
    if($insert_into_db){
        header("Location: profile.php");
    } else{
        echo("<br>Caricamento non eseguito");
    }
?>