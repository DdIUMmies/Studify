<?php $dbconn= pg_connect("host=localhost port=5432
    dbname=StudifyDB
    user=postgres password=password")
    or die('Impossibile connettersi: '.pg_last_error());?>
<?php
  session_start();

  if(isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studify</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script type="text/javascript" lang="javascript" src="script.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
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
			<a class="nav-link" href="#">Lavora con noi</a></li>
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
        <br>
        <div class="container">
		<?php 
			$query_file="SELECT documento FROM appunti app, utenti u WHERE  app.utente=u.username";
			$result0=pg_query($dbconn,$query_file);
			$file=pg_fetch_array($result0,0,PGSQL_NUM);
		?>
        <a href="/Studify/profile.php"><button type="button-" class="btn btn-light"> ◀ Torna Indietro </button></a>
        <br>
        <br>
        <h1>
		<?php $query_titolo="SELECT nome_documento FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result=pg_query($dbconn,$query_titolo);
                    $titolo=pg_fetch_array($result,0,PGSQL_NUM);
                    echo $titolo[0];
		?>
		</h1>
        <p class="card-text"><small class="text-muted">Inserito da 
			<?php	$query_utente="SELECT utente FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result1=pg_query($dbconn,$query_utente);
                    $utente=pg_fetch_array($result1,0,PGSQL_NUM);
                    echo $utente[0];
			?></small></p>
        </div>
        <br>
        <br>
        
    

<div class="container">
    <embed src=echo $file[0]" type="application/pdf" width="100%" height="600px"/>
    </div>"
    
<div class="container">
    
  <p><a href="/Studify/img/bitcoin_it (1).pdf">Scarica doucumento</a>.</p>


  <h3>Descrizione</h3>
  <!---da inserire lato server-->
  <?php $query_descr="SELECT descrizione FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result2=pg_query($dbconn,$query_descr);
                    $descr=pg_fetch_array($result2,0,PGSQL_NUM);
                    echo $descr[0];
  ?>
  <p class="card-text"><small class="text-muted">
  <?php $query_categoria="SELECT categoria FROM appunti app, utenti u WHERE  app.utente=u.username";
                    $result3=pg_query($dbconn,$query_categoria);
                    $categoria=pg_fetch_array($result3,0,PGSQL_NUM);
                    echo $categoria[0];
  ?>
  </small></p>
</div>
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




<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->

<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->



    </body>
</html>

<script>

$().button('dispose')
</script>

<?php

} else {
    header("Location: noAccess.html");
    ?>
    <form action="login/index.php" method="post">
    <input type="submit" value="Login"/>
    </form>
    <?php
}
?>


 