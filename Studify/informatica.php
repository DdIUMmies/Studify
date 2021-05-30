<?php
  session_start();

  $dbconn= pg_connect("host=localhost port=5432
    dbname=StudifyDB
    user=postgres password=password")
    or die('Impossibile connettersi: '.pg_last_error());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Studify</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <scrip type="text/javascript" lang="javascript" src="script.js"></script>
        <script> src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"</script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>
    
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    </head>
        


</head>
<body>


 <!-- Navigation -->
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand" href="index.php">
		  <img src="img/logo_small.png" height="50" alt="" loading="lazy"/>
		</a>
	  </div>
	</nav>

	<div class="collapse navbar-collapse" id="collapseResponsive"></div>
	<ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
		<li class="nav-item ">
			<a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
				
		<li class="nav-item ">
			<a class="nav-link" href="APPUNTI.php">Appunti</a></li>
		<li class="nav-item ">
			<a class="nav-link" href="chiSiamo.html">Chi Siamo</a></li>
			<?php
					if(isset($_SESSION['id'])) {
						
						?>
					    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <?php echo($_SESSION['username']) ?> </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
							<a class="dropdown-item" href="profile.php"> Il tuo profilo </a>
						</li>
						<li class="nav-item active">
							  <form action="logout.php" method="post"> <input type="submit" value="Esci" class="btn btn-primary" style="background-color: navy;"/></form></li>
					<?php
					}
					else {
						?>
						<a class="nav-link" href="registrazione/index.html" > Registrati </a></li>
						<li class="nav-item active">
						<a class="btn btn-primary" style="background-color: navy;" href="login/index.php">Accedi</a></li>
						<?php
					}
					?>	
	</ul>
</nav>

<br>

<div class="container">
    <div class="text-center">
    <h1>Informatica </h1>
    </div>
    <br>
    <a href="/Studify/APPUNTI.php"><button type="button" class="btn btn-light"> ◀ Torna Indietro </button></a>
    <a href="/Studify/videoinfo.html"><button type="button-" class="btn btn-light"> Videolezioni 💻</button></a>
    <br>
    <br>
    <div class ="card ">
        <div class="row">
            <div class="col-md-4">
                <img src="/Studify/img/PDF_file_icon.jpg" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3>
				<?php $query_titolo_1="SELECT nome_documento FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result=pg_query($dbconn,$query_titolo_1);
                    $titolo_1=pg_fetch_array($result,0,PGSQL_NUM);
                    echo $titolo_1[0];?>
				</h3>
                <p>
				<?php $query_descr_1="SELECT descrizione FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result1=pg_query($dbconn,$query_descr_1);
                    $descr_1=pg_fetch_array($result1,0,PGSQL_NUM);
                    echo $descr_1[0];?>
				</p>
				<?php 
					$query_file="SELECT * FROM appunti app WHERE app.nome_documento='$titolo_1[0]'";
					$result0=pg_query($dbconn,$query_file);
					$riga=pg_fetch_array($result0);
					$nome_file=$riga['nome_file'];
					echo "<a href=\"$nome_file\">Visualizza </a>";
			?>
                
            <p class="card-text"><small class="text-muted">
			<?php $query_categoria_1="SELECT categoria FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result2=pg_query($dbconn,$query_categoria_1);
                    $categoria_1=pg_fetch_array($result2,0,PGSQL_NUM);
                    echo $categoria_1[0];?>
			</small></p>
			<div>
			<small class="text-muted">Caricato da:
			<?php $query_utente_up="SELECT utente FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result3=pg_query($dbconn,$query_utente_up);
                    $utente_up=pg_fetch_array($result3,0,PGSQL_NUM);
                    echo $utente_up[0];?>
			</small>
			</div>
            </div>
        </div>
        </div>

      </nav>
</div>
<br>
<br>
<div class="jumbotron-fluid" data-aos="zoom-in-out">
<div class=" text-center" data-aos="slide-right">
<h3>E'un po silenzioso qui...</h3>
<p>Aggiungi nuovi appunti!</p>
</div>
</div>

<br>
<br>
<br>


<!---                                   Footer                                     -->
<footer class="bg-light text-center text-black" style="background-color: antiquewhite;">
	<div class="container p-4">
	  <!-- Sezione: Social media -->
	  <section class="mb-4">
		<!-- Discord -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://discord.gg/hrwyUy7G9v" role="button"
		  ><i class="fab fa-discord"></i
		
		<!-- Facebook -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"
		  ><i class="fab fa-facebook-f"></i
		></a>
  
		<!-- Twitter -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/?lang=it" role="button" 
		  ><i class="fab fa-twitter"></i
		></a>
  
		<!-- Google -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-google"></i
		></a>
  
		<!-- Instagram -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"
		  ><i class="fab fa-instagram"></i
		></a>
  
		<!-- Linkedin -->
		<a class="btn btn-outline-dark  btn-floating m-1" href="https://it.linkedin.com/" role="button"
		  ><i class="fab fa-linkedin-in"></i
		></a>
  
		<!-- Github -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/DdIUMmies/Studify" role="button"
		  ><i class="fab fa-github"></i
		></a>
	  </section>
  
<!--                  Newsletter                -->
	  <section class="">
		<form action=""> 
		  <div class="row d-flex justify-content-center">
			<div class="col-auto">
			  <p class="pt-2">
				<strong>Iscriviti alla newsletter!</strong>
			  </p>
			</div>

			<div class="col-md-5 col-12">
			  <div class="form-outline form-dark mb-4">
				<input type="email" id="form5Example2" class="form-control" />
				<label class="form-label" for="form5Example2">Email </label>
			  </div>
			</div>
  
			<div class="col-auto">
			  <button type="submit" class="btn btn-outline-dark mb-4">
				Iscriviti
			  </button>
			</div>
		  </div>
		</form>
	  </section>

	  <section class="mb-4">
		<p>
		  Questo sito è stato progettato per il corso di linguaggi e tecnologie per il web del corso di laurea in Ingegneria 
		  Informatica de La Sapienza di Roma. Anche se è stato fatto a scopo didattico, i contenuti sono proprietà intellettuale dei suoi creatori e ne è vietata la duplicazione 
		  (parziale o totale) senza l'esplicito consenso di essi.
		</p>
	  </section>

<!--             Copyright                 -->
	<div class="text-center p-3" >
	  © 2021 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
  </footer>
</body>
</html>

<script>
    AOS.init({
       duration:1000,
       offset:120,
       easing: 'ease-in-out'

   });
   </script>
